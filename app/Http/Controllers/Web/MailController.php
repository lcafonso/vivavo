<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;

class MailController extends Controller
{
    public function send(Request $request) {

    	dd($request->all())

    	Mail::send(['text' => 'web.mail'],['name','Vivavo'], function($message) {
    		$message->to('lcafonso@gmail.com', 'To lcafonso')->subject('Confirmação para o evento:');
    		$message->from('vivavo@ipb.pt','Vivavo');
    	});

    	return back()->with('info', 'Foi enviado um email de confirmação!');
    }
}
