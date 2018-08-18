@extends('admin.mainlayouts.index')      
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Edit Service</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $getServiceData['id'] }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Service No</label>

                            <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $getServiceData['service_no'] }}" name="service_no" class="form-control"></div>
                        </div>

                        <div class="hr-line-dashed"></div>
                       <div class="form-group"><label class="col-sm-2 control-label">User Id</label>

                            <div class="col-sm-10"><input type="text" disabled="disabled" value="{{ $getServiceData['user_id'] }}" name="user_id" class="form-control"></div>
                        </div>

                        <div class="hr-line-dashed"></div><div class="form-group"><label class="col-sm-2 control-label">Vehicle No</label>

                            <div class="col-sm-10"><input type="text" value="{{ $getServiceData['vehicle_no'] }}" name="vehicle_no" class="form-control"></div>
                        </div>

                        <div class="hr-line-dashed"></div><div class="form-group"><label class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-10"><input type="text" value="{{ $getServiceData['address'] }}" name="address" class="form-control"></div>
                        </div>
                        
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" name="submit" type="submit">Update Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection