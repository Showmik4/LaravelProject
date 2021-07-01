<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
   
    public function shop(){
        
       return view('visual');
        //echo "Hi";
        
    }
    public function shophome(){
        
        return view('Shophome');
       // echo "Hi";
        
    }

    public function author(){
        
        return view('Author');
      // echo "Hi";
        
    }

    public function product(){
        
        return view('Singleproduct');
       
        
    }

    public function owner(){
        
      //  return view('ShopOwner');
       
       echo "Hi"; 
    }

}
