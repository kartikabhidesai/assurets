<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Config;

class Users extends Model{
    
    protected $table = 'users';


    public function getUserList($perPage){
        
        $result = Users::select('*')->where('role','user')->paginate($perPage);
        return $result;
        
    }
    
    public function getUpateData(){
        $upd_result = Users::update();
    }
    
}

