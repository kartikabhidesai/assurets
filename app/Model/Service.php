<?php

namespace App\Model;

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

    public function getServices($perPage) {

        $result = Service::join('users','users.id','=','services.id')
                           -> select('services.*','users.firstname','users.lastname')
                           ->orderBy('id','DESC')
                           ->paginate($perPage);
        return $result;
    }

    public function deleteService($id) {

        return Service::where('id', $id)->delete();
    }

    public function editService($request,$id) {
        
        $result = Service::where('id',$id)->update([
            'vehicle_no'=>$request['vehicle_no'],
            'owner_name'=>$request['owner_name'],
            'owner_mobile'=>$request['owner_mobile'],
            'location'=>$request['location'],
            'insurer'=>$request['insurer'],
            'address'=>$request['address']
        ]);
        return $request;
        
    }
    
    public function getServiceData($id){
        return Service::where('id',$id)->first();
    }
    public function getUserService($id){
        return Service::where('user_id',$id)->where('status','inprocess')->get()->toArray();
    }

}
