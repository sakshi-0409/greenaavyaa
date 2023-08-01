
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Brokers</h6><a class="border" href="{{url('createbroker')}}">Create New Broker</a>
                    </div>
                
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="myTable" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Broker id</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Broker Name</th>
                                        
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Mobile Number</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                           
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Date Of Birth</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $brokers = App\Models\Brokers::all() ?>
                                    @foreach ($brokers as $broker)
                                        
                                    <tr>
                                        
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$broker->brokerid}}</p>
                                        </td>
                                       
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$broker->name}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$broker->mobile}}</p>
                                        </td>
                                        
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$broker->email}}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$broker->dob}}</p>
                                        </td>
                                        <td>
                                            <p class="badge badge-sm bg-gradient-success text-xs font-weight-bold mb-0">{{$broker->status}}</p>
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
@endsection
