@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h4>Update Contact</h4>
                    <a href="{{url('contacts')}}">List All Contacts</a>
                    <form id="form" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-3">
                            <label for="contactid" class="form-label">Contact Id</label>
                            <input name="contactid" value="{{@$contact->contactid}}" type="text" class="form-control" placeholder="#####" id="contactid">
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label">Contact Date</label>
                            <input name="date" value="{{@$contact->date}}" type="date" class="form-control" id="date">
                        </div>
                        <div class="col-3">
                            <label for="source" class="form-label">Contact Source</label>
                            <select name="source" id="source" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Social Media" {{@$contact->source === 'Social Media' ? 'selected': ''}}>Social Media</option>
                                <option value="Digital Marketing" {{@$contact->source === 'Digital Marketing' ? 'selected': ''}}>Digital Marketing</option>
                                <option value="Networking" {{@$contact->source === 'Networking' ? 'selected': ''}}>Networking</option>
                                <option value="Website" {{@$contact->source === 'Website' ? 'selected': ''}}>Website</option>
                                <option value="Email" {{@$contact->source === 'Email' ? 'selected': ''}}>Email</option>
                                <option value="SMS" {{@$contact->source === 'SMS' ? 'selected': ''}}>SMS</option>
                                <option value="Whatsapp" {{@$contact->source === 'Whatsapp' ? 'selected': ''}}>Whatsapp</option>
                                <option value="Campaign" {{@$contact->source === 'Campaign' ? 'selected': ''}}>Campaign</option>
                                <option value="Fairs" {{@$contact->source === 'Fairs' ? 'selected': ''}}>Fairs</option>
                                <option value="others" {{@$contact->source === 'others' ? 'selected': ''}}>Others</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="contactof" class="form-label">Contact Of</label>
                            <select name="contactof" id="contactof" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Broker" {{@$contact->contact_of === 'Broker' ? 'selected': ''}}>Broker Name</option>
                                <option value="Dealer" {{@$contact->contact_of === 'Dealer' ? 'selected': ''}}>Dealer Name</option>
                                <option value="Agent" {{@$contact->contact_of === 'Agent' ? 'selected': ''}}>Agent's Name</option>
                                <option value="Company" {{@$contact->contact_of === 'Realtor' ? 'selected': ''}}>Company Name</option>
                                <option value="Investor" {{@$contact->contact_of === 'Builder' ? 'selected': ''}}>Investor</option>
                                <option value="Any other" {{@$contact->contact_of === 'Coloniser' ? 'selected': ''}}>Any Other</option>
                            </select>
                        </div>


                        <div class="col-md-6">
                            <label for="companyname" class="form-label">Company Name</label>
                            <input name="companyname" value="{{@$contact->company_name}}" type="text" class="form-control" placeholder="Company Name" id="companyname">
                        </div>

                        <div class="col-md-6">
                            <label for="name" class="form-label">Person Name</label>
                            <input name="name" type="text" value="{{@$contact->name}}" class="form-control" placeholder="Name" id="name">
                        </div>


                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" value="{{@$contact->email}}" placeholder="Email" class="form-control" id="email">
                        </div>
                        <div class="col-md-3">
                            <label for="mobile" class="form-label">Mobile No.</label>
                            <input name="mobile" type="text" value="{{@$contact->mobile}}" placeholder="Mobile No." class="form-control" id="mobile">
                        </div>
                        <div class="col-md-3">
                            <label for="whatsapp" class="form-label">Whatsapp No.</label>
                            <input name="whatsapp" type="text" value="{{@$contact->whatsapp}}" placeholder="Whatsapp No." class="form-control" id="whatsapp">
                        </div>




                        <div class="col-md-3">
                            <label for="country" class="form-label">Country</label>
                            <select name="country" id="country" class="form-select">
                                <option selected></option>
                                <option {{@$contact->country === 'India' ? 'selected': ''}}>India</option>
                                <option {{@$contact->country === 'Pakistan' ? 'selected': ''}}>Pakistan</option>
                                <option {{@$contact->country === 'Nepal' ? 'selected': ''}}>Nepal</option>
                                <option {{@$contact->country === 'Bhutan' ? 'selected': ''}}>Bhutan</option>
                                <option {{@$contact->country === 'SriLanka' ? 'selected': ''}}>SriLanka</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="State" class="form-label">State</label>
                            <select name="state" id="State" class="form-select">
                                <option selected></option>
                                <option {{@$contact->state === 'Madhya Pradesh' ? 'selected': ''}}>Madhya Pradesh</option>
                                <option {{@$contact->state === 'Rajasthan' ? 'selected': ''}}>Rajasthan</option>
                                <option {{@$contact->state === 'Gujrat' ? 'selected': ''}}>Gujrat</option>
                                <option {{@$contact->state === 'Punjab' ? 'selected': ''}}>Punjab</option>
                                <option {{@$contact->state === 'Maharashtra' ? 'selected': ''}}>Maharashtra</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="form-label">City</label>
                            <select name="city" id="city" class="form-select">
                                <option selected></option>
                                <option {{@$contact->city === 'Indore' ? 'selected': ''}}>Indore</option>
                                <option {{@$contact->city === 'Bhopal' ? 'selected': ''}}>Bhopal</option>
                                <option {{@$contact->city === 'Jabalpur' ? 'selected': ''}}>Jabalpur</option>
                                <option {{@$contact->city === 'Ujjain' ? 'selected': ''}}>Ujjain</option>
                                <option {{@$contact->city === 'Dewas' ? 'selected': ''}}>Dewas</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input name="zip" type="text" value="{{@$contact->zip}}" class="form-control" placeholder="Zip" id="Zip">
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input name="address" type="text" value="{{@$contact->address}}" class="form-control" placeholder="Property Address" id="address">
                        </div>
                        <div class="col-md-6">
                            <label for="location" class="form-label">Location</label>
                            <input name="location" type="text " value="{{@$contact->location}}" class="form-control" placeholder="Property Address" id="location">
                        </div>


                        <div class="col-md-12">
                            <label for="remark">Remark</label>
                            <textarea name="remark" class="form-control" placeholder="Comment Related To Lead" id="remark">{{@$contact->remark}}</textarea>
                        </div>

                        <div class="col-3">
                            <button type="submit" id="id" data-id="{{@$contact->id}}" class="btn btn-success">Update</button>
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
                contactid: {
                    required: true
                    , minlength: 1
                }
                , date: {
                    required: true
                }
                , source: {
                    required: true
                }
                , contactof: {
                    required: true
                }
                , companyname: {
                    required: true
                }
                , name: {
                    required: true
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
                contactid: {
                    required: "Please enter contact id"
                }
                , date: {
                    required: "Please enter contact date"
                }
                , source: {
                    required: "Please select source"
                }
                , contactof: {
                    required: "Please select one"
                }
                , companyname: {
                    required: "Please enter company name"
                }
                , name: {
                    required: "Please enter name"
                }
                , email: {
                    required: "Please enter email"
                }
                , mobile: {
                    required: "Please enter mobile number"
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
                var id = $('#id').data('id');
                console.log(formData);

                var url = `{{url("update-contact")}}/${id}`;

                $.ajax({

                    url: url
                    , type: 'POST'
                    , data: formData,

                    contentType: false
                    , processData: false
                    , success: function(response) {
                        window.location.href = '/contacts';
                    }
                    , error: function(xhr) {
                        // Handle the error response
                        console.log(xhr.responseText);
                    }
                });
            }
        });

    });

</script>
@endpush
@include('layouts.footers.auth.footer')
@endsection
