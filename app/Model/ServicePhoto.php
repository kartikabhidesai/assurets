<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ServicePhoto extends Model {

    protected $table = 'service_photo';

    public function getServicePhotoData($id){
        return ServicePhoto::where('service_id',$id)->get()->toArray();
    }
    
    
    public function deleteimages($request){
        $imagesid=$request->input('imagesid');
        for($i=0;$i<count($imagesid);$i++){
           $image= ServicePhoto::select('name')
                ->where('id', $imagesid[$i])->get()->toarray();
          
            $file=  base_path().'/public/servicephoto/'.$image['0']['name'];
            if (file_exists($file)) {
               unlink($file);  
            }
            ServicePhoto::where('id', $imagesid[$i])->delete();
          
        }
        return TRUE;
    }
    
    public function addimages($request){
        $serviseid=$request->input('serviceid');
       
        
        $destinationPath = public_path() . '/servicephoto/';
        $file1 = $request->file('filename');

        $file_name1 = '';
        
        if (!empty($file1)) {
            $time = time();
            $file_name1 = $time .'-'. $file1->getClientOriginalName();
            $file1->move($destinationPath, $file_name1);
            $servicephoto = new ServicePhoto;

            $servicephoto->service_id = $serviseid;
            $servicephoto->name = $file_name1;
                if($servicephoto->save()){
                    return true;
                }
            
        }
       
    }
}
