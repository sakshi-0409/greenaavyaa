
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container">
    <a href="{{url('brokerss')}}">List All Brokers</a>
    <form id="form" enctype="multipart/form-data" class="row g-3">
      @csrf
        <div class="col-md-3">
          <label for="brokerid" class="form-label">Broker Id</label>
          <input name="brokerid" type="text" class="form-control" placeholder="#####" id="brokerid">
        </div>
        <div class="col-md-3">
          <label for="date" class="form-label">Joining Date</label>
          <input name="date" type="date" class="form-control" id="date">
        </div>
     
        <div class="col-3">
          <label for="workas" class="form-label">Work As A</label>
            <select name="workas" id="workas" class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
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
                
                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="active" aria-label="...">
                <label for="status" class="form-label">Active</label>
                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="inactive" aria-label="...">
                <label for="status" class="form-label">Inactive</label>
              </div>
        </div>
        
          <div class="col-md-6">
            <label for="name" class="form-label"> Name</label>
            <input name="name" type="text" class="form-control" placeholder="Name" id="name">
          </div>
          <div class="col-3">
            <label for="status" class="form-label">Gender</label>
            <div>
                
                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="male" aria-label="...">
                <label for="status" class="form-label">Male</label>
                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="female" aria-label="...">
                <label for="status" class="form-label">Female</label>
                <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1" value="others" aria-label="...">
                <label for="status" class="form-label">Others</label>
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
            <input name="mobile" type="text" placeholder="Mobile No." class="form-control" id="mobnumber">
          </div>
          <div class="col-md-3">
            <label for="wpnumber" class="form-label">Whatsapp No.</label>
            <input name="whatsapp" type="text" placeholder="Whatsapp No." class="form-control" id="wpnumber">
          </div>



          
        <div class="col-md-3">
          <label for="country" class="form-label">Country</label>
          <select name="country" id="country" class="form-select">
            <option selected>Choose...</option>
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
            <option selected>Choose...</option>
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
            <option selected>Choose...</option>
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
        <div class="col-md-3">
          <label for="city" class="form-label">Identity Type</label>
          <select name="city" id="city" class="form-select">
            <option selected>Choose...</option>
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
        @include('layouts.footers.auth.footer')
    </div>
<script>
 $(document).ready(function() {
           
            $("#form").on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData($(this)[0]);
                console.log(formData);
                
                var url = '{{url("create-lead")}}';

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
                          $('#priority').val('');
                          $('#status').val('');
                          $('#title').val('');
                          $('#availability').val('');
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