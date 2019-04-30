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

function atualizaContador() {
    var YY = 2019;
    var MM = 6;
    var DD = 8;
    var HH = 10;
    var MI = 0;
    var SS = 0;

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

function bloqueiaCamiseta() {
    var aYY = 2019;
    var aMM = 5;
    var aDD = 20;
    var aHH = 23;
    var aMI = 59;
    var aSS = 59;

    var ahoje = new Date();
    var afuturo = new Date(aYY, aMM - 1, aDD, aHH, aMI, aSS);
    var ass = parseInt((afuturo - ahoje) / 1000);
    var amm = parseInt(ass / 60);
    var ahh = parseInt(amm / 60);
    var add = parseInt(ahh / 24);
    ass = ass - (amm * 60);
    amm = amm - (ahh * 60);
    ahh = ahh - (add * 24);

    if (add + ahh + amm + ass > 0) {
        document.getElementById("divCamiseta").style.display = 'block';
        document.getElementById("divCamisetaCunhada").style.display = 'block';
    } else {
        document.getElementById("divCamiseta").style.display = 'none';
        document.getElementById("divCamisetaCunhada").style.display = 'none';
    }
}

function bloqueiaInscricao() {
    var aYY = 2019;
    var aMM = 6;
    var aDD = 5;
    var aHH = 23;
    var aMI = 59;
    var aSS = 59;

    var ahoje = new Date();
    var afuturo = new Date(aYY, aMM - 1, aDD, aHH, aMI, aSS);
    var ass = parseInt((afuturo - ahoje) / 1000);
    var amm = parseInt(ass / 60);
    var ahh = parseInt(amm / 60);
    var add = parseInt(ahh / 24);
    ass = ass - (amm * 60);
    amm = amm - (ahh * 60);
    ahh = ahh - (add * 24);

    if (add + ahh + amm + ass > 0) {
        document.getElementById("divInscricao").style.display = 'block';
        document.getElementById("divEventoEncerrado").style.display = 'none';
    } else {
        document.getElementById("divInscricao").style.display = 'none';
        document.getElementById("divEventoEncerrado").style.display = 'block';
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
    if (senha.toUpperCase() == "ACACIA33") {
        document.getElementById("formulario-senha").style.display = 'none';
        document.getElementById("lista-inscritos").style.display = 'block';
    }
}

function inscricaoPronta(bol) {
    if(bol){
        document.getElementById('inscricao-pronta').style.display = 'block';
    }
}