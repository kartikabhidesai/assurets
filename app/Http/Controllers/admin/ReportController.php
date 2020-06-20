<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ReportModel;
use Excel;

class ReportController extends Controller
{
    //
     function __construct(){

    }

    public function report(Request $request){

        $data['title'] = "Assurets || Report";
        $data['js'] = array(
            'plugins/dataTables/datatables.min.js',            
            'plugins/sweetalert/sweetalert.min.js',
            "report.js",
        );
        
        $data['css'] = array(
            'plugins/dataTables/datatables.min.css',
            'plugins/sweetalert/sweetalert.css',
        );
        $data['funinit'] = array(
            "Report.init()",
        );
        return view('admin.pages.report', $data);
    }

    public function detailreport(Request $request,$id){

    	$reportData = new ReportModel;
        $getReportData = $reportData->getReportData($id);
        // echo "<pre>";print_r($getReportData[0]['report_data']);die;
        // echo "<pre>";print_r();die;
        $data['id'] = $id;
        $data['reportdata'] = json_decode($getReportData[0]['report_data']);

        $data['title'] = "Assurets || Report-details";
        $data['js'] = array(
         
        );
        
        $data['css'] = array(
            
        );
        $data['funinit'] = array(
            
        );
        return view('admin.pages.reportdetails', $data);
    }

    public function addreport(Request $request) {
       
        if ($request->isMethod('post')) {
           $reportObj = new ReportModel;
           $InsertData = $reportObj->intData($request->input());

            if($InsertData) {
                $return['status'] = 'success';
                $return['message'] = 'Report Data successfully inserted.';
                $return['redirect'] = route('report');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Something goes to wrong..!';
                $return['redirect'] = route('addreport');
            }
            echo json_encode($return);
            exit;
           // echo "<pre>";print_r(json_encode($request->input()));die;
        }

        $data['title'] = "Assurets || Report";
        $data['js'] = array(
           
            'ajaxfileupload.js',
            'jquery.form.min.js',
            "report.js",
        );
        $data['dropdownvalues'] = array(
            'sound'=> 'Sound',
            'average'=> 'Average',
            'bad'=> 'Bad',
        );
        $data['pluginjs'] = array(
            "validate/jquery.validate.min.js",
            "toastr/toastr.min.js",
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['funinit'] = array(
            "Report.addreport()",
        );
        return view('admin.pages.addreportdata', $data);
    }

    public function ajaxAction(Request $request){
         $action = $request->input('action');

         switch ($action){            
            case 'getReportList':
                $reportObj = new ReportModel;
                $reportList = $reportObj->getReportDatatable($request);
                echo json_encode($reportList);
            break;
        }
    }

    public function editreport(Request $request, $id) {

        if ($request->isMethod('post')){

        	$reportObj = new ReportModel;
           	$ediitData = $reportObj->editReportData($request->input(),$id);
       	 	if($ediitData) {
                $return['status'] = 'success';
                $return['message'] = 'Report Data successfully updated.';
                $return['redirect'] = route('report');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'Something goes to wrong..!';
                $return['redirect'] = route('editreport',$id);
            }
            echo json_encode($return);
            exit;
        }
        
        $reportData = new ReportModel;
        $getReportData = $reportData->getReportData($id);
        // echo "<pre>";print_r($getReportData[0]['report_data']);die;
        // echo "<pre>";print_r();die;
        $data['id'] = $id;
        $data['reportdata'] = json_decode($getReportData[0]['report_data']);
      	// echo "<pre>";print_r($data['reportdata']);die;
      	$data['title'] = "Assurets || Report";
        $data['js'] = array(
           
            'ajaxfileupload.js',
            'jquery.form.min.js',
            "report.js",
        );
        $data['dropdownvalues'] = array(
            'sound'=> 'Sound',
            'average'=> 'Average',
            'bad'=> 'Bad',
        );
        $data['pluginjs'] = array(
            "validate/jquery.validate.min.js",
            "toastr/toastr.min.js",
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['funinit'] = array(
            "Report.editreport()",
        );
        
        return view('admin.pages.editreport', $data);
    }

    public function deletereport(Request $request, $id) {

        $reportObj = new ReportModel;
        $deleteService = $reportObj->deleteReport($id);

        $data['deleteService'] = $deleteService;

        return redirect()->back()->with('message', 'Service Deleted Successfully');
    }
    
    public function generatereport(Request $request , $id)
    {
        

        // Session::push('reportdata', $request->input());

       //   $id = 1;
          
            $reportData = new ReportModel;
            $getReportData = $reportData->getReportData($id);
            // echo "<pre>";print_r($getReportData[0]['report_data']);die;
            // echo "<pre>";print_r();die;
            $data['id'] = $id;
            $data['reportdata'] = json_decode($getReportData[0]['report_data'],true);
        
                // print_r($data);die;
          Excel::create('test', function($excel) use ($data) {
            
            // Set the title
            $excel->setTitle('Our new awesome title');

            // Chain the setters
            $excel->setCreator('Maatwebsite')
                  ->setCompany('Maatwebsite');

            // Call them separately
            $excel->setDescription('A demonstration to change the file properties');
            
            $excel->sheet('Sheetname', function($sheet) use ($data) {
            
               $data['reportdata']=$data['reportdata'];
                 $sheet->loadView('report')->with($data);
                 $sheet->setAllBorders('thin');
            });
        })->export('xlsx');
          Session::forget('reportdata');
    }


}
