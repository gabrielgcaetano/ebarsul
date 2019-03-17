<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>V EBAR SUL - 2018 | 16 a 18 de novembro de 2018 em União da Vitória - PR</title>
    <meta name="description"
          content="V EBAR SUL - 2018 | 16 a 18 de novembro de 2018 em União da Vitória - PR | Moto Clube Bodes do Asfalto | Sub-Sede - Contestado PR/SC">
    <link href="{{ url('css/fonts.googleapis.com/csse38d.css?family=Oswald:300,400,500,600,700')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/global.min.css') }}" media="screen">
    <script src="{{ url('scripts/dist/modernizr.js')}}"></script>

    <!-- Favicon and touch icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('images/fav/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('images/fav/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('images/fav/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('images/fav/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('images/fav/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('images/fav/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('images/fav/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('images/fav/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/fav/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('images/fav/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/fav/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('images/fav/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/fav/favicon-16x16.png')}}">
</head>
<body onLoad="atualizaContador()">

@include('inc.head')

<main>
    <section class="section back-black color-white py-30">
        <div class="equal-height-grid-top">
            <div class="grid-34" data-aos="fade-right" data-aos-offset="300">
                <h1 style="font-size: 40px" id="contador" align="center"></h1>
            </div>
        </div>
        <div id="formulario-senha" class="equal-height-grid-top">
            <div class="grid-34 offset-1" data-aos="fade-up" data-aos-offset="300">
                <h2 class="title-yellow mt-50">Lista de inscritos</h2>
                <h4 class="mt-20">Sois Maçom?</h4>
                <input id="senha" class="input-box" type="password" name="senha">
                <p class="small"><strong>Obs.:</strong> Responder somente a primeira letra de cada palavra da frase,
                    tudo minúsculo, sem espaço e sem ponto. Exemplo: "gadu".</p>
                <div class="feedback">
                    <p>Resposta incorreta. A resposta deve ser preenchida com a primeira letra de cada cada palavra
                        da frase, tudo minúsculo, sem espaço e sem ponto.</p>
                </div>
                <a onclick="onClickFormulario()" class="btn btn-yellow mt-20">
                    Entrar
                </a>
            </div>
        </div>
        <div id="formulario-menu" class="equal-height-grid-top" style="display: none">
            <div class="grid-34 offset-1">
                <a onclick="onClickFormularioInscricao()" class="btn btn-yellow mt-20">
                    Inscrever
                </a>
                <br>
                <a onclick="onClickListaInscritos()" class="btn btn-yellow mt-20">
                    Lista de Inscritos
                </a>
            </div>
        </div>
        <div id="formulario-cadastro" class="equal-height-grid-top" style="display: none">
            <div class="grid-34 offset-1" data-aos="fade-up" data-aos-offset="300">
                <h2 class="title-yellow mt-50">Lista de inscritos</h2>
                <form action="{{route("inscricao-enviar")}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h4 class="mt-20">Nome Completo</h4>
                    <input class="input-box" type="text" name="nome" required>
                    <h4 class="mt-20">Email</h4>
                    <input class="input-box" type="email" name="email" required>
                    <h4 class="mt-20">CPF</h4>
                    <input class="input-box" type="text" minlength="11" maxlength="11" id="documento" name="documento"
                           onfocusout="onLostFocusDocumento()" required>
                    <h4 class="mt-20">Telefone</h4>
                    <input class="input-box phone" type="phone" name="telefone" required
                           data-msg-required="Este campo é obrigatório." required>
                    <h4 class="mt-20">Cidade - Estado</h4>
                    <input class="input-box" type="text" name="cidade" required>
                    <h4 class="mt-20">Tipo</h4>
                    <select id="tipo" name="tipo" required>
                        <option value="irmao">Irmão</option>
                        <option value="cunhada">Cunhada</option>
                    </select>
                    <h4 class="mt-20">Anexo Comprovante de deposito.</h4>
                    <input type="file" name="arquivo" id="arquivo" required accept="image/*, application/pdf"><br>
                    <button type="submit" class="btn btn-yellow mt-20">
                        Inscrever-se
                    </button>
                </form>
            </div>
        </div>
        <div id="lista-inscritos" class="equal-height-grid-top" style="display: none">
            <div class="grid-34 offset-1">
                <table style="width:100%">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Cidade</th>
                        <th>Telefone</th>
                        <th>Tipo</th>
                        <th>Status</th>
                    </tr>
                    @forelse($inscritos as $inscrito)
                        <tr>
                            <td><p style="margin-left: 30px;">{{ $inscrito->nome }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->email }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->documento }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->cidade }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->telefone }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->tipo }}</p></td>
                            <td>
                                @if( $inscrito->status  == 1)
                                    <p style="margin-left: 30px;">PENDENTE</p>
                                @elseif( $inscrito->status == 2)
                                    <p style="margin-left: 30px;">APROVADO</p>
                                @else
                                    <p style="margin-left: 30px;">CANCELADO</p>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <h1>Nenhum Inscrito!</h1>
                    @endforelse
                </table>
            </div>
        </div>
    </section>
    <section class="section back-white color-black py-30">
        <div class="grid-34 offset-1" data-aos="fade-up" data-aos-offset="300">
            <h2 class="title-yellow">Apoio</h2>
            <img class="img-inline-block mx-20 img-ptr-00"
                 src="{{ url('images/lgo/prefeitura-de-uniao-da-vitoria.png') }}"
                 alt="Prefeitura de União da Vitória">
        </div>
        <div class="grid-34 offset-1" data-aos="fade-up" data-aos-offset="300">
            <h2 class="title-yellow mt-50">Patrocínio</h2>
            <img class="img-inline-block mx-20 img-ptr-01" src="{{ url('images/lgo/breyer.png') }}"
                 alt="Breyer naturais e orgânicos">
            <img class="img-inline-block mx-20 img-ptr-02" src="{{ url('images/lgo/steinhaeger.png') }}"
                 alt="Steinhaeger Doble W">
            <img class="img-inline-block mx-20 img-ptr-03" src="{{ url('images/lgo/laboratorio-galileu.png') }}"
                 alt="Laboratório Galileu">
            <img class="img-inline-block mx-20 img-ptr-04" src="{{ url('images/lgo/in-brasil.png') }}" alt="In Brasil">
            <img class="img-inline-block mx-20 img-ptr-05" src="{{ url('images/lgo/capimar.png') }}"
                 alt="Ervateira Capimar">
            <img class="img-inline-block mx-20 img-ptr-05" src="{{ url('images/lgo/bwm-seguros.png') }}"
                 alt="BWM Seguros">
            <img class="img-inline-block mx-20 img-ptr-05"
                 src="{{ url('images/lgo/desigual-corretora-de-seguros.png') }}"
                 alt="Desigual Corretora de Seguros">
        </div>
    </section>
    <section class="section back-white color-black py-5">
    </section>
    <section class="section back-black color-white py-30">
        <div class="grid-34 offset-1 text-center">
            <img class="img-center"
                 alt="V EBAR SUL - 2018 | 16 a 18 de novembro de 2018 em União da Vitória - PR | Moto Clube Bodes do Asfalto | Sub-Sede - Contestado PR/SC"
                 src="{{ url('images/lgo/v-ebar-sul-small.png') }}" data-aos="zoom-in">
            <div data-aos="fade-up">
                <p class="big mt-20">V EBAR SUL - 2018</p>
                <p class="big mb-10">16 a 18 de novembro</p>
                <p>Sub-Sede - Contestado PR/SC <span class="triangle-right">Moto Clube Bodes do Asfalto</span></p>
            </div>
        </div>
    </section>
