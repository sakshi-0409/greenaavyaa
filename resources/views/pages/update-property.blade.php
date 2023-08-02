
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container">
    <a href="{{url('properties')}}">List All Properties</a>
    <h4>Update Property</h4>
    <form id="form" enctype="multipart/form-data" class="row g-3">
      @csrf
        <div class="col-md-3">
          <label for="propertyid" class="form-label">Property Id</label>
          <input name="propertyid" value="{{@$property->property_id}}" type="text" class="form-control" placeholder="#####" id="propertyid">
        </div>
        <div class="col-md-3">
          <label for="propertydate" class="form-label">Property Date</label>
          <input name="propertydate" value="{{@$property->property_date}}" type="date" class="form-control" id="propertydate">
        </div>
        <div class="col-3">
          <label for="propertyby" class="form-label">Property By</label>
            <select name="propertyby" id="propertyby" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="agent" {{@$property->property_by === 'agent' ? 'selected': ''}}>Agent</option>
                <option value="broker" {{@$property->property_by === 'broker' ? 'selected': ''}}>Broker</option>
                <option value="owner" {{@$property->property_by === 'owner' ? 'selected': ''}}>Owner</option>
                <option value="others" {{@$property->property_by === 'others' ? 'selected': ''}}>Others</option>
              </select>
        </div>
        <div class="col-3">
          <label for="propertyfor" class="form-label">Property For</label>
            <select name="propertyfor" id="propertyfor" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="buy" {{@$property->for === 'buy' ? 'selected': ''}}>Buy</option>
                <option value="sale" {{@$property->for === 'sale' ? 'selected': ''}}>Sale</option>
                <option value="rent" {{@$property->for === 'rent' ? 'selected': ''}}>Rent</option>
                <option value="lease" {{@$property->for === 'lease' ? 'selected': ''}}>Lease</option>
              </select>
        </div>
        <div class="col-3">
          <label for="propertytype" class="form-label">Property Type</label>
            <select name="propertytype" id="propertytype" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <optgroup label="Residential">
                <option value="houses" {{@$property->property_type === 'houses' ? 'selected': ''}}>Houses</option>
                <option value="duplexes" {{@$property->property_type === 'duplexes' ? 'selected': ''}}>Duplexes</option>
                <option value="triplexes" {{@$property->property_type === 'triplexes' ? 'selected': ''}}>Triplexes</option>
                <option value="villas" {{@$property->property_type === 'villas' ? 'selected': ''}}>Villas</option>
                <option value="town houses" {{@$property->property_type === 'town houses' ? 'selected': ''}}>Town Houses</option>
                <option value="twin homes" {{@$property->property_type === 'twin homes' ? 'selected': ''}}>Twin Homes</option>
                <option value="quadplexes" {{@$property->property_type === 'quadplexes' ? 'selected': ''}}>Quadplexes</option>
                <option value="mobile homes" {{@$property->property_type === 'mobile homes' ? 'selected': ''}}>Mobile Homes</option>
                <option value="raw houses" {{@$property->property_type === 'raw houses' ? 'selected': ''}}>Raw Houses</option>
                <option value="flats" {{@$property->property_type === 'flats' ? 'selected': ''}}>Flats</option>
                </optgroup>

                <optgroup label="Commercial">
                <option value="offices" {{@$property->property_type === 'offices' ? 'selected': ''}}>Offices</option>
                <option value="hotels" {{@$property->property_type === 'hotels' ? 'selected': ''}}>Hotels</option>
                <option value="strip malls" {{@$property->property_type === 'strip malls' ? 'selected': ''}}>Strip Malls</option>
                <option value="resttaurants" {{@$property->property_type === 'resttaurants' ? 'selected': ''}}>Resttaurants</option>
                <option value="medical building" {{@$property->property_type === 'medical building' ? 'selected': ''}}>Medical Building</option>
                <option value="educational" {{@$property->property_type === 'educational' ? 'selected': ''}}>Educational</option>
                <option value="campuses" {{@$property->property_type === 'campuses' ? 'selected': ''}}>Campuses</option>
                <option value="shopping center" {{@$property->property_type === 'shopping center' ? 'selected': ''}}>Shopping Center</option>
                </optgroup>

                <optgroup label="Land">
                <option value="Agricultural" {{@$property->property_type === 'Agricultural' ? 'selected': ''}}>Agricultural</option>
                <option value="Vacant land" {{@$property->property_type === 'Vacant land' ? 'selected': ''}}>Vacant land</option>
                <option value="Ranches" {{@$property->property_type === 'Ranches' ? 'selected': ''}}>Ranches</option>
                <option value="Farms" {{@$property->property_type === 'Farms' ? 'selected': ''}}>Farms</option>
                <option value="Farm House" {{@$property->property_type === 'Farm House' ? 'selected': ''}}>Farm House</option>
                </optgroup>
                
                <optgroup label="Industrial">
                <option value="Ware Houses" {{@$property->property_type === 'Ware Houses' ? 'selected': ''}}>Ware Houses</option>
                <option value="Factories" {{@$property->property_type === 'Factories' ? 'selected': ''}}>Factories</option>
                <option value="Distribution Centers" {{@$property->property_type === 'Distribution Centers' ? 'selected': ''}}>Distribution Centers</option>
                <option value="Self Storage Facilities" {{@$property->property_type === 'Self Storage Facilities' ? 'selected': ''}}>Self Storage Facilities</option>
                </optgroup>
             
              </select>
        </div>
        <div class="col-3">
            <label for="priority" class="form-label">Priority</label>
              <select name="priority" id="priority" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="low" {{@$property->priority === 'low' ? 'selected': ''}}>Low</option>
                  <option value="normal" {{@$property->priority === 'normal' ? 'selected': ''}}>Normal</option>
                  <option value="medium" {{@$property->priority === 'medium' ? 'selected': ''}}>Medium</option>
                  <option value="high" {{@$property->priority === 'high' ? 'selected': ''}}>High</option>
                </select>
          </div>
        <div class="col-3">
            <label for="status" class="form-label">Status</label>
              <select name="status" id="status" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Open" {{@$property->status === 'Open' ? 'selected': ''}}>Open</option>
                  <option value="Rejected" {{@$property->status === 'Rejected' ? 'selected': ''}}>Rejected</option>
                  <option value="Inprocess" {{@$property->status === 'Inprocess' ? 'selected': ''}} >Inprocess</option>
                  <option value="Executed" {{@$property->status === 'Executed' ? 'selected': ''}}>Executed</option>
                  <option value="Awaited" {{@$property->status === 'Awaited' ? 'selected': ''}}>Awaited</option>
                  <option value="Onhold" {{@$property->status === 'Onhold' ? 'selected': ''}}>Onhold</option>
                  <option value="Cancelled" {{@$property->status === 'Cancelled' ? 'selected': ''}}>Cancelled</option>
                  <option value="Completed" {{@$property->status === 'Completed' ? 'selected': ''}}>Completed</option>
                </select>
          </div>
        <div class="col-3">
            <label for="financial" class="form-label">Financial</label>
              <select name="financial" id="financial" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Financed" {{@$property->financial === 'Financed' ? 'selected': ''}}>Financed</option>
                  <option value="Freehold" {{@$property->financial === 'Freehold' ? 'selected': ''}}>Freehold</option>
                  <option value="Others" {{@$property->financial === 'Others' ? 'selected': ''}}>Others</option>
                </select>
          </div>
          <div class="col-md-3">
            <label for="propertytitle" class="form-label">Property Title</label>
            <input name="propertytitle" value="{{@$property->title}}" type="text" class="form-control" placeholder="Property Title" id="propertytitle">
          </div>
          <div class="col-3">
            <label for="propertydocuments" class="form-label">Property Documents</label>
              <select name="documents" id="propertydocuments" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Registry"  {{@$property->documents === 'Registry' ? 'selected': ''}}>Registry</option>
                  <option value="Notary"  {{@$property->documents === 'Notary' ? 'selected': ''}}>Notary</option>
                  <option value="Agreement"  {{@$property->documents === 'Agreement' ? 'selected': ''}}>Agreement</option>
                  <option value="Sale Deed"  {{@$property->documents === 'Sale Deed' ? 'selected': ''}}>Sale Deed</option>
                  <option value="Others"  {{@$property->documents === 'Others' ? 'selected': ''}}>Others</option>
                </select>
          </div>
          <div class="col-3">
            <label for="age" class="form-label">Age Of Property</label>
              <select name="age" id="age" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="new" {{@$property->age === 'new' ? 'selected': ''}}>New</option>
                  <option value="0 Year" {{@$property->age === '0 Year' ? 'selected': ''}}>0 Year</option>
                  <option value="1 Year" {{@$property->age === '1 Year' ? 'selected': ''}}>1 Year</option>
                  <option value="2 Year" {{@$property->age === '2 Year' ? 'selected': ''}}>2 Year</option>
                  <option value="3 Year" {{@$property->age === '3 Year' ? 'selected': ''}}>3 Year</option>
                  <option value="4 Year" {{@$property->age === '4 Year' ? 'selected': ''}}>4 Year</option>
                  <option value="5 Year" {{@$property->age === '5 Year' ? 'selected': ''}}>5 Year</option>
                  <option value="6 Year" {{@$property->age === '6 Year' ? 'selected': ''}}>6 Year</option>
                  <option value="7 Year" {{@$property->age === '7 Year' ? 'selected': ''}}>7 Year</option>
                  <option value="8 Year" {{@$property->age === '8 Year' ? 'selected': ''}}>8 Year</option>
                  <option value="9 Year" {{@$property->age === '9 Year' ? 'selected': ''}}>9 Year</option>
                  <option value="10 Year" {{@$property->age === '10 Year' ? 'selected': ''}}>10 Year</option>
                  <option value="11 Year" {{@$property->age === '11 Year' ? 'selected': ''}}>11 Year</option>
                  <option value="12 Year" {{@$property->age === '12 Year' ? 'selected': ''}}>12 Year</option>
                  <option value="13 Year" {{@$property->age === '13 Year' ? 'selected': ''}}>13 Year</option>
                  <option value="14 Year" {{@$property->age === '14 Year' ? 'selected': ''}}>14 Year</option>
                  <option value="15 Year" {{@$property->age === '15 Year' ? 'selected': ''}}>15 Year</option>
                  <option value="16 Year" {{@$property->age === '16 Year' ? 'selected': ''}}>16 Year</option>
                  <option value="17 Year" {{@$property->age === '17 Year' ? 'selected': ''}}>17 Year</option>
                  <option value="18 Year" {{@$property->age === '18 Year' ? 'selected': ''}}>18 Year</option>
                  <option value="19 Year" {{@$property->age === '19 Year' ? 'selected': ''}}>19 Year</option>
                  <option value="20 Year" {{@$property->age === '20 Year' ? 'selected': ''}}>20 Year</option>
                  <option value="20+ Year" {{@$property->age === '20+ Year' ? 'selected': ''}}>20+ Year</option>
                </select>
          </div>
          <div class="col-3">
            <label for="availability" class="form-label">Availability</label>
              <select name="availability" id="availability" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Availabile" {{@$property->availability === 'Availabile' ? 'selected': ''}}>Availabile</option>
                  <option value="Not Availabile"  {{@$property->availability === 'Not Availabile' ? 'selected': ''}}>Not Availabile</option>
                </select>
          </div>
        <div class="col-3">
          <label for="propertyprice" class="form-label">Property Price(Demanded Price)</label>
          <input name="demandedprice" value="{{@$property->demanded_price}}" type="number" class="form-control" id="propertyprice" placeholder="000000">
        </div>
        <div class="col-3">
          <label for="negotiableprice" class="form-label">Negotiable Price(Final Price)</label>
          <input name="finalprice" value="{{@$property->final_price}}" type="number" class="form-control" id="negotiableprice" placeholder="000000">
        </div>
    <div class="col-auto">
      <label class="form-label" for="propertysize">Property Size</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <button class="decrease btn_new" >-</button>
          <button class="quantity">{{@$property->property_size}}</button>
          <button class="increase btn_new">+</button>
        </div>
        <select name="propertysize" id="propertysize" class="form-select mx-1" aria-label="Default select example">
          <option selected>Select</option>
          <option value="Meter"  {{@$property->property_size_unit === 'Meter' ? 'selected': ''}}>Meter</option>
          <option value="Square Meter" {{@$property->property_size_unit === 'Square Meter' ? 'selected': ''}}>Square Meter</option>
          <option value="Square Feet" {{@$property->property_size_unit === 'Square Feet' ? 'selected': ''}}>Square Feet</option>
          <option value="Bigha" {{@$property->property_size_unit === 'Bigha' ? 'selected': ''}}>Bigha</option>
          <option value="Acres" {{@$property->property_size_unit === 'Acres' ? 'selected': ''}}>Acres</option>
          <option value="Others" {{@$property->property_size_unit === 'Others' ? 'selected': ''}}>Others</option>
        </select>
      </div>
    </div>
    <div class="col-3">
      <label for="direction" class="form-label">Property Direction</label>
        <select name="direction" id="direction" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="North" {{@$property->direction === 'North' ? 'selected': ''}}>North</option>
            <option value="South" {{@$property->direction === 'South' ? 'selected': ''}}>South</option>
            <option value="East" {{@$property->direction === 'East' ? 'selected': ''}}>East</option>
            <option value="West" {{@$property->direction === 'West' ? 'selected': ''}}>West</option>
          </select>
    </div>
        <div class="col-md-3">
          <label for="ownername" class="form-label">Owner Name</label>
          <input name="ownername" value="{{@$property->owner_name}}" type="text" class="form-control" placeholder="Property Owner Name" id="ownername">
        </div>
        <div class="col-md-3">
          <label for="email" class="form-label">Email</label>
          <input name="owneremail" value="{{@$property->owner_email}}" type="email" placeholder="Email" class="form-control" id="owneremail">
        </div>
        <div class="col-md-3">
          <label for="ownermobnumber" class="form-label">Mobile No.</label>
          <input name="ownermobile" type="text" value="{{@$property->owner_mob_no}}" placeholder="Property Owner Mobile No." class="form-control" id="ownermobnumber">
        </div>
        <div class="col-md-3">
          <label for="ownerwpnumber" class="form-label">Whatsapp No.</label>
          <input name="ownerwhatsapp" type="text" value="{{@$property->owner_wp_no}}" placeholder="Property Owner Wp No." class="form-control" id="ownerwpnumber">
        </div>
        <div class="col-md-3">
          <label for="brokername" class="form-label">Broker/Agent Name</label>
          <input name="brokername" value="{{@$property->broker_name}}" type="text" class="form-control" placeholder="Broker/Agent Name" id="brokername">
        </div>
        <div class="col-md-3">
          <label for="email" class="form-label">Broker/Agent Email</label>
          <input name="brokeremail" value="{{@$property->broker_email}}" type="email" placeholder="Broker/Agent Email" class="form-control" id="brokeremail">
        </div>
        <div class="col-md-3">
          <label for="ownermobnumber" class="form-label">Broker/Agent Mob No.</label>
          <input name="brokernumber" type="text" value="{{@$property->broker_mob}}" placeholder="Broker/Agent Mobile No." class="form-control" id="brokermobnumber">
        </div>
        <div class="col-md-3">
          <label for="ownerwpnumber" class="form-label">Broker/Agent Whatsapp No.</label>
          <input name="brokerwhatsapp" type="text" value="{{@$property->broker_wp}}" placeholder="Broker/Agent Wp No." class="form-control" id="brokerwpnumber">
        </div>
        <div class="col-md-3">
          <label for="country" class="form-label">Country</label>
          <select name="country" id="country" class="form-select">
            <option selected>Choose...</option>
            <option {{@$property->country === 'India' ? 'selected': ''}}>India</option>
            <option {{@$property->country === 'Pakistan' ? 'selected': ''}}>Pakistan</option>
            <option {{@$property->country === 'Nepal' ? 'selected': ''}}>Nepal</option>
            <option {{@$property->country === 'Bhutan' ? 'selected': ''}}>Bhutan</option>
            <option {{@$property->country === 'SriLanka' ? 'selected': ''}}>SriLanka</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="State" class="form-label">State</label>
          <select name="state" id="State" class="form-select">
            <option selected>Choose...</option>
            <option   {{@$property->state === 'Madhya Pradesh' ? 'selected': ''}}>Madhya Pradesh</option>
            <option  {{@$property->state === 'Rajasthan' ? 'selected': ''}}>Rajasthan</option>
            <option  {{@$property->state === 'Gujrat' ? 'selected': ''}}>Gujrat</option>
            <option  {{@$property->state === 'Punjab' ? 'selected': ''}}>Punjab</option>
            <option  {{@$property->state === 'Maharashtra' ? 'selected': ''}}>Maharashtra</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="city" class="form-label">City</label>
          <select name="city" id="city" class="form-select">
            <option selected>Choose...</option>
            <option  {{@$property->city === 'Indore' ? 'selected': ''}}>Indore</option>
            <option  {{@$property->city === 'Bhopal' ? 'selected': ''}}>Bhopal</option>
            <option  {{@$property->city === 'Jabalpur' ? 'selected': ''}}>Jabalpur</option>
            <option  {{@$property->city === 'Ujjain' ? 'selected': ''}}>Ujjain</option>
            <option  {{@$property->city === 'Dewas' ? 'selected': ''}}>Dewas</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="inputZip" class="form-label">Zip</label>
          <input name="zip" value="{{@$property->zip}}" type="text" class="form-control" placeholder="Zip" id="Zip">
        </div>
        <div class="col-md-6">
          <label for="address" class="form-label">Address</label>
          <input name="address" type="text" value="{{@$property->address}}" class="form-control" placeholder="Property Address" id="address">
        </div>
        <div class="col-md-6">
          <label for="location" class="form-label">Location</label>
          <input name="location" type="text" value="{{@$property->location}}" class="form-control" placeholder="Property Location" id="location">
        </div>
        <div class="col-md-12">
          <label for="remark">Remark</label>
          <textarea name="remark" class="form-control"  placeholder="Comment Related To Lead" id="remark">{{@$property->property_id}}</textarea>
        </div>
        <div class="col-md-12">
          <label for="images" class="form-label">Property Images</label>
          <input name="images" type="file" class="form-control" id="images" aria-describedby="inputGroupFileAddon04" value="{{@$property->images}}" aria-label="Upload">
        </div>
        <div class="col-3">
          <button type="submit" class="btn btn-success" id="id" data-id="{{@$property->id}}">Update</button>
          <button type="cancel" class="btn btn-danger">Cancel</button>
        </div>
      </form>
    </div>
        @include('layouts.footers.auth.footer')
    </div>
