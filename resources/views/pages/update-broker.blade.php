@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <a href="{{url('brokers')}}">List All Brokers</a>
    <h4>Update Broker</h4>
    <form id="form" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-3">
            <label for="brokerid" class="form-label">Broker Id</label>
            <input name="brokerid" value="{{@$broker->brokerid}}" type="text" class="form-control" placeholder="#####" id="brokerid">
        </div>
        <div class="col-md-3">
            <label for="date" class="form-label">Joining Date</label>
            <input name="date" value="{{@$broker->join_date}}" type="date" class="form-control" id="date">
        </div>

        <div class="col-3">
            <label for="workas" class="form-label">Work As A</label>
            <select name="workas" id="workas" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="Broker" {{@$broker->work_as === 'Broker' ? 'selected': ''}}>Broker</option>
                <option value="Dealer" {{@$broker->work_as === 'Dealer' ? 'selected': ''}}>Dealer</option>
                <option value="Agent" {{@$broker->work_as === 'Agent' ? 'selected': ''}}>Agent</option>
                <option value="Realtor" {{@$broker->work_as === 'Realtor' ? 'selected': ''}}>Realtor</option>
                <option value="Builder" {{@$broker->work_as === 'Builder' ? 'selected': ''}}>Builder</option>
                <option value="Coloniser" {{@$broker->work_as === 'Coloniser' ? 'selected': ''}}>Coloniser</option>
                <option value="Developer" {{@$broker->work_as === 'Developer' ? 'selected': ''}}>Developer</option>
                <option value="Real Estate Company" {{@$broker->work_as === 'Real Estate Company' ? 'selected': ''}}>Real Estate Company</option>
                <option value="Others" {{@$broker->work_as === 'Others' ? 'selected': ''}}>Others</option>
            </select>
        </div>
        <div class="col-3">
            <label for="status" class="form-label">Status</label>
            <div>

                <input class="form-check-input" type="radio" {{@$broker->status === 'active' ? 'checked': ''}} name="status" id="status" value="active" aria-label="...">
                <label for="status" class="form-label">Active</label>
                <input class="form-check-input" type="radio" {{@$broker->status === 'inactive' ? 'checked': ''}} name="status" id="status" value="inactive" aria-label="...">
                <label for="status" class="form-label">Inactive</label>
            </div>
        </div>

        <div class="col-md-6">
            <label for="name" class="form-label"> Name</label>
            <input name="name" value="{{@$broker->name}}" type="text" class="form-control" placeholder="Name" id="name">
        </div>
        <div class="col-3">
            <label for="gender" class="form-label">Gender</label>
            <div>

                <input class="form-check-input" type="radio" {{@$broker->gender === 'male' ? 'checked': ''}} name="gender" id="gender" value="male" aria-label="...">
                <label for="gender" class="form-label">Male</label>
                <input class="form-check-input" type="radio" {{@$broker->gender === 'female' ? 'checked': ''}} name="gender" id="gender" value="female" aria-label="...">
                <label for="gender" class="form-label">Female</label>
                <input class="form-check-input" type="radio" {{@$broker->gender === 'others' ? 'checked': ''}} name="gender" id="gender" value="others" aria-label="...">
                <label for="gender" class="form-label">Others</label>
            </div>
        </div>
        <div class="col-md-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input name="dob" type="date" value="{{@$broker->dob}}" class="form-control" id="dob">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" value="{{@$broker->email}}" placeholder="Email" class="form-control" id="email">
        </div>
        <div class="col-md-3">
            <label for="mobile" class="form-label">Mobile No.</label>
            <input name="mobile" type="text" value="{{@$broker->mobile}}" placeholder="Mobile No." class="form-control" id="mobile">
        </div>
        <div class="col-md-3">
            <label for="whatsapp" class="form-label">Whatsapp No.</label>
            <input name="whatsapp" type="text" value="{{@$broker->whatsapp}}" placeholder="Whatsapp No." class="form-control" id="whatsapp">
        </div>




        <div class="col-md-3">
            <label for="country" class="form-label">Country</label>
            <select name="country" id="country" class="form-select">
                <option selected></option>
                <option {{@$broker->country === 'India' ? 'selected': ''}}>India</option>
                <option {{@$broker->country === 'Pakistan' ? 'selected': ''}}>Pakistan</option>
                <option {{@$broker->country === 'Nepal' ? 'selected': ''}}>Nepal</option>
                <option {{@$broker->country === 'Bhutan' ? 'selected': ''}}>Bhutan</option>
                <option {{@$broker->country === 'SriLanka' ? 'selected': ''}}>SriLanka</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="State" class="form-label">State</label>
            <select name="state" id="State" class="form-select">
                <option selected></option>
                <option {{@$broker->state === 'Madhya Pradesh' ? 'selected': ''}}>Madhya Pradesh</option>
                <option {{@$broker->state === 'Rajasthan' ? 'selected': ''}}>Rajasthan</option>
                <option {{@$broker->state === 'Gujrat' ? 'selected': ''}}>Gujrat</option>
                <option {{@$broker->state === 'Punjab' ? 'selected': ''}}>Punjab</option>
                <option {{@$broker->state === 'Maharashtra' ? 'selected': ''}}>Maharashtra</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="city" class="form-label">City</label>
            <select name="city" id="city" class="form-select">
                <option selected></option>
                <option {{@$broker->city === 'Indore' ? 'selected': ''}}>Indore</option>
                <option {{@$broker->city === 'Bhopal' ? 'selected': ''}}>Bhopal</option>
                <option {{@$broker->city === 'Jabalpur' ? 'selected': ''}}>Jabalpur</option>
                <option {{@$broker->city === 'Ujjain' ? 'selected': ''}}>Ujjain</option>
                <option {{@$broker->city === 'Dewas' ? 'selected': ''}}>Dewas</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input name="zip" type="text" class="form-control" value="{{@$broker->zip}}" placeholder="Zip" id="Zip">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" value="{{@$broker->address}}" placeholder="Property Address" id="address">
        </div>
        <div class="col-md-3">
            <label for="identitytype" class="form-label">Identity Type</label>
            <select name="identitytype" id="identitytype" class="form-select">
                <option selected></option>
                <option {{@$broker->identity_type === 'Pan Card' ? 'selected': ''}}>Pan Card</option>
                <option {{@$broker->identity_type === 'Adhar Card' ? 'selected': ''}}>Adhar Card</option>
                <option {{@$broker->identity_type === 'Voter Id' ? 'selected': ''}}>Voter Id</option>
                <option {{@$broker->identity_type === 'Passport' ? 'selected': ''}}>Passport</option>
                <option {{@$broker->identity_type === 'Bank Passbook' ? 'selected': ''}}>Bank Passbook</option>
                <option {{@$broker->identity_type === 'Driving License' ? 'selected': ''}}>Driving License</option>
                <option {{@$broker->identity_type === 'Other' ? 'selected': ''}}>Other</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="identity" class="form-label">Identity Upload</label>
            <input name="identity" type="file" value="{{@$broker->identity}}" class="form-control" placeholder="Property Address" id="identity">
        </div>
        <div class="col-md-12">
            <label for="remark">Remark</label>
            <textarea name="remark" class="form-control" placeholder="Comment Related To Lead" id="remark">{{@$broker->remark}}</textarea>
        </div>

        <div class="col-3">
            <button type="submit" class="btn btn-success" id="id" data-id="{{@$broker->id}}">Update</button>
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
                brokerid: {
                    required: true
                    , minlength: 1
                }
                , date: {
                    required: true
                }
                , workas: {
                    required: true
                }
                , status: {
                    required: true
                }
                , name: {
                    required: true
                }
                , gender: {
                    required: true
                }
                , dob: {
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
                , identitytype: {
                    required: true
                }
                , identity: {
                    required: true
                }
                , remark: {
                    required: true
                    , minlength: 2
                }
            }
            , messages: {
                brokerid: {
                    required: "Please enter broker id"
                }
                , date: {
                    required: "Please enter property date"
                }
                , workas: {
                    required: "Please select one"
                }
                , status: {
                    required: "Please select status"
                }
                , name: {
                    required: "Please enter name"
                }
                , gender: {
                    required: "Please select gender"
                }
                , dob: {
                    required: "Please enter date of birth"
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
                , identitytype: {
                    required: "Please select identity type"
                }
                , identity: {
                    required: "Please attach identity"
                }
                , remark: {
                    required: "Please fill remark"
                }
            }

            , submitHandler: function(form) {
                var formData = new FormData(form);
            console.log(formData);
            var imageFile = $('#identity')[0].files[0];
            var id = $('#id').data('id');
            formData.append('identity', imageFile);
            var url = `{{url("updatebroker")}}/${id}`;

            $.ajax({

                url: url
                , type: 'POST'
                , data: formData,

                contentType: false
                , processData: false
                , success: function(response) {
                    // Handle the success response
                    window.location.href = '/brokers';
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
