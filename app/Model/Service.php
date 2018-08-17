<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Service extends Model {

    protected $table = 'services';

    public function insertService($request) {

        $serviceObj = new Service;

        $serviceObj->service_no = $request->input('service_no');
        $serviceObj->user_id = $request->input('user_id');
        $serviceObj->vehicle_no = $request->input('vehicle_no');
        $serviceObj->address = $request->input('address');

        $serviceObj->save();
    }

    public function getServices($perPage) {

        $result = Service::select('*')->paginate($perPage);
        return $result;
    }

    public function deleteService($id) {

        return Service::where('id', $id)->delete();
    }

    public function editService($request,$id) {
        
        $result = Service::where('id',$id)->update([
            'service_no'=>$request['service_no'],
            'user_id'=>$request['user_id'],
            'vehicle_no'=>$request['vehicle_no'],
            'address'=>$request['address']
        ]);
        return $request;
        
    }
    
    public function getServiceData($id){
        return Service::where('id',$id)->first();
    }

}
