<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model{
    
    public $timestamps = false;
    
    protected $table = 'users';


    public function getUserList($perPage){
                  
        $result = Users::select('*')->orderBy('id','DESC')->paginate($perPage);
        return $result;
        
    }
    
    public function getupdate($id){
        
        $result = Users::select('*')->where('id',$id)->first();
        return $result;
        
    }
    
    public function updateData($request, $id){
       
        $update_res = Users::where('id',$id)->update([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'email' => $request['email'],
            'username' => $request['username'],
            'mobile' => $request['mobile'],
        ]);
        return $update_res;
                
       
    }
    
    public function getUserId(){
        $result = Users::where('role_type','user')->get();
        return $result;
    }
    
    public function getDatatable($request) {
        $requestData = $_REQUEST;          
        $columns = array(           
            0 => 'users.id',
            1 => 'users.firstname',
            2 => 'users.lastname',
            3 => 'users.email',
            4 => 'users.username',
            5 => 'users.mobile',
            6 => 'users.role_type',
        );
        $query =Users::select('id','firstname','lastname','email','username','mobile','role_type');                
                
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
                                'users.id',
                                'users.firstname',
                                'users.lastname',
                                'users.email', 
                                'users.username',
                                'users.mobile', 
                                'users.role_type'                                                                           
                            )->get()->toArray();
                            
        $data = array();
         foreach ($resultArr as $row) {
            $actionHtml = '<a href="'. route("editservice",["id"=>$row["id"]]).'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a class="delete" href="'.route("deleteservice",["id"=>$row["id"]]) .'"><i class="fa fa-trash-o" aria-hidden="true"></i></a> ';
            $nestedData = array();
            $nestedData[] = $row['id'];
            $nestedData[] = $row['firstname'];
            $nestedData[] = $row['lastname'];
            $nestedData[] = $row['email'];
            $nestedData[] = $row['username'];
            $nestedData[] = $row['mobile'];
            $nestedData[] = $row['role_type'];   
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

