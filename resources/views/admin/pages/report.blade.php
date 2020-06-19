@extends('admin.mainlayouts.index')
@section('title','Report-list')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
	@if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Report List</h5>
                    <div class="ibox-tools">
                       <a class="close-link" title="Add Report" data-toggle="tooltip" data-placement="left" href="{{ url('addreport') }}">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div id="rickshaw_scatterplot" class="rickshaw_graph">
                        <input class="c-input" type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" id="datatableServices" >
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phonr/FAX</th>
                                        <th>City</th>
                                        <th>Refrence No</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
