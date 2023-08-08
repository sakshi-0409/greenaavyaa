@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <a href="{{url('properties')}}">List All Properties</a>
    <form id="form" enctype="multipart/form-data" class="row g-3">
        @csrf
        <div class="col-md-3">
            <label for="propertyid" class="form-label">Property Id</label>
            <input name="propertyid" type="text" class="form-control" placeholder="#####" id="propertyid">
        </div>
        <div class="col-md-3">
            <label for="propertydate" class="form-label">Property Date</label>
            <input name="propertydate" type="date" class="form-control" id="propertydate">
        </div>
        <div class="col-3">
            <label for="propertyby" class="form-label">Property By</label>
            <select name="propertyby" id="propertyby" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="agent">Agent</option>
                <option value="broker">Broker</option>
                <option value="owner">Owner</option>
                <option value="others">Others</option>
            </select>
        </div>
        <div class="col-3">
            <label for="propertyfor" class="form-label">Property For</label>
            <select name="propertyfor" id="propertyfor" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="buy">Buy</option>
                <option value="sale">Sale</option>
                <option value="rent">Rent</option>
                <option value="lease">Lease</option>
            </select>
        </div>
        <div class="col-3">
            <label for="propertytype" class="form-label">Property Type</label>
            <select name="propertytype" id="propertytype" class="form-select" aria-label="Default select example">
                <option selected></option>
                <optgroup label="Residential">
                    <option value="houses">Houses</option>
                    <option value="duplexes">Duplexes</option>
                    <option value="triplexes">Triplexes</option>
                    <option value="villas">Villas</option>
                    <option value="town houses">Town Houses</option>
                    <option value="twin homes">Twin Homes</option>
                    <option value="quadplexes">Quadplexes</option>
                    <option value="mobile homes">Mobile Homes</option>
                    <option value="raw houses">Raw Houses</option>
                    <option value="flats">Flats</option>
                </optgroup>

                <optgroup label="Commercial">
                    <option value="offices">Offices</option>
                    <option value="hotels">Hotels</option>
                    <option value="strip malls">Strip Malls</option>
                    <option value="resttaurants">Resttaurants</option>
                    <option value="medical building">Medical Building</option>
                    <option value="educational">Educational</option>
                    <option value="campuses">Campuses</option>
                    <option value="shopping center">Shopping Center</option>
                </optgroup>

                <optgroup label="Land">
                    <option value="Agricultural">Agricultural</option>
                    <option value="Vacant land">Vacant land</option>
                    <option value="Ranches">Ranches</option>
                    <option value="Farms">Farms</option>
                    <option value="Farm House">Farm House</option>
                </optgroup>

                <optgroup label="Industrial">
                    <option value="Ware Houses">Ware Houses</option>
                    <option value="Factories">Factories</option>
                    <option value="Distribution Centers">Distribution Centers</option>
                    <option value="Self Storage Facilities">Self Storage Facilities</option>
                </optgroup>

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
        <div class="col-3">
            <label for="financial" class="form-label">Financial</label>
            <select name="financial" id="financial" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="Financed">Financed</option>
                <option value="Freehold">Freehold</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="propertytitle" class="form-label">Property Title</label>
            <input name="propertytitle" type="text" class="form-control" placeholder="Property Title" id="propertytitle">
        </div>
        <div class="col-3">
            <label for="propertydocuments" class="form-label">Property Documents</label>
            <select name="documents" id="propertydocuments" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="Registry">Registry</option>
                <option value="Notary">Notary</option>
                <option value="Agreement">Agreement</option>
                <option value="Sale Deed">Sale Deed</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="col-3">
            <label for="age" class="form-label">Age Of Property</label>
            <select name="age" id="age" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="Registry">New</option>
                <option value="0 Year">0 Year</option>
                <option value="1 Year">1 Year</option>
                <option value="2 Year">2 Year</option>
                <option value="3 Year">3 Year</option>
                <option value="4 Year">4 Year</option>
                <option value="5 Year">5 Year</option>
                <option value="6 Year">6 Year</option>
                <option value="7 Year">7 Year</option>
                <option value="8 Year">8 Year</option>
                <option value="9 Year">9 Year</option>
                <option value="10 Year">10 Year</option>
                <option value="11 Year">11 Year</option>
                <option value="12 Year">12 Year</option>
                <option value="13 Year">13 Year</option>
                <option value="14 Year">14 Year</option>
                <option value="15 Year">15 Year</option>
                <option value="16 Year">16 Year</option>
                <option value="17 Year">17 Year</option>
                <option value="18 Year">18 Year</option>
                <option value="19 Year">19 Year</option>
                <option value="20 Year">20 Year</option>
                <option value="20+ Year">20+ Year</option>
            </select>
        </div>
        <div class="col-3">
            <label for="availability" class="form-label">Availability</label>
            <select name="availability" id="availability" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="Availabile">Available</option>
                <option value="Not Availabile">Not Available</option>
            </select>
        </div>
        <div class="col-3">
            <label for="propertyprice" class="form-label">Property Price(Demanded Price)</label>
            <input name="demandedprice" type="number" class="form-control" id="propertyprice" placeholder="000000">
        </div>
        <div class="col-3">
            <label for="negotiableprice" class="form-label">Negotiable Price(Final Price)</label>
            <input name="finalprice" type="number" class="form-control" id="negotiableprice" placeholder="000000">
        </div>
        <div class="col-auto">
            <label class="form-label" for="propertysize">Property Size</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <button class="decrease btn_new">-</button>
                    <button class="quantity">1</button>
                    <button class="increase btn_new">+</button>
                </div>
                <select name="propertysize" id="propertysize" class="form-select mx-1" aria-label="Default select example">
                    <option selected></option>
                    <option value="Meter">Meter</option>
                    <option value="Square Meter">Square Meter</option>
                    <option value="Square Feet">Square Feet</option>
                    <option value="Bigha">Bigha</option>
                    <option value="Acres">Acres</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <label for="direction" class="form-label">Property Direction</label>
            <select name="direction" id="direction" class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="North">North</option>
                <option value="South">South</option>
                <option value="East">East</option>
                <option value="West">West</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="ownername" class="form-label">Owner Name</label>
            <input name="ownername" type="text" class="form-control" placeholder="Property Owner Name" id="ownername">
        </div>
        <div class="col-md-3">
            <label for="email" class="form-label">Email</label>
            <input name="owneremail" type="email" placeholder="Email" class="form-control" id="owneremail">
        </div>
        <div class="col-md-3">
            <label for="ownermobnumber" class="form-label">Mobile No.</label>
            <input name="ownermobile" type="text" placeholder="Property Owner Mobile No." class="form-control" id="ownermobnumber">
        </div>
        <div class="col-md-3">
            <label for="ownerwpnumber" class="form-label">Whatsapp No.</label>
            <input name="ownerwhatsapp" type="text" placeholder="Property Owner Wp No." class="form-control" id="ownerwpnumber">
        </div>
        <div class="col-md-3">
            <label for="brokername" class="form-label">Broker/Agent Name</label>
            <input name="brokername" type="text" class="form-control" placeholder="Broker/Agent Name" id="brokername">
        </div>
        <div class="col-md-3">
            <label for="email" class="form-label">Broker/Agent Email</label>
            <input name="brokeremail" type="email" placeholder="Broker/Agent Email" class="form-control" id="brokeremail">
        </div>
        <div class="col-md-3">
            <label for="ownermobnumber" class="form-label">Broker/Agent Mob No.</label>
            <input name="brokernumber" type="text" placeholder="Broker/Agent Mobile No." class="form-control" id="brokermobnumber">
        </div>
        <div class="col-md-3">
            <label for="ownerwpnumber" class="form-label">Broker/Agent Whatsapp No.</label>
            <input name="brokerwhatsapp" type="text" placeholder="Broker/Agent Wp No." class="form-control" id="brokerwpnumber">
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
            <input name="zip" type="text" class="form-control" placeholder="Zip" id="Zip">
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control" placeholder="Property Address" id="address">
        </div>
        <div class="col-md-6">
            <label for="location" class="form-label">Location</label>
            <input name="location" type="text" class="form-control" placeholder="Property Location" id="location">
        </div>
        <div class="col-md-12">
            <label for="remark">Remark</label>
            <textarea name="remark" class="form-control" placeholder="Comment Related To Lead" id="remark"></textarea>
        </div>
        <div class="col-md-12">
            <label for="images" class="form-label">Property Images</label>
            <input name="images" type="file" class="form-control" id="images" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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

        // $("#form").on('submit', function(e) {
        //     e.preventDefault();
        $("#form").validate({
            rules: {
                propertyid: {
                    required: true
                }
                , propertydate: {
                    required: true
                }
                , propertyby: {
                    required: true
                }
                , propertyfor: {
                    required: true
                }
                , propertytype: {
                    required: true
                }
                , priority: {
                    required: true
                }
                , status: {
                    required: true
                }
                , financial: {
                    required: true
                }
                , propertytitle: {
                    required: true
                    , minlength: 2
                }
                , documents: {
                    required: true
                }
                , age: {
                    required: true
                }
                , availability: {
                    required: true
                }
                , demandedprice: {
                    required: true
                }
                , finalprice: {
                    required: true
                }
                , propertysize: {
                    required: true
                }
                , direction: {
                    required: true
                }
                , ownername: {
                    required: true
                    , minlength: 2
                }
                , owneremail: {
                    required: true
                    , minlength: 6
                }
                , ownermobile: {
                    required: true
                    , minlength: 10
                }
                , ownerwhatsapp: {
                    required: true
                    , minlength: 10
                }
                , brokername: {
                    required: true
                    , minlength: 2
                }
                , brokeremail: {
                    required: true
                    , minlength: 6
                }
                , brokernumber: {
                    required: true
                    , minlength: 10
                }
                , brokerwhatsapp: {
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
                    , minlength: 5
                }
                , location: {
                    required: true
                    , minlength: 5
                }
                , remark: {
                    required: true
                    , minlength: 5
                }
            }
            , messages: {
                propertyid: {
                    required: "Please enter property id"
                    , minlength: "First name must be at least 2 characters"
                }
                , propertydate: {
                    required: "Please enter property date"
                }
                , propertyby: {
                    required: "Please select one"
                }
                , propertyfor: {
                    required: "Please select one"
                }
                , propertytype: {
                    required: "Please select one"
                }
                , priority: {
                    required: "Please select one"
                }
                , status: {
                    required: "Please select one"
                }
                , financial: {
                    required: "Please select one"
                }
                , propertytitle: {
                    required: "Please enter property title"
                    , minlength: "Last name must be at least 2 characters"
                }
                , documents: {
                    required: "Please select one"
                }
                , age: {
                    required: "Please select one"
                }
                , availability: {
                    required: "Please select one"
                }
                , demandedprice: {
                    required: "Please enter property price"
                }
                , finalprice: {
                    required: "Please enter negotiable price"
                }
                , propertysize: {
                    required: "Please select property size"
                }
                , direction: {
                    required: "Please select one"
                }
                , ownername: {
                    required: "Please enter owner full name"
                }
                , owneremail: {
                    required: "Please enter owner email id"
                }
                , ownermobile: {
                    required: "Please enter owner mobile number"
                }
                , ownerwhatsapp: {
                    required: "Please enter owner whatsapp number"
                }
                , brokername: {
                    required: "Please enter broker/agent name"
                }
                , brokeremail: {
                    required: "Please enter broker/agent email id"
                }
                , brokernumber: {
                    required: "Please enter broker/agent mobile no."
                }
                , brokerwhatsapp: {
                    required: "Please enter broker/agent whatsapp no."
                }
                , country: {
                    required: "Please select one"
                }
                , state: {
                    required: "Please select one"
                }
                , city: {
                    required: "Please select one"
                }
                , zip: {
                    required: "Please entry city zip number"
                }
                , address: {
                    required: "Please enter property address"
                }
                , location: {
                    required: "Please enter property location"
                }
                , remark: {
                    required: "Please enter remark"
                }
            }
        
            , submitHandler: function(form) {
                var formData = new FormData(form);
                console.log(formData);
                var size = $('.quantity').text();
                var imageFile = $('#images')[0].files[0];

                formData.append('images', imageFile);
                formData.append('size', size);
                console.log(formData);
                var url = '{{url("create-property")}}';

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
