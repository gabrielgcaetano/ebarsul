<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>EBA ALMOÇO - 2019 | 8 de junho de 2019 em Pelotas - RS</title>
    <meta name="description"
          content="EBA ALMOÇO - 2019 | 8 de junho de 2019 em Pelotas - RS | Moto Clube Bodes do Asfalto | Sub-Sede - Contestado PR/SC">
    <link href="{{ url('css/fonts.googleapis.com/csse38d.css?family=Oswald:300,400,500,600,700')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/global.min.css') }}" media="screen">
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
<body onLoad="atualizaContador()">

@include('inc.head')

<main>
    <section class="section back-black color-white py-30">
        <div class="equal-height-grid-top">
            <div class="grid-34">
                <h1 style="font-size: 40px" id="contador" align="center"></h1>
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

                    <h4 class="mt-20">Camisetas</h4>
                    <select id="camiseta" name="camiseta" required>
                        <option value="M-P">Masc. P</option>
                        <option value="M-M">Masc. M</option>
                        <option value="M-G">Masc. G</option>
                        <option value="M-GG">Masc. GG</option>
                        <option value="M-XGG">Masc. XGG</option>
                        <option value="M-XXGG">Masc. XXGG</option>
                        <option value="M-XXXGG">Masc. XXXGG</option>
                        <option value="F-P">Fem. P</option>
                        <option value="F-M">Fem. M</option>
                        <option value="F-G">Fem. G</option>
                        <option value="F-GG">Fem. GG</option>
                        <option value="F-XGG">Fem. XGG</option>
                        <option value="F-XXGG">Fem. XXGG</option>
                        <option value="F-XXXGG">Fem. XXXGG</option>
                    </select>
                    <!-- Trigger/Open The Modal -->
                    <h1><br></h1>
                    <button id="myBtn" class="btn btn-yellow btn-sm">Ver tamanhos</button>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <!-- Modal content -->
                        <div class="modal-content">
                            <img class="img-inline-block mx-20 img-ptr-02" style="width: 45%" src="{{ url('images/fto/camiseta-masculina.png') }}"
                                 alt="Zuchelo - Incorporaçoes e Construções - Institucional">
                            <img class="img-inline-block mx-20 img-ptr-02" style="width: 45%" src="{{ url('images/fto/camiseta-feminina.png') }}"
                                 alt="Zuchelo - Incorporaçoes e Construções - Institucional">
                        </div>

                    </div>
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
                        {{--<th>Email</th>--}}
                        {{--<th>CPF</th>--}}
                        <th>Cidade</th>
                        {{--<th>Telefone</th>--}}
                        <th>Tipo</th>
                        {{--<th>Status</th>--}}
                    </tr>
                    @forelse($inscritos as $inscrito)
                        <tr>
                            <td><p style="margin-left: 30px;">{{ $inscrito->nome }}</p></td>
                            {{--<td><p style="margin-left: 30px;">{{ $inscrito->email }}</p></td>--}}
                            {{--<td><p style="margin-left: 30px;">{{ $inscrito->documento }}</p></td>--}}
                            <td><p style="margin-left: 30px;">{{ $inscrito->cidade }}</p></td>
                            {{--<td><p style="margin-left: 30px;">{{ $inscrito->telefone }}</p></td>--}}
                            <td><p style="margin-left: 30px;">{{ $inscrito->tipo }}</p></td>
                            {{--<td>--}}
                            {{--@if( $inscrito->status  == 1)--}}
                            {{--<p style="margin-left: 30px;">PENDENTE</p>--}}
                            {{--@elseif( $inscrito->status == 2)--}}
                            {{--<p style="margin-left: 30px;">APROVADO</p>--}}
                            {{--@else--}}
                            {{--<p style="margin-left: 30px;">CANCELADO</p>--}}
                            {{--@endif--}}
                            {{--</td>--}}
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
