@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="{{url('teams')}}">List All Teams</a>
                    <h4>Update Team</h4>
                    <form id="form" method="post" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-3">
                            <label for="teamname" class="form-label">Team name</label>
                            <select name="teamname" id="teamname" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <?php $names = App\Models\Teamname::all(); ?> 
                                @foreach ($names as $name)
                                <option {{@$team->team_name === @$name->team_name ? 'selected' : '' }} value="{{$name->team_name}}">{{$name->team_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label">Joining Date</label>
                            <input name="date" type="date" value="{{$team->date}}" class="form-control" id="date">
                        </div>
                        <div class="col-3">
                            <label for="department" class="form-label">Department</label>
                            <select name="department" id="department" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Sales" {{@$team->department === 'Sales' ? 'selected': ''}}>Sales</option>
                                <option value="Marketing" {{@$team->department === 'Marketing' ? 'selected': ''}}>Marketing</option>
                                <option value="Accounts" {{@$team->department === 'Accounts' ? 'selected': ''}}>Accounts</option>
                                <option value="Administrative" {{@$team->department === 'Administrative' ? 'selected': ''}}>Administrative</option>
                                <option value="Human Resource" {{@$team->department === 'Human Resource' ? 'selected': ''}}>Human Resource</option>
                                <option value="Finance" {{@$team->department === 'Finance' ? 'selected': ''}}>Finance</option>
                                <option value="Customer Service" {{@$team->department === 'Customer Service' ? 'selected': ''}}>Customer Service</option>
                                <option value="Media Relation" {{@$team->department === 'Media Relation' ? 'selected': ''}}>Media Relation</option>
                                <option value="Legal & Advisory" {{@$team->department === 'Legal & Advisory' ? 'selected': ''}}>Legal & Advisory</option>
                                <option value="Security" {{@$team->department === 'Security' ? 'selected': ''}}>Security</option>
                                <option value="others" {{@$team->department === 'others' ? 'selected': ''}}>Others</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="designation" class="form-label">Designation</label>
                            <select name="designation" id="designation" class="form-select" aria-label="Default select example">
                                <option selected></option>
                                <option value="Sales Executive" {{@$team->designation === 'Sales Executive' ? 'selected': ''}}>Sales Executive</option>
                                <option value="Marketing Executive" {{@$team->designation === 'Marketing Executive' ? 'selected': ''}}>Marketing Executive</option>
                                <option value="Sales Manager" {{@$team->designation === 'Sales Manager' ? 'selected': ''}}>Sales Manager</option>
                                <option value="Marketing Manager" {{@$team->designation === 'Marketing Manager' ? 'selected': ''}}>Marketing Manager</option>
                                <option value="Account Executive" {{@$team->designation === 'Account Executive' ? 'selected': ''}}>Account Executive</option>
                                <option value="Office Assistance" {{@$team->designation === 'Office Assistance' ? 'selected': ''}}>Office Assistance</option>
                                <option value="Personal Assistance" {{@$team->designation === 'Personal Assistance' ? 'selected': ''}}>Personal Assistance</option>
                                <option value="Bussiness Developer" {{@$team->designation === 'Bussiness Developer' ? 'selected': ''}}>Bussiness Developer</option>
                                <option value="Others" {{@$team->designation === 'Others' ? 'selected': ''}}>Others</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Person Name</label>
                            <input name="name" value="{{$team->name}}" type="text" class="form-control" placeholder="Name" id="name">
                        </div>
                        <div class="col-3">
                            <label for="gender" class="form-label">Gender</label>
                            <div>
                                <input class="form-check-input" type="radio" {{@$team->gender === 'male' ? 'checked': ''}} name="gender" id="gender" value="male" aria-label="...">
                                <label for="gender" class="form-label">Male</label>
                                <input class="form-check-input" type="radio" {{@$team->gender === 'female' ? 'checked': ''}} name="gender" id="gender" value="female" aria-label="...">
                                <label for="gender" class="form-label">Female</label>
                                <input class="form-check-input" type="radio" {{@$team->gender === 'others' ? 'checked': ''}} name="gender" id="gender" value="others" aria-label="...">
                                <label for="gender" class="form-label">Others</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="dob" class="form-label">Date Of Birth</label>
                            <input name="dob" value="{{$team->dob}}" type="date" class="form-control" id="dob">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" value="{{$team->email}}" type="email" placeholder="Email" class="form-control" id="email">
                        </div>
                        <div class="col-md-3">
                            <label for="mobnumber" class="form-label">Mobile No.</label>
                            <input name="mobile" type="text" value="{{$team->mobile}}" placeholder="Mobile No." class="form-control" id="mobnumber">
                        </div>
                        <div class="col-md-3">
                            <label for="wpnumber" class="form-label">Whatsapp No.</label>
                            <input name="whatsapp" type="text" value="{{$team->whatsapp}}" placeholder="Whatsapp No." class="form-control" id="wpnumber">
                        </div>
                        <div class="col-md-3">
                            <label for="education" class="form-label">Education</label>
                            <select name="education" id="education" class="form-select">
                                <option selected></option>
                                <option {{@$team->education === 'Matriculation' ? 'selected': ''}}>Matriculation</option>
                                <option {{@$team->education === 'Intermediate' ? 'selected': ''}}>Intermediate</option>
                                <option {{@$team->education === 'Graduate' ? 'selected': ''}}>Graduate</option>
                                <option {{@$team->education === 'Post Graduate' ? 'selected': ''}}>Post Graduate</option>
                                <option {{@$team->education === 'Other' ? 'selected': ''}}>Other</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="status" class="form-label">Status</label>
                            <div>
                                <input class="form-check-input" type="radio" name="status"  {{@$team->status === 'active' ? 'checked': ''}} id="status" value="active" aria-label="...">
                                <label for="status" class="form-label">Active</label>
                                <input class="form-check-input" type="radio" name="status"  {{@$team->status === 'inactive' ? 'checked': ''}} id="status" value="inactive" aria-label="...">
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
                                <option {{@$team->country === 'India' ? 'selected': ''}}>India</option>
                                <option {{@$team->country === 'Pakistan' ? 'selected': ''}}>Pakistan</option>
                                <option {{@$team->country === 'Nepal' ? 'selected': ''}}>Nepal</option>
                                <option {{@$team->country === 'Bhutan' ? 'selected': ''}}>Bhutan</option>
                                <option {{@$team->country === 'SriLanka' ? 'selected': ''}}>SriLanka</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="State" class="form-label">State</label>
                            <select name="state" id="State" class="form-select">
                                <option selected></option>
                                <option {{@$team->state === 'Madhya Pradesh' ? 'selected': ''}}>Madhya Pradesh</option>
                                <option {{@$team->state === 'Rajasthan' ? 'selected': ''}}>Rajasthan</option>
                                <option {{@$team->state === 'Gujrat' ? 'selected': ''}}>Gujrat</option>
                                <option {{@$team->state === 'Punjab' ? 'selected': ''}}>Punjab</option>
                                <option {{@$team->state === 'Maharashtra' ? 'selected': ''}}>Maharashtra</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="city" class="form-label">City</label>
                            <select name="city" id="city" class="form-select">
                                <option selected></option>
                                <option {{@$team->city === 'Indore' ? 'selected': ''}}>Indore</option>
                                <option {{@$team->city === 'Bhopal' ? 'selected': ''}}>Bhopal</option>
                                <option {{@$team->city === 'Jabalpur' ? 'selected': ''}}>Jabalpur</option>
                                <option {{@$team->city === 'Ujjain' ? 'selected': ''}}>Ujjain</option>
                                <option {{@$team->city === 'Dewas' ? 'selected': ''}}>Dewas</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input name="zip"  value="{{$team->zip}}" type="text" class="form-control" placeholder="Zip" id="Zip">
                        </div>
                        <div class="col-md-6">
                            <label for="current_address" class="form-label">Current Address</label>
                            <input name="current_address" value="{{$team->current_address}}" type="text" class="form-control" placeholder="Property Address" id="current_address">
                        </div>
                        <div class="col-md-6">
                            <label for="permanent_address" class="form-label">Permanent Address</label>
                            <input name="permanent_address" value="{{$team->permanent_address}}" type="text" class="form-control" placeholder="Property Location" id="permanent_address">
                        </div>
                        <div class="col-md-12">
                            <label for="remark">Remark</label>
                            <textarea name="remark" class="form-control" placeholder="Comment Related To Lead" id="remark">{{$team->remark}}</textarea>
                        </div>

                        <div class="col-3">
                            <button type="submit" data-id="{{$team->id}}" id="id" class="btn btn-success">Update</button>
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
                var id = $('#id').data('id');
                console.log(formData);
                console.log(id);

                var url = `{{url("update-team")}}/${id}`;


                $.ajax({

                    url: url
                    , type: 'POST'
                    , data: formData,

                    contentType: false
                    , processData: false
                    , success: function(response) {
                        window.location.href = '/team';
                    },

                    error: function(xhr) {
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
