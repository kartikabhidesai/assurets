<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Validator;
use App\Model\Users;
use App\Model\Service;
use DB;

class ServiceController extends Controller {

    public function addservice(Request $request) {

        if ($request->isMethod('post')) {

            $validator = validator::make($request->all(), [
                        'user_id' => 'required',
                        'vehicle_no' => 'required',
                        'address' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect('register')
                                ->withErrors($validator)
                                ->withInput();
            }

            $serviceObj = new Service;

            $insertService = $serviceObj->insertService($request);

            $data['insertService'] = $insertService;

            return redirect()->back()->with('message','Service inserted');
        }

        $userid = new Users;

        $getUserId = $userid->getUserId();

        $data['getUserId'] = $getUserId;

        return view('admin.pages.addservice', $data);
    }

    public function services() {

        $perPage = 2;

        $services = new service;

        $getUserServices = $services->getServices($perPage);

        $data['getUserServices'] = $getUserServices;


        return view('admin.pages.services', $data);
    }

    public function deleteservice(Request $request, $id) {

        $serviceObj = new service;

        $deleteService = $serviceObj->deleteService($id);

        $data['deleteService'] = $deleteService;

        return redirect()->back()->with('message', 'Service Deleted Successfully');
    }

    public function editservice(Request $request, $id) {

        if ($request->isMethod('post')) {

            $validator = validator::make($request->all(), [
                        'service_no' => 'required',
                        'user_id' => 'required',
                        'vehicle_no' => 'required',
                        'address' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect('editservice')->withErrors($validator)->withInput();
            }

            $serviceObj = new Service;

            $editService = $serviceObj->editService($request, $id);

            $data['editService'] = $editService;

            return redirect('services');
        }

        $serviceData = new Service;
        $getServiceData = $serviceData->getServiceData($id);
        $data['getServiceData'] = $getServiceData;
        return view('admin.pages.editservice', $data);
    }

}
