
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container">
      <h4>{{@$title}}</h4>
    <a href="{{url('leads')}}">List All Leads</a>
    <form id="form" enctype="multipart/form-data" class="row g-3">
      @csrf
        <div class="col-md-3">
          <label for="leadid" class="form-label">Lead Id</label>
          <input name="leadid" value="{{@$lead->lead_id}}" type="text" class="form-control" placeholder="#####" id="leadid">
        </div>
        <div class="col-md-3">
          <label for="date" class="form-label">Lead Date</label>
          <input name="date" type="date" value="{{@$lead->date}}" class="form-control" id="date">
        </div>
        <div class="col-3">
          <label for="leadsource" class="form-label">Lead Source</label>
            <select name="leadsource" id="leadsource" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Social Media" {{@$lead->source === 'Social Media' ? 'selected': ''}}>Social Media</option>
                <option value="Digital Marketing" {{@$lead->source === 'Digital Marketing' ? 'selected': ''}}>Digital Marketing</option>
                <option value="Networking" {{@$lead->source === 'Networking' ? 'selected': ''}}>Networking</option>
                <option value="Website" {{@$lead->source === 'Website' ? 'selected': ''}}>Website</option>
                <option value="Email" {{@$lead->source === 'Email' ? 'selected': ''}}>Email</option>
                <option value="SMS" {{@$lead->source === 'SMS' ? 'selected': ''}}>SMS</option>
                <option value="Whatsapp" {{@$lead->source === 'Whatsapp' ? 'selected': ''}}>Whatsapp</option>
                <option value="Campaign" {{@$lead->source === 'Campaign' ? 'selected': ''}}>Campaign</option>
                <option value="Fairs" {{@$lead->source === 'Fairs' ? 'selected': ''}}>Fairs</option>
                <option value="others" {{@$lead->source === 'others' ? 'selected': ''}}>Others</option>
              </select>
        </div>
        <div class="col-3">
          <label for="leadby" class="form-label">Lead By</label>
            <select name="leadby" id="leadby" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Broker"  {{@$lead->leadby === 'Broker' ? 'selected': ''}}>Broker</option>
                <option value="Dealer"  {{@$lead->leadby === 'Dealer' ? 'selected': ''}}>Dealer</option>
                <option value="Agent"  {{@$lead->leadby === 'Agent' ? 'selected': ''}}>Agent</option>
                <option value="Realtor"  {{@$lead->leadby === 'Realtor' ? 'selected': ''}}>Realtor</option>
                <option value="Builder"  {{@$lead->leadby === 'Builder' ? 'selected': ''}}>Builder</option>
                <option value="Coloniser"  {{@$lead->leadby === 'Coloniser' ? 'selected': ''}}>Coloniser</option>
                <option value="Developer"  {{@$lead->leadby === 'Developer' ? 'selected': ''}}>Developer</option>
                <option value="Real Estate Company"  {{@$lead->leadby === 'Real Estate Company' ? 'selected': ''}}>Real Estate Company</option>
                <option value="Others"  {{@$lead->leadby === 'Others' ? 'selected': ''}}>Others</option>
              </select>
        </div>
        <div class="col-3">
          <label for="leadfor" class="form-label">Lead For</label>
            <select name="leadfor" id="leadfor" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="buy"{{@$lead->leadfor === 'buy' ? 'selected': ''}}>Buy</option>
                <option value="sale"{{@$lead->leadfor === 'sale' ? 'selected': ''}}>Sale</option>
                <option value="rent"{{@$lead->leadfor === 'rent' ? 'selected': ''}}>Rent</option>
              </select>
        </div>
        <div class="col-3">
            <label for="leadtype" class="form-label">Lead Type</label>
              <select name="leadtype" id="leadtype" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Plot" {{@$lead->leadtype === 'Plot' ? 'selected': ''}}>Plot</option>
                  <option value="House"  {{@$lead->leadtype === 'House' ? 'selected': ''}}>House</option>
                  <option value="Land"  {{@$lead->leadtype === 'Land' ? 'selected': ''}}>Land</option>
                  <option value="Raw House"  {{@$lead->leadtype === 'Raw House' ? 'selected': ''}}>Raw House</option>
                  <option value="Bunglow"  {{@$lead->leadtype === 'Bunglow' ? 'selected': ''}}>Bunglow</option>
                  <option value="Commercial"  {{@$lead->leadtype === 'Commercial' ? 'selected': ''}}>Commercial</option>
                  <option value="Office"  {{@$lead->leadtype === 'Office' ? 'selected': ''}}>Office</option>
                  <option value="Agriculture"  {{@$lead->leadtype === 'Agriculture' ? 'selected': ''}}>Agriculture</option>
                  <option value="Villas"  {{@$lead->leadtype === 'Villas' ? 'selected': ''}}>Villas</option>
                  <option value="Others"  {{@$lead->leadtype === 'Others' ? 'selected': ''}}>Others</option>
                </select>
          </div>
          <div class="col-3">
            <label for="priority" class="form-label">Priority</label>
              <select name="priority" id="priority" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="low" {{@$lead->priority === 'low' ? 'selected': ''}}>Low</option>
                  <option value="normal" {{@$lead->priority === 'normal' ? 'selected': ''}}>Normal</option>
                  <option value="medium" {{@$lead->priority === 'medium' ? 'selected': ''}}>Medium</option>
                  <option value="high" {{@$lead->priority === 'high' ? 'selected': ''}}>High</option>
                </select>
          </div>

        <div class="col-3">
            <label for="status" class="form-label">Status</label>
              <select name="status" id="status" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Open"  {{@$lead->status === 'Open' ? 'selected': ''}}>Open</option>
                  <option value="Rejected" {{@$lead->status === 'Rejected' ? 'selected': ''}}>Rejected</option>
                  <option value="Inprocess" {{@$lead->status === 'Inprocess' ? 'selected': ''}}>Inprocess</option>
                  <option value="Executed" {{@$lead->status === 'Executed' ? 'selected': ''}}>Executed</option>
                  <option value="Awaited" {{@$lead->status === 'Awaited' ? 'selected': ''}}>Awaited</option>
                  <option value="Onhold" {{@$lead->status === 'Onhold' ? 'selected': ''}}>Onhold</option>
                  <option value="Cancelled" {{@$lead->status === 'Cancelled' ? 'selected': ''}}>Cancelled</option>
                  <option value="Completed" {{@$lead->status === 'Completed' ? 'selected': ''}}>Completed</option>
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
            <option selected>Choose...</option>
            <option {{@$lead->country === 'India' ? 'selected': ''}}>India</option>
            <option {{@$lead->country === 'Pakistan' ? 'selected': ''}}>Pakistan</option>
            <option {{@$lead->country === 'Nepal' ? 'selected': ''}}>Nepal</option>
            <option {{@$lead->country === 'Bhutan' ? 'selected': ''}}>Bhutan</option>
            <option {{@$lead->country === 'SriLanka' ? 'selected': ''}}>SriLanka</option>
          </select>
        </div>

        <div class="col-md-3">
          <label for="State" class="form-label">State</label>
          <select name="state" id="State" class="form-select">
            <option selected>Choose...</option>
            <option  {{@$lead->state === 'Madhya Pradesh' ? 'selected': ''}}>Madhya Pradesh</option>
            <option  {{@$lead->state === 'Rajasthan' ? 'selected': ''}}>Rajasthan</option>
            <option  {{@$lead->state === 'Gujrat' ? 'selected': ''}}>Gujrat</option>
            <option  {{@$lead->state === 'Punjab' ? 'selected': ''}}>Punjab</option>
            <option  {{@$lead->state === 'Maharashtra' ? 'selected': ''}}>Maharashtra</option>
          </select>
        </div>

        <div class="col-md-3">
          <label for="city" class="form-label">City</label>
          <select name="city" id="city" class="form-select">
            <option selected>Choose...</option>
            <option {{@$lead->city === 'Indore' ? 'selected': ''}}>Indore</option>
            <option {{@$lead->city === 'Bhopal' ? 'selected': ''}}>Bhopal</option>
            <option {{@$lead->city === 'Jabalpur' ? 'selected': ''}}>Jabalpur</option>
            <option {{@$lead->city === 'Ujjain' ? 'selected': ''}}>Ujjain</option>
            <option {{@$lead->city === 'Dewas' ? 'selected': ''}}>Dewas</option>
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
          <textarea name="remark" class="form-control" placeholder="Comment Related To Lead" id="remark">{{@$lead->remark}}</textarea>
        </div>
        
        <div class="col-3">
          <button type="submit" id="id" data-id="{{$lead->id}}" class="btn btn-success">Update</button>
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
                console.log(id);
                
                var url = `{{url("update-lead")}}/${id}`;
               

                $.ajax({

                    url: url,
                    type: 'POST',
                    data: formData,
                    
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle the success response
                             
                          $('#leadid').val('');
                          $('#date').val('');
                          $('#leadsource').val('');
                          $('#leadby').val('');
                          $('#leadfor').val('');
                          $('#leadtype').val('');
                          $('#priority').val('');
                          $('#status').val('');
                          $('#title').val('');
                          $('#availability').val('');
                          $('#companyname').val('');
                          $('#name').val('');
                          $('#email').val('');
                          $('#mobnumber').val('');
                          $('#wpnumber').val('');
                          $('#country').val('');
                          $('#State').val('');
                          $('#city').val('');
                          $('#Zip').val('');
                          $('#address').val('');
                          $('#location').val('');
                          $('#remark').val('');
                    },

                    error: function(xhr) {
                        // Handle the error response
                        console.log(xhr.responseText);
                    }
                });
          });
            
});

</script>
@endsection