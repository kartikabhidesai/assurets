<?php

namespace App\Http\Controllers\company;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Model\Company;

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

}
