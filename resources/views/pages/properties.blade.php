@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-2">
                    <h6>Properties</h6><a class="border p-1 rounded"  href="{{url('createproperty')}}">Create property</a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table id="myTable" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Property id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Created on</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        For</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title</th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Owner Name</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $properties = App\Models\Properties::all() ?>
                                @foreach ($properties as $property)

                                <tr>

                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$property->property_id}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$property->property_date}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$property->for}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$property->property_type}}</p>
                                    </td>

                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$property->title}}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{$property->owner_name}}</p>
                                    </td>


                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">{{$property->availability}}</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="cursor-pointer badge badge-sm bg-gradient-success edit" data-id="{{$property->id}}"><a href="{{url('editproperty')}}/{{$property->id}}">Edit</a></span>
                                        <span class="cursor-pointer badge badge-sm bg-gradient-danger delete" data-id="{{$property->id}}">Delete</span>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');

</script>
<script>
    $(document).ready(function() {
        $('body').on('click', '.delete', function(e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            var id = $(this).data('id');
            var url = `{{ url('/deleteproperty') }}/?id=${id}`;

            console.log(url);
            $.ajax({

                url: url
                , data: jQuery('.remove').serialize()
                , type: 'get'
                , success: function(response) {
                    row.remove();
                }
            });
        });

    });

</script>
@endsection
