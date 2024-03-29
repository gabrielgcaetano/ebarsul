<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailInscrito extends Mailable
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
        return $this->from('teste@spacecodegc.com.br', 'Atendimento - EBAlmoço')
            ->to($dados['email'])
            ->subject("Inscrição Recebida")
            ->view('emails.inscricao', compact('dados'));
    }
}
