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
                
        $result = Service::where('id',$id)->update([
//            'licence_no'=>$request['licence_no'],
            'engine_no'=>$request['engine_no'],
            'chession_no'=>$request['chession_no'],
//            'rc_book_no'=>$request['rc_book_no'],
       ]);
        return $request;
    }

    public function getServices($perPage) {

        $result = Service::join('users','users.id','=','services.user_id')
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

    public function uploadServicePic($request)
    {
        $destinationPath = public_path() . '/servicephoto/';

        $file1 = $request->file('servicephoto');
       
        $file_name1 = '';
        $file_name2 = '';
        if (!empty($file1)) {
            $time = time();
            $file_name1 = $time .'-'. $file1->getClientOriginalName();
            $file1->move($destinationPath, $file_name1);
        }
        $serviceId = $request->input('service_id');
        $objUser = new ServicePhoto;
        $objUser->service_id  = $serviceId;
        $objUser->name = $file_name1;
        $objUser->save();
        return TRUE;
    }
}
