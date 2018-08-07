@extends('admin.mainlayouts.index')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <form action="" method="post">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
                        <div class="container">
                            <!--<div align="right">-->
                            <div class="ibox-tools">
                                
                               
                                <a class="close-link" href="{{ url('userform') }}">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

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
                                            <td><a href="{{ route('delete',['id'=>$value['id']]) }}">Delete</a></td>
                                            <td><a href="{{ route('edituser',['id'=>$value['id']]) }}">Edit</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                                {{ $getUserlistdata->links() }}
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
