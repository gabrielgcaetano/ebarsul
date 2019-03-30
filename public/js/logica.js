/*
    Libera a area do usuário
 */
function onClickFormulario() {
    var senha = document.getElementById("senha").value;
    if (senha.toUpperCase() == "MICTMR") {
        document.getElementById("formulario-senha").style.display = 'none';
        document.getElementById("lista-inscritos").style.display = 'none';
        document.getElementById("formulario-cadastro").style.display = 'none';
        document.getElementById("formulario-menu").style.display = 'block';
    }
}

/*
    Habilita o formulário de inscrição
 */
function onClickFormularioInscricao() {
    var senha = document.getElementById("senha").value;
    if (senha.toUpperCase() == "MICTMR") {
        document.getElementById("formulario-senha").style.display = 'none';
        document.getElementById("formulario-menu").style.display = 'none';
        document.getElementById("lista-inscritos").style.display = 'none';
        document.getElementById("formulario-cadastro").style.display = 'block';
    }
}

/*
    Ativa a visualização da lista de inscritos
 */
function onClickListaInscritos() {
    document.getElementById("formulario-senha").style.display = 'none';
    document.getElementById("formulario-menu").style.display = 'none';
    document.getElementById("formulario-cadastro").style.display = 'none';
    document.getElementById("lista-inscritos").style.display = 'block';
}

/*
    Quando perde o foco o campo do documento ele limpa o mesmo.
 */
function onLostFocusDocumento() {
    documento = document.getElementById("documento");
    var size = documento.value.length;
    if (size < 11) {
        documento.value = '';
    }
}

/*
    Atualiza o contador da data do evento
 */
var YY = 2019;
var MM = 3;
var DD = 29;
var HH = 22;
var MI = 11;
var SS = 0;

function atualizaContador() {
    var hoje = new Date();
    var futuro = new Date(YY, MM - 1, DD, HH, MI, SS);
    var ss = parseInt((futuro - hoje) / 1000);
    var mm = parseInt(ss / 60);
    var hh = parseInt(mm / 60);
    var dd = parseInt(hh / 24);
    ss = ss - (mm * 60);
    mm = mm - (hh * 60);
    hh = hh - (dd * 24);
    var faltam = 'Faltam ';
    faltam += (dd && dd > 1) ? dd + ' dias, ' : (dd == 1 ? '1 dia, ' : '');
    faltam += (toString(hh).length) ? hh + ' hr, ' : '';
    faltam += (toString(mm).length) ? mm + ' min e ' : '';
    faltam += ss + ' seg';

    if (dd + hh + mm + ss > 0) {
        document.getElementById('contador').innerHTML = faltam;
        setTimeout(atualizaContador, 1000);
    } else {
        document.getElementById('contador').innerHTML = 'Evento Começou!!!!';
        setTimeout(atualizaContador, 1000);
    }
}

/*
    Libera a área administrativa
 */
function autenticacaoAreaAdministrativa(acesso) {
    if (acesso) {
        document.getElementById("formulario-senha").style.display = 'none';
        document.getElementById("lista-inscritos").style.display = 'block';
    }
}

/*
    Mensagem de envio de email do Contato
 */
function enviadoEmail(enviado) {
    if (enviado) {
        document.getElementById("mensagem-envio-email").style.display = 'block';
    } else {
        document.getElementById("mensagem-envio-email").style.display = 'none';
    }
}

/*
    Libera a área do administrador.
 */
function onClickFormularioOrganizacao() {
    var senha = document.getElementById("senha").value;
    if (senha.toUpperCase() == "MICTMR") {
        document.getElementById("formulario-senha").style.display = 'none';
        document.getElementById("lista-inscritos").style.display = 'block';
    }
}