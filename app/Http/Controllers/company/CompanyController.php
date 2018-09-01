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

        return view('company.pages.company-list', $data);
    }

}
