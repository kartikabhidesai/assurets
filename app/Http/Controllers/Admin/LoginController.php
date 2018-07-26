<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Validator;
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
                'role'=>'user',
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

            if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])) {
                return redirect('dashboard');
            } else if (Auth::guard('user')->attempt(['username' => $username, 'password' => $password])) {
                return redirect('home');
            } else {
                return redirect()->back()->with('message', 'Unauthorized user');
            }
        }

        return view('admin.pages.login');
    }

}
