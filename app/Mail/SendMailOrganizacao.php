<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailOrganizacao extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $dados = $this->dados;
        /*return $this->from('teste@spacecodegc.com.br', 'Atendimento - EBAR')
            ->to('araujo.ruicesar@gmail.com')
            ->subject("Cadastro de Membro Evento")
            ->attach(storage_path("app/comprovantes/" . $dados['arquivo']))
            ->view('emails.organizacao', compact('dados'));
        */
        return $this->from('teste@spacecodegc.com.br', 'Atendimento - EBAlmoço')
            ->to('araujo.ruicesar@gmail.com')
            ->subject("Cadastro de Membro Evento")
            ->attach(storage_path("app/comprovantes/" . $dados['arquivo']))
            ->view('emails.organizacao', compact('dados'));
    }
}
