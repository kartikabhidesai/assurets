<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;


class MainController extends Controller {
    
    public function service(){
        
        return view('frontend.pages.service');
        
    }
    
    public function work(){
        
        return view('frontend.pages.work');
        
    }
    
    public function about(){
        
        return view('frontend.pages.about');
        
    }
    
    public function blog(){
        
        return view('frontend.pages.blog');
        
    }
    
    public function contact(){
        
        return view('frontend.pages.contact');
        
    }
    
}
