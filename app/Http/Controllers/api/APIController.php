<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Validator;
use App\Model\Users;
use App\Model\Service;
use DB;

class APIController extends Controller {

    public function __construct() {
        
    }

   

    public function login(Request $request) {

        if ($request->isMethod('post')) {

            $validator = validator::make($request->all(), [
                        'username' => 'required|min:5',
                        'password' => 'required'
            ]);
            if ($validator->fails()) {
                $result['status'] = 'fail';
                $result['message'] = 'Username and password is required.';
                $result['data'] = array();
                echo json_encode($result);
                exit;
            }

            $username = $request['username'];
            $password = $request['password'];

            if (Auth::guard('users')->attempt(['username' => $username, 'password' => $password, 'role_type' => 'user'])) {
                $result['status'] = 'success';
                $result['message'] = 'Login Successfully.';
                $result['data'] = Auth()->guard('users')->user();
                echo json_encode($result);
                exit;
            } else {
                $result['status'] = 'fail';
                $result['message'] = 'Login not Successfully.';
                $result['data'] = array();
                echo json_encode($result);
                exit;
            }
        }

       
    }

    public function getUserService(Request $request) {
        
        $validator = validator::make($request->all(), [
                        'userid' => 'required',
            ]);
            if ($validator->fails()) {
                $result['status'] = 'fail';
                $result['message'] = 'Userid is required.';
                $result['data'] = array();
                echo json_encode($result);
                exit;
            }
        $userId = $request['userid'];   
        $serviceObj = new Service;
        $insertService = $serviceObj->getUserService($userId);
       
        if(!empty($insertService)){
            $result['status'] = 'success';
            $result['message'] = 'Data found successfully.';
            $result['data'] = $insertService;
        }else{
            $result['status'] = 'success';
            $result['message'] = 'Data not found.';
            $result['data'] = array();
        }
        
        echo json_encode($result);
        exit;
    }
    
    public function companydashboard(){
        return view('company.pages.company-dashboard');
    }

    public function userlist() {
        $perPage = 15;
        $userlist = new Users;
        $getUserlistdata = $userlist->getUserList($perPage);
        $data['getUserlistdata'] = $getUserlistdata;
//        print_r($getUserlistdata);exit;
        return view('admin.pages.userlist', $data);
    }

    public function delete(Request $request) {

        $id = $request['id'];

        DB::table('users')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'User Deleted successfully');
    }

    public function edituser(Request $request, $id) {

        if ($request->isMethod('post')) {

            $validator = validator::make($request->all(), [
                        'firstname' => 'required',
                        'lastname' => 'required',
                        'email' => 'required|email',
                        'username' => 'required|min:5',
                        'mobile' => 'required|min:10',
            ]);
            if ($validator->fails()) {
                return redirect('edituserform/' . $id)
                                ->withErrors($validator)
                                ->withInput();
            }

            $id = $request['id'];
            $firstname = $request['firstname'];
            $lastname = $request['lastname'];
            $email = $request['email'];
            $username = $request['username'];
            $mobile = $request['mobile'];
            $role_type = $request['role_type'];

            $updateInputs = new Users;

            $getUpadateData = $updateInputs->updateData($request, $id);

            $data['getUpdateData'] = $getUpadateData;

            return redirect()->back()->with('message', 'Data Updated successfully');
        }

        $updateUsers = new Users;

        $getupdateData = $updateUsers->getupdate($id);

        $data['getupdateData'] = $getupdateData;

        return view('admin.pages.edituser', $data);
    }

    public function userform(Request $request) {

        if ($request->isMethod('post')) {

            $validator = validator::make($request->all(), [
                        'firstname' => 'required',
                        'lastname' => 'required',
                        'email' => 'required|email',
                        'username' => 'required|min:5',
                        'password' => 'required',
                        'mobile' => 'required|min:10',
            ]);
            if ($validator->fails()) {
                return redirect('userform')
                                ->withErrors($validator)
                                ->withInput();
            }

            $firstname = $request['firstname'];
            $lastname = $request['lastname'];
            $email = $request['email'];
            $username = $request['username'];
            $password = Hash::make($request['password']);
            $mobile = $request['mobile'];
            $role_type = $request['role_type'];

            DB::table('users')->Insert([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'mobile' => $mobile,
                'role_type' => $role_type,
            ]);
            return redirect()->back()->with('message', 'User Inserted Successfully');
        }

        return view('admin.pages.userform');
    }

}
