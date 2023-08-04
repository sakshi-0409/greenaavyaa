@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <h4>Create Contact</h4>
    <a href="{{url('contacts')}}">List All Contacts</a>
    <form id="form" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-3">
            <label for="contactid" class="form-label">Contact Id</label>
            <input name="contactid" type="text" class="form-control" placeholder="#####" id="contactid">
        </div>
        <div class="col-md-3">
            <label for="date" class="form-label">Contact Date</label>
            <input name="date" type="date" class="form-control" id="date">
        </div>
        <div class="col-3">
            <label for="source" class="form-label">Contact Source</label>
            <select name="source" id="source" class="form-select" aria-label="Default select example">
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
            <label for="contactof" class="form-label">Contact Of</label>
            <select name="contactof" id="contactof" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="Broker">Broker Name</option>
                <option value="Dealer">Dealer Name</option>
                <option value="Agent">Agent's Name</option>
                <option value="Realtor">Company Name</option>
                <option value="Builder">Investor</option>
                <option value="Coloniser">Any Other</option>
            </select>
        </div>


        <div class="col-md-6">
            <label for="companyname" class="form-label">Company Name</label>
            <input name="companyname" type="text" class="form-control" placeholder="Company Name" id="companyname">
        </div>

        <div class="col-md-6">
            <label for="name" class="form-label">Person Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name" id="name">
        </div>


        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" placeholder="Email" class="form-control" id="email">
        </div>
        <div class="col-md-3">
            <label for="mobile" class="form-label">Mobile No.</label>
            <input name="mobile" type="text" placeholder="Mobile No." class="form-control" id="mobile">
        </div>
        <div class="col-md-3">
            <label for="whatsapp" class="form-label">Whatsapp No.</label>
            <input name="whatsapp" type="text" placeholder="Whatsapp No." class="form-control" id="whatsapp">
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
            <label for="zip" class="form-label">Zip</label>
            <input name="zip" type="text" class="form-control" placeholder="Zip" id="Zip">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" placeholder="Property Address" id="address">
        </div>
        <div class="col-md-6">
            <label for="location" class="form-label">Location</label>
            <input name="location" type="text" class="form-control" placeholder="Property Address" id="location">
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
                console.log(formData);

                var url = '{{url("create-contact")}}';

                $.ajax({

                    url: url
                    , type: 'POST'
                    , data: formData,

                    contentType: false
                    , processData: false
                    , success: function(response) {
                        // Handle the success response

                        $('#form').trigger('reset');

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
