@extends('admin.mainlayouts.index')
@section('title','Edit-service-form')
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
                    <h5>Service</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $getServiceData['id'] }}">
                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label">Service No</label>
                            <div class="col-md-6 control-label">
                                {{ $getServiceData['service_no'] }}
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label">Owner Name</label>
                            <div class="col-md-6 control-label">
                                {{ $getServiceData['owner_name'] }}
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label">Owner Mobile</label>
                            <div class="col-md-6">
                                {{ $getServiceData['owner_mobile'] }}
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label">Location</label>
                            <div class="col-md-6">
                                {{ $getServiceData['location'] }}
                            </div>
                        </div>
                      
                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label">Insurer</label>
                            <div class="col-md-6">
                                {{ $getServiceData['insurer'] }}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label">Vehicle No</label>
                            <div class="col-md-6">
                                {{ $getServiceData['vehicle_no'] }}
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="col-md-6 control-label">Address</label>
                            <div class="col-md-6">
                                {{ $getServiceData['address'] }}
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                             <label class="col-md-6 control-label">Executive</label>
                            <div class="col-md-6">
                                {{ $getServiceData['user_id'] }}
                            </div>
                        </div>
                        
                        <!--<div class="hr-line-dashed"></div>-->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Service Photo</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        @foreach($getServicePhotoDatas as $getServicePhotoData)
                        
                        @php
                            $data = explode(".",$getServicePhotoData['name']);
                            $lastdata = end($data);
                        @endphp
                        @if($lastdata == 'mp4')
                        <div class="form-group col-md-3">
                            <video width="150" controls>
                                <source src="{{ url('/public/servicephoto/'.$getServicePhotoData['name']) }}" type="video/mp4">
                                <source src="{{ url('/public/servicephoto/'.$getServicePhotoData['name']) }}" type="video/ogg">
                                Your browser does not support HTML5 video.
                              </video>
                        </div>
                        
                        
                        @else
                        <div class="form-group col-md-3">
                            <img style="width: 150px;" src="{{ url('/public/servicephoto/'.$getServicePhotoData['name']) }}">
                        </div>
                        @endif
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection