<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ReportModel extends Model
{
    protected $table = 'report_data';

    public function intData($postdata) {
        
        $reportObj = new ReportModel;

        $reportObj->reference_no = $postdata['reference_no'];
        $reportObj->report_date = $postdata['report_date'];
        $reportObj->report_to = $postdata['report_to'];
        $reportObj->registration_no = $postdata['registration_no'];
        $reportObj->registred_owner_name_add = $postdata['registred_owner_name_add'];
        $reportObj->report_data = json_encode($postdata);
        $reportObj->created_at = date("Y-m-d h:i:s");
        $reportObj->updated_at = date("Y-m-d h:i:s");
 
        return $reportObj->save();
    }

    public function getReportDatatable($request) {
        $requestData = $_REQUEST;

        $columns = array(
            // datatable column index  => database column name
            0 => 'id',
            1 => 'full_name',
            2 => 'city',
            3 => 'email',
            4 => 'refrence_no',
            5 => 'phone',
            6 => 'created_at',
        );

         $query = ReportModel::from('report_data');
        //->groupBy('services.id');
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($key == 3 && ($searchVal == 'Not Sent' || $searchVal == 'not sent')) {
                        $searchVal = 0;
                    } else if ($key == 3 && ($searchVal == 'sent' || $searchVal == 'Sent')) {
                        $searchVal = 1;
                    }

                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $flag = $flag + 1;
                            $query->where($value, 'like', '%' . $searchVal . '%');
                        } else {
//                                    $query->orWhere($value, 'like',"%$searchVal%");
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);
        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());
        $resultArr = $query->skip($requestData['start'])
                        ->take($requestData['length'])
                        ->select('id', 'reference_no', 'report_date', 'report_to', 'registration_no', 'registred_owner_name_add', 'created_at')
                        ->get()->toArray();
        $data = array();
//        print_r($resultArr);exit;
        $num=1;
        foreach ($resultArr as $row) {
            $nestedData = array();
            $nestedData[] = $num;
            $nestedData[] = $row['reference_no'];
            $nestedData[] = $row['report_date'];
            $nestedData[] = $row['report_to'];
            $nestedData[] = $row['registration_no'];
            $nestedData[] = $row['registred_owner_name_add'];
            $nestedData[] = date('d M, Y',strtotime($row['created_at']));
            $nestedData[] = '<a href="'. route("detailreport", ["id" => $row["id"]]) . '"> <i class="fa fa-eye" aria-hidden="true"></i></a><a href="' . route("editreport", ["id" => $row["id"]]) . '"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a class="delete" data_value="' . $row["id"] . '"> <i  class=" fa fa-trash-o" aria-hidden="true"></i></a>';
            $data[] = $nestedData;
            $num++;
        }

        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }

    public function getReportData($id) {
        
       return ReportModel::select('report_data')
                        ->where('id',$id)
                        ->get()->toArray();
	}

    public function editReportData($postdata,$id){
            $result = ReportModel::where('id', $id)->update([
                'full_name' => $postdata['fullname'],
                'city' => $postdata['city'],
                'email' => $postdata['email'],
                'refrence_no' => $postdata['reference_no'],
                'phone' => $postdata['phone_fax'],
                'report_data' => json_encode($postdata),
                'updated_at'=>date("Y-m-d h:i:s"),
            ]);
            return $result;
	}

    public function deleteReport($id){
		return ReportModel::where('id', $id)->delete();
	}
}
