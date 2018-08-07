<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model{
    
    public $timestamps = false;
    
    protected $table = 'users';


    public function getUserList($perPage){
        
        $result = Users::select('*')->where('role','user')->paginate($perPage);
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
    
    
}

