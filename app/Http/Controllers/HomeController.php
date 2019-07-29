<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('menu.index');
    }
    public function sendEmail(Request $request){
        $data = "berhasil";
        return response()->json([
            "success" => "true"
        ]);
    }
}
