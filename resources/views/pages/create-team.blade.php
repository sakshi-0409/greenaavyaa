@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="{{url('team')}}">List All Teams</a>
                    <h4>Create Team</h4>
                    <form id="form" method="post" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-3">
                            <label for="teamid" class="form-label">Team Id</label>
                            <input name="teamid" type="text" class="form-control" placeholder="#####" id="teamid">
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label">Joining Date</label>
                            <input name="date" type="date" class="form-control" id="date">
                        </div>
                        <div class="col-3">
                            <label for="department" class="form-label">Department</label>
                            <select name="department" id="department" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Sales">Sales</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Administrative">Administrative</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="Finance">Finance</option>
                                <option value="Customer Service">Customer Service</option>
                                <option value="Media Relation">Media Relation</option>
                                <option value="Legal & Advisory">Legal & Advisory</option>
                                <option value="Security">Security</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="designation" class="form-label">Designation</label>
                            <select name="designation" id="designation" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Sales Executive">Sales Executive</option>
                                <option value="Marketing Executive">Marketing Executive</option>
                                <option value="Sales Manager">Sales Manager</option>
                                <option value="Marketing Manager">Marketing Manager</option>
                                <option value="Account Executive">Account Executive</option>
                                <option value="Office Assistance">Office Assistance</option>
                                <option value="Personal Assistance">Personal Assistance</option>
                                <option value="Bussiness Developer">Bussiness Developer</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Person Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Name" id="name">
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
                        </div>
                        <div class="col-md-3">
                            <label for="dob" class="form-label">Date Of Birth</label>
                            <input name="dob" type="date" class="form-control" id="dob">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" placeholder="Email" class="form-control" id="email">
                        </div>
                        <div class="col-md-3">
                            <label for="mobnumber" class="form-label">Mobile No.</label>
                            <input name="mobile" type="text"  placeholder="Mobile No." class="form-control" id="mobnumber">
                        </div>
                        <div class="col-md-3">
                            <label for="wpnumber" class="form-label">Whatsapp No.</label>
                            <input name="whatsapp" type="text"  placeholder="Whatsapp No." class="form-control" id="wpnumber">
                        </div>
                        <div class="col-md-3">
                            <label for="education" class="form-label">Education</label>
                            <select name="education" id="education" class="form-select">
                                <option selected></option>
                                <option>Matriculation</option>
                                <option>Intermediate</option>
                                <option>Graduate</option>
                                <option>Post Graduate</option>
                                <option>Other</option>
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
                        </div>
                        <div class="col-md-3">
                            <label for="identity" class="form-label">Identity Upload</label>
                            <input name="identity" type="file" class="form-control" placeholder="Property Address" id="identity">
                        </div>
                        <div class="col-md-3">
                            <label for="resume" class="form-label">Resume Upload</label>
                            <input name="resume" type="file" class="form-control" placeholder="Property Address" id="resume">
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
                            <input name="zip"  type="text" class="form-control" placeholder="Zip" id="Zip">
                        </div>
                        <div class="col-md-6">
                            <label for="current_address" class="form-label">Current Address</label>
                            <input name="current_address"  type="text" class="form-control" placeholder="Property Address" id="current_address">
                        </div>
                        <div class="col-md-6">
                            <label for="permanent_address" class="form-label">Permanent Address</label>
                            <input name="permanent_address"  type="text" class="form-control" placeholder="Property Location" id="permanent_address">
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
                teamid: {
                    required: true
                    , minlength: 2
                }
                , date: {
                    required: true
                }
                , department: {
                    required: true
                }
                , designation: {
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
                }
                
                , mobile: {
                    required: true
                    , minlength: 10
                }
                , whatsapp: {
                    required: true
                    , minlength: 10
                }
                , education: {
                    required: true
                }
                , status: {
                    required: true
                }
                , identity: {
                    required: true
                }
                , resume: {
                    required: true
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
                , current_address: {
                    required: true
                    , minlength: 2
                }
                , permanent_address: {
                    required: true
                }
                , remark: {
                    required: true
                    , minlength: 2
                }
            }
            , messages: {
                teamid: {
                    required: "Please enter team id"
                }
                , date: {
                    required: "Please enter joining date"
                }
                , department: {
                    required: "Please select department"
                }
                , designation: {
                    required: "Please select designation"
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
                , education: {
                    required: "Please select education"
                }
                , status: {
                    required: "Please select status"
                }
                , identity: {
                    required: "Please attach identity file"
                }
                , resume: {
                    required: "Please select resume"
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
                , current_address: {
                    required: "Please enter address"
                }
                , permanent_address: {
                    required: "Please enter location"
                }
                , remark: {
                    required: "Please fill remark"
                }
            }
            , submitHandler: function(form) {
                var formData = new FormData(form);
                console.log(formData);

                var url = '{{url("create-team")}}';


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