<script>
 $(document).ready(function() {
            $('.increase').click(function(e) {
                e.preventDefault();
                var quantityElement = $(this).siblings('.quantity');
                var quantity = parseInt(quantityElement.text());
                quantity++;
                quantityElement.empty().append(quantity);
                console.log(quantity);
            });

            $('.decrease').click(function(e) {
                e.preventDefault();
                var quantityElement = $(this).siblings('.quantity');
                var quantity = parseInt(quantityElement.text());
                if (quantity > 1) {
                    quantity--;
                }
                quantityElement.empty().append(quantity);
                console.log(quantity);
            });

            $("#form").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                console.log(formData);
                var size = $('.quantity').text();
                var imageFile = $('#images')[0].files[0];
                var id = $('#id').data('id');
                formData.append('images', imageFile);
                formData.append('size', size);
                console.log(formData);
                var url = `{{url("update-property")}}/${id}`;

                $.ajax({

                    url: url,
                    type: 'POST',
                    data: formData,
                    
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle the success response
                             
                          $('#propertyid').val('');
                          $('#propertydate').val('');
                          $('#propertyby').val('');
                          $('#propertyfor').val('');
                          $('#propertytype').val('');
                          $('#priority').val('');
                          $('#status').val('');
                          $('#financial').val('');
                          $('#propertytitle').val('');
                          $('#propertydocuments').val('');
                          $('#age').val('');
                          $('#availability').val('');
                          $('#propertyprice').val('');
                          $('#negotiableprice').val('');
                          $('#propertysize').val('');
                          $('#direction').val('');
                          $('#ownername').val('');
                          $('#owneremail').val('');
                          $('#ownermobnumber').val('');
                          $('#ownerwpnumber').val('');
                          $('#brokername').val('');
                          $('#brokeremail').val('');
                          $('#brokermobnumber').val('');
                          $('#brokerwpnumber').val('');
                          $('#country').val('');
                          $('#State').val('');
                          $('#city').val('');
                          $('#Zip').val('');
                          $('#address').val('');
                          $('#location').val('');
                          $('#remark').val('');
                          $('#images').val('');
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