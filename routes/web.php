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
$this->get('incricao', 'Admin\InscricaoController@index')->name('incricao');

$this->post('incricao-enviar', 'Admin\InscricaoController@inscrever')->name('incricao-enviar');

$this->post('incricao-download-comprovante', 'Admin\InscricaoController@download')->name('incricao-download-comprovante');
/*
 * Responsável pela rota da cidade
 */
$this->get('cidade', 'Admin\CidadeController@index')->name('cidade');

/*
 * Responsável pela rota da programação do evento
 */
$this->get('programacao', 'Admin\ProgramacaoController@index')->name('programacao');

/*
 *  Responsável pela rota de contato com os adm do site
 */
$this->get('contato', 'Admin\ContatoController@index')->name('contato');

/*
 *  Responsável pela rota de hospedagem com os adm do site
 */
$this->get('hospedagem', 'Admin\HospedagemController@index')->name('hospedagem');


/*
 *  Envio de Email
 */
$this->post('envio-email', 'Admin\ContatoController@enviaEmail')->name('envio-email');

