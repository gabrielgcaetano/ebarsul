<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>EBA ALMOÇO - 2022 | 11 de junho de 2022 em Pelotas - RS</title>
    <meta name="description"
          content="EBA ALMOÇO - 2022 | 11 de junho de 2022 em Pelotas - RS | Moto Clube Bodes do Asfalto | ">
    <link href="{{ url('css/fonts.googleapis.com/csse38d.css?family=Oswald:300,400,500,600,700')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/global_01.min.css') }}" media="screen">
    <script src="{{ url('scripts/dist/modernizr.js')}}"></script>
    <script src="{{ url('js/logica.js')}}"></script>

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
    <style type="text/css">
        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
            align: center;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body onLoad="atualizaContador(); inscricaoPronta({{$inscricaoFeita}});bloqueiaCamiseta();bloqueiaInscricao();">

@include('inc.head')

<main>
    <section class="section back-black color-white py-30">
        <div class="equal-height-grid-top">
            <div class="grid-34">
                <h2 style="font-size: 40px" id="contador" align="center"></h2>
            </div>
        </div>
        <br><br>
        <div class="equal-height-grid mt-50 bt-white pt-50" id="inscricao-pronta" style="display: none">
            <div class="grid-10 offset-1 text-align-mobile text-center">
                <h3 class="color-yellow mt-20-mobile">Inscrição concluída com sucesso!</h3>
            </div>
        </div>
        <br><br>
        <div id="formulario-senha" class="equal-height-grid-top">
            <div class="grid-34 offset-1">
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
                <div id="divInscricao">
                    <a onclick="onClickFormularioInscricao()" class="btn btn-yellow mt-20">
                        Inscrever
                    </a>
                </div>
                <div id="divEventoEncerrado" style="display: none;">
                    <h2 class="color-yellow mt-20-mobile">Inscrições Encerradas!</h2>
                </div>
                <br>
                <a onclick="onClickListaInscritos()" class="btn btn-yellow mt-20">
                    Lista de Inscritos
                </a>
                <div class="equal-height-grid mt-50 bt-white pt-50">
                    <div class="grid-10 offset-1 text-align-mobile">
                        <h3 class="color-yellow mt-20-mobile">Inscrições</h3>
                        <p class="m-small">Limite inscrição até 07/06 ou quando alcançar o número máximo de participantes (130), o que acontecer primeiro</p>
                        <br>
                        <p class="m-small color-yellow">Custo por participante</p>
                        <p class="m-small">R$ 65,00</p>
                        <p class="m-small">Todo Inscrito tem direito ao almoço</p>
                        <p class="m-small">- Buffet pratos quentes e saladas</p>
                        <p class="m-small">- Bebida cobrada a parte</p>
                        <br>
                        <p class="m-small">Cada participante terá direito ao ingresso da Fenadoce</p>
                    </div>
                </div>
                <div class="equal-height-grid mt-50 bt-white pt-50">
                    <div class="grid-10 offset-1 text-align-mobile">
                        <h1>
                            <br>
                            Dados para depósito do valor da inscrição
                        </h1>

                        <h3 class="color-yellow mt-20-mobile">NuBank</h3>
                        <p class="m-small">Valor da inscrição: R$ 65,00</p>
                        <p class="m-small">Banco  260 NuBank</p>
                        <p class="m-small">Agência 0001</p>
                        <p class="m-small">Conta 8110674-6</p>
                        <p class="m-small">CPF 255.482.710-91</p>
                        <p class="m-small">Nome Rui César Maia de Araújo</p>
                        <p class="m-small">Chave PIX Telefone: 53981118088</p>
                        <br><br>
                        <a href="https://nubank.com.br/pagar/tactd/Yt6r1t89dp" target="_blank">
                            <img class="img-center aos-init aos-animate" style="width: 300px" alt="QR CODE PIX" src="{{ url('images/lgo/QRCODE-PIX-2022.png') }}">
                        </a>
                    </div>
                </div>
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
                    <h4 class="mt-20">Facção</h4>
                    <input class="input-box" type="text" name="faccao">
                    <h4 class="mt-20">Tipo</h4>
                    <select id="tipo" name="tipo" required>
                        <option value="irmao">Irmão</option>
                        <option value="convidado">Convidado</option>
                    </select>
                    <h4 class="mt-20">Cunhada</h4><span>Se estiver solo, Deixe em Branco</span>
                    <input class="input-box" type="text" name="cunhada">
                    <!-- Trigger/Open The Modal -->
                    <h1><br></h1>
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
                        <th>Cidade</th>
                        <th>Tipo</th>
                        <th>Facção</th>
                        <th>Cunhada</th>
                    </tr>
                    @forelse($inscritos as $inscrito)
                        <tr>
                            <td><p style="margin-left: 30px;">{{ $inscrito->nome }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->cidade }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->tipo }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->faccao }}</p></td>
                            <td><p style="margin-left: 30px;">{{ $inscrito->cunhada }}</p></td>
                        </tr>
                    @empty
                        <h1>Nenhum Inscrito!</h1>
                    @endforelse
                </table>
            </div>
        </div>
    </section>

    @include('inc.patrocinador')

    @include('inc.subFooter')

</main>

@include('inc.footer')

<script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('js/counter.min.js') }}"></script>
<script src="{{ url('js/global.min.js') }}"></script>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
