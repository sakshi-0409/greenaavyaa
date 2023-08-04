@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <a href="{{url('brokers')}}">List All Brokers</a>
    <h4>Create Broker</h4>
    <form id="form" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-3">
            <label for="brokerid" class="form-label">Broker Id</label>
            <input name="brokerid" type="text" class="form-control" placeholder="#####" id="brokerid">
            <span class="text-danger">
                @error('brokerid')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-3">
            <label for="date" class="form-label">Joining Date</label>
            <input name="date" type="date" class="form-control" id="date">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="col-3">
            <label for="workas" class="form-label">Work As A</label>
            <select name="workas" id="workas" class="form-select" aria-label="Default select example">
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
            <label for="status" class="form-label">Status</label>
            <div>

                <input class="form-check-input" type="radio" name="status" id="status" value="active" aria-label="...">
                <label for="status" class="form-label">Active</label>
                <input class="form-check-input" type="radio" name="status" id="status" value="inactive" aria-label="...">
                <label for="status" class="form-label">Inactive</label>
            </div>
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="col-md-6">
            <label for="name" class="form-label"> Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name" id="name">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-3">
            <label for="gender" class="form-label">Gender</label>
            <div>
                <input class="form-check-input" type="radio" name="gender" id="gender" value="male" aria-label="...">
                <label for="gender" class="form-label">Male</label>
                <input class="form-check-input" type="radio" name="gender" id="gender" value="female" aria-label="...">
                <label for="gender" class="form-label">Female</label>
                <input class="form-check-input" type="radio" name="gender" id="gender" value="others" aria-label="...">
                <label for="gender" class="form-label">Others</label>
            </div>
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input name="dob" type="date" class="form-control" id="dob">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" placeholder="Email" class="form-control" id="email">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-3">
            <label for="mobile" class="form-label">Mobile No.</label>
            <input name="mobile" type="text" placeholder="Mobile No." class="form-control" id="mobile">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-3">
            <label for="whatsapp" class="form-label">Whatsapp No.</label>
            <input name="whatsapp" type="text" placeholder="Whatsapp No." class="form-control" id="whatsapp">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
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
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" placeholder="Property Address" id="address">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-3">
            <label for="identitytype" class="form-label">Identity Type</label>
            <select name="identitytype" id="identitytype" class="form-select">
                <option selected></option>
                <option>Pan Card</option>
                <option>Adhar Card</option>
                <option>Voter Id</option>
                <option>Passport</option>
                <option>Bank Passbook</option>
                <option>Driving License</option>
                <option>Other</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="identity" class="form-label">Identity Upload</label>
            <input name="identity" type="file" class="form-control" placeholder="Property Address" id="identity">
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
        </div>
        <div class="col-md-12">
            <label for="remark">Remark</label>
            <textarea name="remark" class="form-control" placeholder="Comment Related To Lead" id="remark"></textarea>
            <span class="text-danger m-0">
                @error('date')
                {{ $message }}
                @enderror
            </span>
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
                formData.append('identity', imageFile);
                var url = '{{url("createbroker")}}';

                $.ajax({

                    url: url
                    , type: 'POST'
                    , data: formData,

                    contentType: false
                    , processData: false
                    , success: function(response) {
                        $('#form').trigger('reset');
                    }
                    , error: function(xhr) {
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
