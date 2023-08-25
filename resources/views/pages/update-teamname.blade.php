@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="{{url('teams')}}">List All Teams</a>
                    <h4>Update Team Name</h4>
                    <form id="form" method="post" enctype="multipart/form-data" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="teamid" class="form-label">Team Id</label>
                            <input name="teamid" value="{{@$team->team_id}}" type="text" class="form-control" id="teamid" placeholder="#####" id="teamid">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Team Name</label>
                            <input name="name" value="{{@$team->team_name}}" type="text" placeholder="Team Name" class="form-control" id="name">
                        </div>

                        <div class="col-12">
                            <button type="submit" id="id" data-id="{{$team->id}}" class="btn btn-success">Update</button>
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
                team_id: {
                    required: true
                    , minlength: 2
                }
                , team_name: {
                    required: true
                }
                
            }
            , messages: {
                team_id: {
                    required: "Please enter team id"
                }
                , team_name: {
                    required: "Please enter joining date"
                }
                
            }
            , submitHandler: function(form) {
                var formData = new FormData(form);
                var id = $('#id').data('id');
                console.log(formData);

                var url = `{{url("update-teamname")}}/${id}`;


                $.ajax({

                    url: url
                    , type: 'POST'
                    , data: formData,

                    contentType: false
                    , processData: false
                    , success: function(response) {
                        window.location.href = '/teams';
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
