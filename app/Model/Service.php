<?php

namespace App\Model;

use App\Model\ServicePhoto;
use Illuminate\Database\Eloquent\Model;
use DB;

class Service extends Model {

    protected $table = 'services';

    public function insertService($request) {

        $serviceObj = new Service;

        $serviceObj->service_no = $request->input('service_no');
        $serviceObj->vehicle_no = $request->input('vehicle_no');
        $serviceObj->owner_name = $request->input('owner_name');
        $serviceObj->owner_mobile = $request->input('owner_mobile');
        $serviceObj->location = $request->input('location');
        $serviceObj->insurer = $request->input('insurer');
        $serviceObj->address = $request->input('address');
        $serviceObj->user_id = $request->input('user_id');

        $serviceObj->save();
    }

    public function saveService($request) {

        $id = $request->input('service_id');

        $result = Service::where('id', $id)->update([
//            'licence_no'=>$request['licence_no'],
            'engine_no' => $request['engine_no'],
            'chession_no' => $request['chession_no'],
//            'rc_book_no'=>$request['rc_book_no'],
        ]);
        return $request;
    }

    public function inreportService($request) {

        $id = $request->input('service_id');

        $result = Service::where('id', $id)->update([
            'status' => 'inreport',
        ]);
        return $request;
    }

    public function getServices($perPage) {

        $result = Service::join('users', 'users.id', '=', 'services.user_id')
                ->select('services.*', 'users.firstname', 'users.lastname')
                ->orderBy('id', 'DESC')
                ->paginate($perPage);
        return $result;
    }

    public function deleteService($id) {

        return Service::where('id', $id)->delete();
    }

    public function editService($request, $id) {

        $result = Service::where('id', $id)->update([
            'vehicle_no' => $request['vehicle_no'],
            'owner_name' => $request['owner_name'],
            'owner_mobile' => $request['owner_mobile'],
            'location' => $request['location'],
            'insurer' => $request['insurer'],
            'address' => $request['address']
        ]);
        return $request;
    }

    public function getServiceData($id) {
        return Service::where('id', $id)->first();
    }
    
    public function getVihicleNo($id) {
        return Service::select('vehicle_no')
                ->where('id', $id)->get();
    }
    
    public function getUserService($id) {
        return Service::where('user_id', $id)->where('status', 'inprocess')->get()->toArray();
    }

    public function uploadServicePic($request) {
        $destinationPath = public_path() . '/servicephoto/';

        $file1 = $request->file('servicephoto');

        $file_name1 = '';
        $file_name2 = '';
        if (!empty($file1)) {
            $time = time();
            $file_name1 = $time . '-' . $file1->getClientOriginalName();
            $file1->move($destinationPath, $file_name1);
            $publicPath = $destinationPath . $file_name1;
            $this->addtimestamp($publicPath,$file_name1);
        }
        $serviceId = $request->input('service_id');
        $objUser = new ServicePhoto;
        $objUser->service_id = $serviceId;
        $objUser->name = $file_name1;
        $objUser->save();
        return TRUE;
    }

    public function addtimestamp($publicPath,$file_name1) {
        $image = $publicPath;

        /*
         * set the watermark font size
         * possible values 1,2,3,4, and 5
         * where 5 is the biggest
         */
        $fontSize = 5;

        //set the watermark text
        $text = date('Y-m-d H:i:s');

        /*
         * position the watermark
         * 10 pixels from the left
         * and 10 pixels from the top
         */
        $xPosition = 10;
        $yPosition = 10;

        //create a new image
        $newImg = @imagecreatefromjpeg($image);

        //set the watermark font color to red
        $fontColor = @imagecolorallocate($newImg, 255, 0, 0);

        //write the watermark on the created image
        @imagestring($newImg, $fontSize, $xPosition, $yPosition, $text, $fontColor);

        //output the new image with a watermark to a file
        @imagejpeg($newImg,$publicPath,100);
        /*
         * PNG file appeared to have
         * a better quality than the JPG
         */
        //@imagepng($newImg,$publicPath);

        /*
         * destroy the image to free
         * any memory associated with it
         */
        @imagedestroy($newImg);
    }

    public function getDatatable($request) {
        $requestData = $_REQUEST;

        $columns = array(
            // datatable column index  => database column name
            0 => 'services.id',
            1 => 'services.service_no',
            2 => 'services.vehicle_no',
            3 => 'services.owner_name',
            4 => 'services.owner_mobile',
            5 => 'services.location',
            6 => 'services.insurer',
            7 => 'services.address',
            8 => 'users.firstname',
        );

        $query = Service::leftjoin('users', 'services.user_id', '=', 'users.id');
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
                        ->select(
                                'services.id', 'services.service_no', 'services.vehicle_no', 'services.owner_name', 'services.owner_mobile', 'services.location', 'services.insurer', 'services.address', 'users.firstname'
                        )->get()->toArray();
        $data = array();
//        print_r($resultArr);exit;
        foreach ($resultArr as $row) {
            $actionHtml = '<a href="' . route("editservice", ["id" => $row["id"]]) . '"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a class="delete" data_value="' . $row["id"] . '"> <i  class=" fa fa-trash-o" aria-hidden="true"></i></a><a href="'. route("detailservice", ["id" => $row["id"]]) . '"> <i class="fa fa-eye" aria-hidden="true"></i></a>';
//            print_r($row);exit;
            $nestedData = array();
            $nestedData[] = $row['id'];
            $nestedData[] = $row['service_no'];
            $nestedData[] = $row['vehicle_no'];
            $nestedData[] = $row['owner_name'];
            $nestedData[] = $row['owner_mobile'];
            $nestedData[] = $row['location'];
            $nestedData[] = $row['insurer'];
            $nestedData[] = $row['address'];
            $nestedData[] = $row['firstname'];
            $nestedData[] = $actionHtml;
            $data[] = $nestedData;
        }

        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }

}
