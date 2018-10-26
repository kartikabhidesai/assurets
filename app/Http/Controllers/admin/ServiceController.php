<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
//use Validator;
use App\Model\Users;
use App\Model\Service;
use App\Model\ServicePhoto;
use DB;



class ServiceController extends Controller {

    public function addservice(Request $request) {

        if ($request->isMethod('post')) {

            $validator = validator::make($request->all(), [
                        'vehicle_no' => 'required',
                        'owner_name' => 'required',
                        'owner_mobile' => 'required|numeric|min:10',
                        'location' => 'required',
                        'insurer' => 'required',
                        'address' => 'required',
                        'user_id' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect('addservice')
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

        $perPage = 15;
        $services = new service;
        $getUserServices = $services->getServices($perPage);
        $data['getUserServices'] = $getUserServices;
        $data['css'] = array('plugins/dataTables/datatables.min.css');
        
        $data['js'] = array(
            'plugins/dataTables/datatables.min.js',
            'services/services.js'
        );
        $data['funinit'] = array(
            'Services.init()',
        );
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
                        'vehicle_no' => 'required',
                        'address' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect('editservice'.'/'.$id)->withErrors($validator)->withInput();
            }

            $serviceObj = new Service;

            $editService = $serviceObj->editService($request, $id);

            $data['editService'] = $editService;
            
//            print_r($editService);exit;

            return redirect('services');
        }

        $serviceData = new Service;
        $getServiceData = $serviceData->getServiceData($id);
        $data['getServiceData'] = $getServiceData;
        return view('admin.pages.editservice', $data);
    }
    
    public function detailservice(Request $request, $id) {

        $serviceData = new Service;
        $getServiceData = $serviceData->getServiceData($id);
        $data['getServiceData'] = $getServiceData;
        
        $objServicePhotoData = new ServicePhoto;
        $arrServicePhotoData = $objServicePhotoData->getServicePhotoData($id);
        $data['getServicePhotoDatas'] = $arrServicePhotoData;
        return view('admin.pages.detailservice', $data);
    }
    
    public function ajaxAction(Request $request){
         $action = $request->input('action');
            
            switch ($action)
            {
                case 'datatableServices':
                    $serviceObj = new Service;
                    $serviceLists = $serviceObj->getDatatable($request);
                    echo json_encode($serviceLists);
                    break;
                  
                case 'datatableUser':                      
                    $usersObj = new Users;
                    $serviceLists = $usersObj->getDatatable($request);
                    echo json_encode($serviceLists);
                    break;
            }
    }
}
