<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Inscrito extends Model
{
    public function salvar(array $data): Array
    {
        DB::beginTransaction();

        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));

        // Recupera a extensão do arquivo
        $extension = $data['arquivo']->extension();

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        // Faz o upload:
        $upload = $data['arquivo']->storeAs('comprovantes', $nameFile);
        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

        if (!$upload) {
            DB::rollback();
            return [
                'success' => false,
                'message' => 'Falha ao Salvar'
            ];
        }

        $this->nome = isset($data['nome']) ? $data['nome'] : "";
        $this->email = isset($data['email']) ? $data['email'] : "";
        $this->documento = isset($data['documento']) ? $data['documento'] : "";
        $this->telefone = isset($data['telefone']) ? $data['telefone'] : "";
        $this->cidade = isset($data['cidade']) ? $data['cidade'] : "";
        $this->tipo = isset($data['tipo']) ? $data['tipo'] : "";
        $this->camiseta = isset($data['camiseta']) ? $data['camiseta'] : "";
        $this->faccao = isset($data['faccao']) ? $data['faccao'] : "";
        $this->cunhada = isset($data['cunhada']) ? $data['cunhada'] : "";
        $this->camisetaCunhada = isset($data['camisetaCunhada']) ? $data['camisetaCunhada'] : "";
        $this->arquivo = isset($nameFile) ? $nameFile : "";
        $this->status = 1;
        $inscrito = $this->save();
        if ($inscrito) {
            DB::commit();
            $tmp = Inscrito::orderBy('id', 'desc')->first();
            return [
                'success' => true,
                'message' => 'Salvo',
                'id' => $tmp->id
            ];
        } else {
            DB::rollback();
            return [
                'success' => false,
                'message' => 'Falha ao Salvar'
            ];
        }
    }

    static function confirmar(int $id){
        DB::beginTransaction();
        $inscrito = Inscrito::find($id);
        $inscrito->status = 2;
        $retorno = $inscrito->save();
        if ($retorno) {
            DB::commit();
            $tmp = Inscrito::orderBy('id', 'desc')->first();
            return [
                'success' => true,
                'message' => 'Salvo',
                'id' => $tmp->id
            ];
        } else {
            DB::rollback();
            return [
                'success' => false,
                'message' => 'Falha ao Salvar'
            ];
        }
    }

    static function rejeitar(int $id){
        DB::beginTransaction();
        $inscrito = Inscrito::find($id);
        $inscrito->status = 3;
        $retorno = $inscrito->save();
        if ($retorno) {
            DB::commit();
            $tmp = Inscrito::orderBy('id', 'desc')->first();
            return [
                'success' => true,
                'message' => 'Salvo',
                'id' => $tmp->id
            ];
        } else {
            DB::rollback();
            return [
                'success' => false,
                'message' => 'Falha ao Salvar'
            ];
        }
    }

    function apagar(int $id)
    {
        DB::beginTransaction();
        $inscrito = Inscrito::find($id);
        $retorno = $inscrito->delete();
        if ($retorno) {
            DB::commit();
        } else {
            DB::rollback();
        }
    }

}
