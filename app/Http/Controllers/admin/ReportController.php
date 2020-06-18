<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    //
     function __construct(){

    }

    public function report(Request $request){
    	if ($request->isMethod('post')) {
           
           
        }

        $data['title'] = "Assurets || Report";
        $data['js'] = array(
           
            'ajaxfileupload.js',
            'jquery.form.min.js',
            "report.js",
        );
        $data['pluginjs'] = array(
            "validate/jquery.validate.min.js",
            "toastr/toastr.min.js",
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['funinit'] = array(
            "Report.init()",
        );
        return view('admin.pages.report', $data);
    }
}
