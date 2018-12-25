<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Model\Users;
use App\Model\Service;
use App\Model\ServicePhoto;
use DB;
use Chumper\Zipper\Zipper;
use Illuminate\Support\Facades\Response;

class HistoryController extends Controller {
    
    public function history() {

        $perPage = 15;
      
        $data['css'] = array(
            'plugins/dataTables/datatables.min.css',
            'plugins/sweetalert/sweetalert.css',
        );
        
        $data['js'] = array(
            'plugins/dataTables/datatables.min.js',            
            'plugins/sweetalert/sweetalert.min.js',
            'services/history.js'
            
        );
        $data['funinit'] = array(
            'Histroy.init()',
        );
        return view('admin.pages.history', $data);
    }
}
