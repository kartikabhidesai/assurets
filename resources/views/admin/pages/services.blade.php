@extends('admin.mainlayouts.index')
@section('title','Service-list')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Service List</h5>
                    <div class="ibox-tools">
                       <a class="close-link" title="Add Service" data-toggle="tooltip" data-placement="left" href="{{ url('addservice') }}">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="rickshaw_scatterplot" class="rickshaw_graph">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Service No</th>
                                        <th>Vehicle No</th>
                                        <th>Owner name</th>
                                        <th>Mobile</th>
                                        <th>Location</th>
                                        <th>Insurer</th>
                                        <th>Address</th>
                                        <th>Executive</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getUserServices as $value)
                                    <tr>
                                        <td>{{ $value['id'] }}</td>
                                        <td>{{ $value['service_no'] }}</td>
                                         <td>{{ $value['vehicle_no'] }}</td>
                                         <td>{{ $value['owner_name'] }}</td>
                                         <td>{{ $value['owner_mobile'] }}</td>
                                         <td>{{ $value['location'] }}</td>
                                         <td>{{ $value['insurer'] }}</td>
                                         <td>{{ $value['address'] }}</td>
                                        <td>{{ $value['firstname'] }} {{ $value['lastname'] }}</td>
                                        <td><a class="delete" href="{{ route('deleteservice',['id'=>$value['id']]) }}">Delete</a></td>
                                        <td><a href="{{ route('editservice',['id'=>$value['id']]) }}">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-center">
                          {{ $getUserServices->links() }} 
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection