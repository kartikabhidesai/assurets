@extends('admin.mainlayouts.index')
@section('title','User-list')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Userlist</h5>
                    <div class="ibox-tools">
                        <a class="close-link" title="Add User" data-toggle="tooltip" data-placement="left" href="{{ url('userform') }}">
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
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Mobile</th>
                                        <th>Role type</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($getUserlistdata as $value)
                                    <tr>
                                        <td>{{ $value['id'] }} </td>
                                        <td>{{ $value['firstname'] }} </td>
                                        <td>{{ $value['lastname'] }}</td>
                                        <td>{{ $value['email'] }}</td>
                                        <td>{{ $value['username'] }}</td>
                                        <td>{{ $value['mobile'] }}</td>
                                        <td>{{ $value['role_type'] }}</td>
                                        <td><a class="delete" href="{{ route('delete',['id'=>$value['id']]) }}">Delete</a></td>
                                        <td><a href="{{ route('edituser',['id'=>$value['id']]) }}">Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-center">
                            {{ $getUserlistdata->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
