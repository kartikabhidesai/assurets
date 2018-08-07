<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Validator;
use App\Model\Users;
use DB;

class LoginController extends Controller {

    public function __construct() {
        
    }

    public function register(Request $request) {

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
                return redirect('register')
                                ->withErrors($validator)
                                ->withInput();
            }

            $firstname = $request['firstname'];
            $lastname = $request['lastname'];
            $email = $request['email'];
            $username = $request['username'];
            $password = Hash::make($request['password']);
            $mobile = $request['mobile'];

            DB::table('users')->Insert([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'mobile' => $mobile,
                'role' => 'user',
            ]);
            return redirect('login');
        }

        return view('admin.pages.register');
    }

    public function login(Request $request) {

        if ($request->isMethod('post')) {

            $validator = validator::make($request->all(), [
                        'username' => 'required|min:5',
                        'password' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect('login')
                                ->withErrors($validator)
                                ->withInput();
            }

            $username = $request['username'];
            $password = $request['password'];

            if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password, 'role' => 'admin'])) {
                return view('admin.pages.dashboard');
            } else if (Auth::guard('users')->attempt(['username' => $username, 'password' => $password, 'role' => 'user'])) {
                return view('frontend.pages.home');
            } else {
                return redirect()->back()->with('message', 'Unauthorized user');
            }
        }

        return view('admin.pages.login');
    }

    public function dashboard() {
        view('admin.pages.dashboard');
    }

    public function userlist() {
        $perPage = 1;
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
                return redirect('edituserform/'.$id)
                                ->withErrors($validator)
                                ->withInput();
            }

            $id = $request['id'];
            $firstname = $request['firstname'];
            $lastname = $request['lastname'];
            $email = $request['email'];
            $username = $request['username'];
            $mobile = $request['mobile'];

            $updateInputs = new Users;

            $getUpadateData = $updateInputs->updateData($request,$id);
            
            $data['getUpdateData'] = $getUpadateData;
           
            return redirect()->back()->with('message', 'Data Updated successfully');
        }

        $updateUsers = new Users;

        $getupdateData = $updateUsers->getupdate($id);

        $data['getupdateData'] = $getupdateData;
        
        return view('admin.pages.edituserform', $data);
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
                return redirect('register')
                                ->withErrors($validator)
                                ->withInput();
            }

            $firstname = $request['firstname'];
            $lastname = $request['lastname'];
            $email = $request['email'];
            $username = $request['username'];
            $mobile = $request['mobile'];

            DB::table('users')->Insert([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'username' => $username,
                'mobile' => $mobile,
                'role' => 'user',
            ]);
            return redirect('login');
        }

        return view('admin.pages.userform');
    }

}
