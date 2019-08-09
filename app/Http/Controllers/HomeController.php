<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('menu.index');
    }

    public function downloadCv(){
        $file = public_path(). "/downloads/Cv_FityanAliMunshi.pdf";

        $headers = array(
                  'Content-Type: application/pdf',
                );
        return Response::download($file, 'Cv_FityanAliMunshi.pdf', $headers);
    }
    public function sendEmail(Request $request){
        $data = $request->all();
        $user = new \stdClass();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->subject = $data['subject'];  
        $user->pesan = $data['message'];  


        Mail::send('menu.partials.email-send', ['name' => $user->name, 'email' => $user->email, 'subject' => $user->subject, 'pesan' => $user->pesan ], function($mail) use ($user){
            $mail->from('_mainaccount@fityanali.site','Webtoor');
            $mail->to('fityanalishi@gmail.com', 'webtoor')->subject($user->subject);
        });

        return response()->json([
            "success" => "true",
        ]);
    }
}
