<?php

namespace App\Http\Controllers\Admin;

use App\Mail\SendMailInscrito;
use App\Mail\SendMailOrganizacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Inscrito;
use Illuminate\Support\Facades\Mail;

class InscricaoController extends Controller
{
    /*
     *   Carrega a tela de inscrição passando todos inscritos do banco
     */
    public function index(Inscrito $inscrito)
    {
        $inscritos = $inscrito::all()->where("status", "2");
        $inscricaoFeita = false;
        return view('inscricao', compact('inscritos', 'inscricaoFeita'));
    }

    /*
     *   Save do formulario de inscricao
     */
    public function inscrever(Request $request, Inscrito $inscrito)
    {
        $dataForm = $request->all();
        $retorno = $inscrito->salvar($dataForm);
        return redirect()->route('inscricao-enviar-email-inscrito');
    }

    /*
     *   Responsavel pelo download
     */
    public function download(Request $request)
    {
        $filename = $request['nome'];
        return response()->download(storage_path("app/comprovantes/" . $filename));
//        return view('inscricao');

    }

    /*
     *   Responsável pelo email enviado para o inscrito
     */
    public function enviaEmailInscrito(Inscrito $inscrito)
    {
        $ins = Inscrito::orderBy('id', 'desc')->first();
        Mail::to($ins['email'])
            ->send(new SendMailInscrito($ins));

        return redirect()->route('inscricao-enviar-email-organizacao');
    }

    /*
     *   Responsável pelo email enviado para o organizador
     */
    public function enviaEmailOrganizacao(Inscrito $inscrito)
    {
        $ins = Inscrito::orderBy('id', 'desc')->first();
        Mail::to("gabriel.goulartcaetano@gmail.com")
            ->send(new SendMailOrganizacao($ins));

        $inscritos = $inscrito::all();
        $inscricaoFeita = true;
        $param = true;
        return view('inscricao', compact('inscritos', 'inscricaoFeita', 'param'));
    }

    /*
     *   Responsável por confirmar a inscrição
     */
    public function confirmar(int $id, Inscrito $inscrito)
    {
        $retorno = $inscrito::confirmar($id);
        $inscritos = $inscrito::all();
        $param = true;
        $inscricaoFeita = false;
        return view('inscritos', compact('inscritos', 'param', 'inscricaoFeita'));
    }

    /*
     *   Responsável por rejeitar a inscrição
     */
    public function rejeitar(int $id, Inscrito $inscrito)
    {
        $retorno = $inscrito::rejeitar($id);
        $inscritos = $inscrito::all();
        $param = true;
        $inscricaoFeita = false;
        return view('inscritos', compact('inscritos', 'param', 'inscricaoFeita'));
    }

    /*
     *   Responsável pela tela de inscritos adm
     */
    public function inscritos(Inscrito $inscrito)
    {
        $inscritos = $inscrito::all()->sortBy('status');
        $param = false;
        $inscricaoFeita = false;
        return view('inscritos', compact('inscritos', 'param', 'inscricaoFeita'));
    }

    public function listaInscritosBaixar(Inscrito $inscrito)
    {
        $inscritos = $inscrito::all()->sortBy('status');
        return view('formulario-impressao-inscritos', compact('inscritos'));
    }
}
