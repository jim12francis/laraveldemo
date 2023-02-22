<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from users';
    }
    
    public function show($id){
        $data=array(
        "id"=>$id,
        "name"=>"Jim Francis Duyag",
        "age"=>20,
        "email"=>"jim12francis@gmail.com"
         );
         return view('user', $data);

 
    }
}
