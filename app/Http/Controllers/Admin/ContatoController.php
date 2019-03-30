<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendMailUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index()
    {
        $param = false;
        return view('contato', compact('param'));
    }

    public function enviaEmail(Request $request){
        Mail::to('gabriel.goulartcaetano@gmail.com')
            ->send(new SendMailUser($request->all()));
        $param = true;
        return view('contato', compact('param'));
    }
}
