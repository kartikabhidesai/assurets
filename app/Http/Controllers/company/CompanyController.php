<?php

namespace App\Http\Controllers\company;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Model\Company;
use App\Model\Service;
use App\Model\ServicePhoto;

class CompanyController extends Controller {
        
    public function companylist() {

        $perPage = 15;

        $CompanyList = new Company;

        $getCompanyList = $CompanyList->getCompanyList($perPage);

        $data['getCompanyList'] = $getCompanyList;
        
          $data['css'] = array(
        
            'plugins/dataTables/datatables.min.css',
            'plugins/sweetalert/sweetalert.css',
        );
        
        $data['js'] = array(
            'plugins/dataTables/datatables.min.js',            
            'plugins/sweetalert/sweetalert.min.js',
            'company/services/companyservices.js'
            
        );
        $data['funinit'] = array(
            'Comapanyservices.init()',
        );

        return view('company.pages.company-list', $data);
    }
    
    public function companyserivces(){
           $perPage = 15;
           $logindata='17';
           
        $CompanyList = new Company;
        $getCompanyList = $CompanyList->getMyCompanyList($perPage,$logindata);
        $data['getCompanyList'] = $getCompanyList;
        
        $data['css'] = array(
            'plugins/dataTables/datatables.min.css',
            'plugins/sweetalert/sweetalert.css',
        );
        
        $data['js'] = array(
            'plugins/dataTables/datatables.min.js',            
            'plugins/sweetalert/sweetalert.min.js',
            'company/services/myservices.js'
            
        );
        $data['funinit'] = array(
            'Myservices.init()',
        );

        return view('company.pages.company-services-list', $data);
    }
    
    public function customermydetailservice(Request $request, $id){
       $serviceData = new Service;
        $getServiceData = $serviceData->getServiceData($id);
        $data['getServiceData'] = $getServiceData['0'];
        
        $objServicePhotoData = new ServicePhoto;
        $arrServicePhotoData = $objServicePhotoData->getServicePhotoData($id);
        $data['getServicePhotoDatas'] = $arrServicePhotoData;
        $data['css'] = array(
            'plugins/blueimp/css/blueimp-gallery.min.css',            
        );
         $data['js'] = array(                 
            'inspinia.js',
            'plugins/pace/pace.min.js',
            'plugins/blueimp/jquery.blueimp-gallery.min.js'
        );
        
        return view('company.pages.detailservice', $data);
    }
    
    public function customerdetailservice(Request $request, $id){
       $serviceData = new Service;
        $getServiceData = $serviceData->getServiceData($id);
        $data['getServiceData'] = $getServiceData['0'];
        
        $objServicePhotoData = new ServicePhoto;
        $arrServicePhotoData = $objServicePhotoData->getServicePhotoData($id);
        $data['getServicePhotoDatas'] = $arrServicePhotoData;
        $data['css'] = array(
            'plugins/blueimp/css/blueimp-gallery.min.css',            
        );
         $data['js'] = array(                 
            'inspinia.js',
            'plugins/pace/pace.min.js',
            'plugins/blueimp/jquery.blueimp-gallery.min.js'
        );
        
        return view('company.pages.detailservice', $data);
    }

}
