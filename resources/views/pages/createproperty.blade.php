
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container">
    <form class="row g-3">
        <div class="col-md-3">
          <label for="propertyid" class="form-label">Property Id</label>
          <input type="text" class="form-control" id="propertyid">
        </div>
        <div class="col-md-3">
          <label for="propertydate" class="form-label">Property Date</label>
          <input type="date" class="form-control" id="propertydate">
        </div>
        <div class="col-3">
          <label for="propertyby" class="form-label">Property By</label>
            <select id="propertyby" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="agent">Agent</option>
                <option value="brocker">Brocker</option>
                <option value="owner">Owner</option>
                <option value="others">Others</option>
              </select>
        </div>
        <div class="col-3">
          <label for="propertyfor" class="form-label">Property For</label>
            <select id="propertyfor" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="buy">Buy</option>
                <option value="sale">Sale</option>
                <option value="rent">Rent</option>
                <option value="lease">Lease</option>
              </select>
        </div>
        <div class="col-3">
          <label for="propertytype" class="form-label">Property Type</label>
            <select id="propertytype" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
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
              <select id="priority" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="low">Low</option>
                  <option value="normal">Normal</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
                </select>
          </div>
        <div class="col-3">
            <label for="status" class="form-label">Status</label>
              <select id="status" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
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
              <select id="financial" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Financed">Financed</option>
                  <option value="Freehold">Freehold</option>
                  <option value="Others">Others</option>
                </select>
          </div>
          <div class="col-md-3">
            <label for="propertytitle" class="form-label">Property Title</label>
            <input type="text" class="form-control" placeholder="Property Title" id="propertytitle">
          </div>
          <div class="col-3">
            <label for="propertydocuments" class="form-label">Property Documents</label>
              <select id="propertydocuments" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Registry">Registry</option>
                  <option value="Notary">Notary</option>
                  <option value="Agreement">Agreement</option>
                  <option value="Sale Deed">Sale Deed</option>
                  <option value="Others">Others</option>
                </select>
          </div>
          <div class="col-3">
            <label for="propertydocuments" class="form-label">Age Of Property</label>
              <select id="propertydocuments" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
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
              <select id="availability" class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="Availabile">Availabile</option>
                  <option value="Not Availabile">Not Availabile</option>
                </select>
          </div>
        <div class="col-3">
          <label for="propertyprice" class="form-label">Property Price(Demanded Price)</label>
          <input type="number" class="form-control" id="propertyprice" placeholder="000000">
        </div>
        <div class="col-3">
          <label for="negotiableprice" class="form-label">Negotiable Price(Final Price)</label>
          <input type="number" class="form-control" id="negotiableprice" placeholder="000000">
        </div>
       
        <div class="col-md-3">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-3">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>
    </div>
        @include('layouts.footers.auth.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
	let table = new DataTable('#myTable');
</script>
@endsection