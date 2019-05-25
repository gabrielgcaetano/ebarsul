<?php

/*
 * Responsável pela Rota da página principal
 */
Route::get('/', function () {
    return view('home');
});

/*
 *  Responsável pela rota dados do evento
 */
$this->get('evento', 'Admin\EventoController@index')->name('evento');

/*
 *  Responsável pela rota de inscrição
 */
$this->get('inscricao', 'Admin\InscricaoController@index')->name('inscricao');
/*
 *  Responsável pela rota de salvar dados do formulário de inscrição.
 */
$this->post('inscricao-enviar', 'Admin\InscricaoController@inscrever')->name('inscricao-enviar');
/*
 *   Responsável por enviar email ao inscrito.
 */
$this->get('inscricao-enviar-email-inscrito', 'Admin\InscricaoController@enviaEmailInscrito')->name('inscricao-enviar-email-inscrito');
/*
 *   Responsável por enviar email a organização.
 */
$this->get('inscricao-enviar-email-organizacao', 'Admin\InscricaoController@enviaEmailOrganizacao')->name('inscricao-enviar-email-organizacao');

/*
 *   Responsável por baixar lista de inscritos.
 */
$this->get('inscricao-baixar', 'Admin\InscricaoController@listaInscritosBaixar')->name('inscricao-baixar');
$this->get('inscricao-baixar-simples', 'Admin\InscricaoController@listaInscritosBaixarSimples')->name('inscricao-baixar-simples');

/*
 *  Responsável por confirmar a inscrição de um inscrito.
 */
$this->get('confirmar/{id}', 'Admin\InscricaoController@confirmar')->name('confirmar');
/*
 *   Responsável por rejeitar a inscrição de um inscrito.
 */
$this->get('rejeitar/{id}', 'Admin\InscricaoController@rejeitar')->name('rejeitar');
/*
 *  Responsável por fazer download do comprovante de inscrição.
 */
$this->post('inscricao-download-comprovante', 'Admin\InscricaoController@download')->name('inscricao-download-comprovante');
/*
 * Responsável pela rota da cidade.
 */
$this->get('cidade', 'Admin\CidadeController@index')->name('cidade');

/*
 * Responsável pela rota da programação do evento.
 */
$this->get('programacao', 'Admin\ProgramacaoController@index')->name('programacao');

/*
 *  Responsável pela rota de contato com os adm do site.
 */
$this->get('contato', 'Admin\ContatoController@index')->name('contato');

/*
 *  Responsável pela rota de hospedagem com os adm do site.
 */
$this->get('hospedagem', 'Admin\HospedagemController@index')->name('hospedagem');
/*
 *  Envio de Email de contato.
 */
$this->post('envio-email', 'Admin\ContatoController@enviaEmail')->name('envio-email');

/*
 *   Responsável pela listagem de inscritos da área administrativa
 */
$this->get('inscritos', 'Admin\InscricaoController@inscritos')->name('inscritos');

/*
 *   Responsável por excluir a inscrição de um inscrito.
 */
$this->get('apagar/{id}', 'Admin\InscricaoController@apagar')->name('apagar');
/*
 *   Responsável por avisar que o registro está duplicado.
 */
$this->get('inscricao-duplicada', 'Admin\InscricaoController@duplicado')->name('inscricao-duplicada');
