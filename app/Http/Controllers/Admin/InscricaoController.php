<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InscricaoController extends Controller
{
    public function index()
    {
        return view('inscricao');
    }

    public function inscrever(Request $request)
    {
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));

        // Recupera a extensão do arquivo
        $extension = $request->arquivo->extension();

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        // Faz o upload:
        $upload = $request->arquivo->storeAs('comprovantes', $nameFile);
        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

        dd($upload);
    }

    public function download(Request $request){
        $filename = $request['nome'];
        return response()->download(storage_path("app/comprovantes/" . $filename));
//        return view('inscricao');

    }
}
