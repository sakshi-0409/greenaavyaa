@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="{{url('leads')}}">List All Leads</a>
                    <h4>Create Lead</h4>
                    <form id="form" method="post" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-3">
                            <label for="leadid" class="form-label">Lead Id</label>
                            <input name="leadid" value="{{@$lead->lead_id}}" type="text" class="@error('leadid') is-invalid @enderror form-control" placeholder="#####" id="leadid">
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label">Lead Date</label>
                            <input name="date" type="date" value="{{@$lead->date}}" class="form-control" id="date">
                        </div>
                        <div class="col-3">
                            <label for="leadsource" class="form-label">Lead Source</label>
                            <select name="leadsource" id="leadsource" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Social Media">Social Media</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Networking">Networking</option>
                                <option value="Website">Website</option>
                                <option value="Email">Email</option>
                                <option value="SMS">SMS</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="Campaign">Campaign</option>
                                <option value="Fairs">Fairs</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="leadby" class="form-label">Lead By</label>
                            <select name="leadby" id="leadby" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Broker">Broker</option>
                                <option value="Dealer">Dealer</option>
                                <option value="Agent">Agent</option>
                                <option value="Realtor">Realtor</option>
                                <option value="Builder">Builder</option>
                                <option value="Coloniser">Coloniser</option>
                                <option value="Developer">Developer</option>
                                <option value="Real Estate Company">Real Estate Company</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="leadfor" class="form-label">Lead For</label>
                            <select name="leadfor" id="leadfor" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="buy">Buy</option>
                                <option value="sale">Sale</option>
                                <option value="rent">Rent</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="leadtype" class="form-label">Lead Type</label>
                            <select name="leadtype" id="leadtype" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Plot">Plot</option>
                                <option value="House">House</option>
                                <option value="Land">Land</option>
                                <option value="Raw House">Raw House</option>
                                <option value="Bunglow">Bunglow</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Office">Office</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Villas">Villas</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="priority" class="form-label">Priority</label>
                            <select name="priority" id="priority" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="low">Low</option>
                                <option value="normal">Normal</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>

                        <div class="col-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Open">Open</option>
                                <option value="Rejected">Rejected</option>
                                <option value="Inprocess">Inprocess</option>
                                <option value="Executed">Executed</option>
                                <option value="Awaited">Awaited</option>
                                <option value="Onhold">Onhold</option>
                                <option value="Cancelled">Cancelled</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="companyname" class="form-label">Company Name (If Any)</label>
                            <input name="companyname" value="{{@$lead->company_name}}" type="text" class="form-control" placeholder="Company Name" id="companyname">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Person Name</label>
                            <input name="name" type="text" value="{{@$lead->name}}" class="form-control" placeholder="Name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" value="{{@$lead->email}}" placeholder="Email" class="form-control" id="email">
                        </div>
                        <div class="col-md-3">
                            <label for="mobnumber" class="form-label">Mobile No.</label>
                            <input name="mobile" type="text" value="{{@$lead->mobile_no}}" placeholder="Mobile No." class="form-control" id="mobnumber">
                        </div>
                        <div class="col-md-3">
                            <label for="wpnumber" class="form-label">Whatsapp No.</label>
                            <input name="whatsapp" type="text" value="{{@$lead->whatsapp_no}}" placeholder="Whatsapp No." class="form-control" id="wpnumber">
                        </div>




                        <div class="col-md-3">
                            <label for="country" class="form-label">Country</label>
                            <select name="country" id="country" class="form-select">
                                <option selected></option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Nepal</option>
                                <option>Bhutan</option>
                                <option>SriLanka</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="State" class="form-label">State</label>
                            <select name="state" id="State" class="form-select">
                                <option selected></option>
                                <option>Madhya Pradesh</option>
                                <option>Rajasthan</option>
                                <option>Gujrat</option>
                                <option>Punjab</option>
                                <option>Maharashtra</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="city" class="form-label">City</label>
                            <select name="city" id="city" class="form-select">
                                <option selected></option>
                                <option>Indore</option>
                                <option>Bhopal</option>
                                <option>Jabalpur</option>
                                <option>Ujjain</option>
                                <option>Dewas</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input name="zip" value="{{@$lead->zip}}" type="text" class="form-control" placeholder="Zip" id="Zip">
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input name="address" value="{{@$lead->address}}" type="text" class="form-control" placeholder="Property Address" id="address">
                        </div>
                        <div class="col-md-6">
                            <label for="location" class="form-label">Location</label>
                            <input name="location" value="{{@$lead->location}}" type="text" class="form-control" placeholder="Property Location" id="location">
                        </div>
                        <div class="col-md-12">
                            <label for="remark">Remark</label>
                            <textarea name="remark" class="form-control" placeholder="Comment Related To Lead" id="remark"></textarea>
                        </div>

                        <div class="col-3">
                            <button type="submit" class="btn btn-success">Create</button>
                            <button type="cancel" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    $(document).ready(function() {

        $("#form").validate({
            rules: {
                leadid: {
                    required: true
                    , minlength: 2
                }
                , date: {
                    required: true
                }
                , leadsource: {
                    required: true
                }
                , leadby: {
                    required: true
                }
                , leadfor: {
                    required: true
                }
                , leadtype: {
                    required: true
                }
                , priority: {
                    required: true
                }
                , status: {
                    required: true
                }
                , companyname: {
                    required: true
                    , minlength: 2
                }
                , name: {
                    required: true
                    , minlength: 2
                }
                , email: {
                    required: true
                    , minlength: 6
                }
                , mobile: {
                    required: true
                    , minlength: 10
                }
                , whatsapp: {
                    required: true
                    , minlength: 10
                }
                , country: {
                    required: true
                }
                , state: {
                    required: true
                }
                , city: {
                    required: true
                }
                , zip: {
                    required: true
                    , minlength: 5
                }
                , address: {
                    required: true
                    , minlength: 2
                }
                , location: {
                    required: true
                }
                , remark: {
                    required: true
                    , minlength: 2
                }
            }
            , messages: {
                leadid: {
                    required: "Please enter lead id"
                }
                , date: {
                    required: "Please enter date"
                }
                , leadsource: {
                    required: "Please select source"
                }
                , leadby: {
                    required: "Please select lead by"
                }
                , leadfor: {
                    required: "Please select lead for"
                }
                , leadtype: {
                    required: "Please select lead type"
                }
                , priority: {
                    required: "Please select priority"
                }
                , status: {
                    required: "Please select status"
                }
                , companyname: {
                    required: "Please enter company name"
                }
                , name: {
                    required: "Please enter name"
                }
                , email: {
                    required: "Please enter name"
                }
                , mobile: {
                    required: "Please enter name"
                }
                , whatsapp: {
                    required: "Please enter whatsapp number"
                }
                , country: {
                    required: "Please select country"
                }
                , state: {
                    required: "Please select state"
                }
                , city: {
                    required: "Please select city"
                }
                , zip: {
                    required: "Please entry city zip number"
                }
                , address: {
                    required: "Please enter address"
                }
                , location: {
                    required: "Please enter location"
                }
                , remark: {
                    required: "Please fill remark"
                }
            }
            , submitHandler: function(form) {
                var formData = new FormData(form);
                console.log(formData);

                var url = '{{url("create-lead")}}';


                $.ajax({

                    url: url
                    , type: 'POST'
                    , data: formData,

                    contentType: false
                    , processData: false
                    , success: function(response) {
                        $('#form').trigger('reset');
                    }
                    , error: function(xhr, status, error) {
                        // Handle error response
                        console.error("Error saving user data:", error);
                    }
                });
            }
        });
    });

</script>
@endpush
@include('layouts.footers.auth.footer')
@endsection
