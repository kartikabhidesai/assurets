<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ServicePhoto extends Model {

    protected $table = 'service_photo';

    public function getServicePhotoData($id){
        return ServicePhoto::where('service_id',$id)->get()->toArray();
    }
}
