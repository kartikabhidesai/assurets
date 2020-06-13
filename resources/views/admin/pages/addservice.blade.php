@extends('admin.mainlayouts.index') 
@section('title','Service form')
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
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Service Form</h5>
                    
                </div>
                <div class="ibox-content">
                    <form method="post" class="form-horizontal" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Service No</label>

                            <div class="col-sm-10"><input type="text" value="{{ 'ATS-'.date('Y-m-').(int)$serviceId }}" name="service_no" readonly class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div><div class="form-group"><label class="col-sm-2 control-label">Vehicle No</label>

                            <div class="col-sm-10"><input type="text" name="vehicle_no" class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div><div class="form-group"><label class="col-sm-2 control-label">Owner Name</label>

                            <div class="col-sm-10"><input type="text" name="owner_name" class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div><div class="form-group"><label class="col-sm-2 control-label">Owner Mobile</label>

                            <div class="col-sm-10"><input type="text" name="owner_mobile" class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div><div class="form-group"><label class="col-sm-2 control-label">Location</label>

                            <div class="col-sm-10"><input type="text" name="location" class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Insurer</label>

                            <div class="col-sm-10">
                                  <select class="form-control m-b" id="user" name="insurer">
                                
                                
                                    @foreach($getCompany as $value)
                                    <option value="{{ $value['id'] }}">{{ $value['firstname'] }} {{ $value['lastname'] }}</option>
                                    @endforeach
                                </select>               
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div><div class="form-group"><label class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-10"><input type="text" name="address" class="form-control"></div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">Inspected by</label>

                            <div class="col-sm-10">
                                <select class="form-control m-b" id="user" name="user_id">
                                    @foreach($getUserId as $value)
                                    <option value="{{ $value['id'] }}">{{ $value['firstname'] }} {{ $value['lastname'] }}</option>
                                    @endforeach
                                </select> 
                                
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-primary" name="submit" type="submit">Add Details</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection