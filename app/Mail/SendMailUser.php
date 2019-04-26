<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PhpParser\Node\Expr\Array_;

class SendMailUser extends Mailable
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
        return $this->from('teste@spacecode.tech', 'Atendimento')
            ->to('araujo.ruicesar@gmail.com')
            ->cc('maurograziadei@hotmail.com')
            ->cc('henriquecavalaria@yahoo.com.br')
            ->cc('sandro.sigtech@gmail.com')
            ->subject("Envio de Contato")
            ->view('emails.test', compact('dados'));
    }
}