</main>

@include('inc.footer')

<script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('js/counter.min.js') }}"></script>
<script src="{{ url('js/global.min.js') }}"></script>
<script>
    function onClickFormulario() {
        var senha = document.getElementById("senha").value;
        if (senha.toUpperCase() == "MICTMR") {
            document.getElementById("formulario-senha").style.display = 'none';
            document.getElementById("lista-inscritos").style.display = 'none';
            document.getElementById("formulario-cadastro").style.display = 'none';
            document.getElementById("formulario-menu").style.display = 'block';
        }
    }

    function onClickFormularioInscricao() {
        var senha = document.getElementById("senha").value;
        if (senha.toUpperCase() == "MICTMR") {
            document.getElementById("formulario-senha").style.display = 'none';
            document.getElementById("formulario-menu").style.display = 'none';
            document.getElementById("lista-inscritos").style.display = 'none';
            document.getElementById("formulario-cadastro").style.display = 'block';
        }
    }

    function onClickListaInscritos() {
        document.getElementById("formulario-senha").style.display = 'none';
        document.getElementById("formulario-menu").style.display = 'none';
        document.getElementById("formulario-cadastro").style.display = 'none';
        document.getElementById("lista-inscritos").style.display = 'block';
    }

    function onLostFocusDocumento() {
        documento = document.getElementById("documento");
        var size = documento.value.length;
        if (size < 11) {
            documento.value = '';
        }
    }

    var YY = 2019;
    var MM = 12;
    var DD = 1;
    var HH = 9;
    var MI = 0;
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
        }
        else {
            document.getElementById('contador').innerHTML = 'Evento Começou!!!!';
            setTimeout(atualizaContador, 1000);
        }
    }
</script>
</body>
</html>
