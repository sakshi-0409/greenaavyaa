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
            <input name="contactid" value="{{@$contact->contactid}}" type="text" class="form-control" placeholder="#####" id="contactid">
        </div>
        <div class="col-md-3">
            <label for="date" class="form-label">Contact Date</label>
            <input name="date" value="{{@$contact->date}}" type="date" class="form-control" id="date">
        </div>
        <div class="col-3">
            <label for="source" class="form-label">Contact Source</label>
            <select name="source" id="source" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
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
                <option selected>Open this select menu</option>
                <option value="Broker" {{@$contact->contact_of === 'Broker' ? 'selected': ''}}>Broker Name</option>
                <option value="Dealer" {{@$contact->contact_of === 'Dealer' ? 'selected': ''}}>Dealer Name</option>
                <option value="Agent" {{@$contact->contact_of === 'Agent' ? 'selected': ''}}>Agent's Name</option>
                <option value="Realtor" {{@$contact->contact_of === 'Realtor' ? 'selected': ''}}>Company Name</option>
                <option value="Builder" {{@$contact->contact_of === 'Builder' ? 'selected': ''}}>Investor</option>
                <option value="Coloniser" {{@$contact->contact_of === 'Coloniser' ? 'selected': ''}}>Any Other</option>
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
                <option selected>Choose...</option>
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
                <option selected>Choose...</option>
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
                <option selected>Choose...</option>
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
@include('layouts.footers.auth.footer')
</div>
<script>
    $(document).ready(function() {

        $("#form").on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
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
                    // Handle the success response

                    $('#contactid').val('');
                    $('#date').val('');
                    $('#source').val('');
                    $('#contactof').val('');
                    $('#companyname').val('');
                    $('#name').val('');
                    $('#email').val('');
                    $('#mobile').val('');
                    $('#whatsapp').val('');
                    $('#country').val('');
                    $('#State').val('');
                    $('#city').val('');
                    $('#Zip').val('');
                    $('#address').val('');
                    $('#location').val('');
                    $('#remark').val('');
                }
                , error: function(xhr) {
                    // Handle the error response
                    console.log(xhr.responseText);
                }
            });
        });

    });

</script>
@endsection
