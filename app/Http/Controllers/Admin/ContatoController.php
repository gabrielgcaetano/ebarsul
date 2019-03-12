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
        return view('contato');
    }

    public function enviaEmail(Request $request){
        Mail::to('gabriel.goulartcaetano@gmail.com')
            ->send(new SendMailUser($request->all()));
        echo 'Enviado com Sucesso!';
    }
}
