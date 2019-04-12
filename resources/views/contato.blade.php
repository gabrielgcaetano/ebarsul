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
</head>
<body onload="enviadoEmail({{$param}})">

@include('inc.head')

<main>
    <section class="section back-black color-white py-30">
        <div align="center" id="mensagem-envio-email">
            <h1 style="font-size: 30px">Contato feito com sucesso</h1>
            <h5 style="font-size: 25px">Em breve você recebera o contato da equipe.</h5>
        </div>
        <div class="grid-34 offset-1" data-aos="fade-left">
                        <h2 class="title-yellow">Contato</h2>
            <p>Fale conosco utilizando o formulário de contato abaixo:</p>
        </div>
        <form class="form-contact" method="POST" action="{{ route('envio-email' )}}">
            <div class="equal-height-grid-top" data-aos="fade-left">
                {!! csrf_field() !!}
                <div class="grid-16 offset-1" data-aos="fade-right">
                    <p>*Nome:</p>
                    <input class="input-box" type="text" name="nome" required data-msg-required="Este campo é obrigatório.">
                    <p class="mt-20">*E-mail:</p>
                    <input class="input-box" type="email" name="email" required data-msg-required="Este campo é obrigatório.">
                    <input class="input-hide" type="email" name="email-ebar-hide">
                    <p class="mt-20">*Telefone:</p>
                    <input class="input-box phone" type="phone" name="telefone" required data-msg-required="Este campo é obrigatório.">
                </div>
                <div class="grid-16 offset-2" data-aos="fade-right">
                    <div class="textarea-content">
                        <p>Mensagem*:</p>
                        <textarea class="textarea-box" name="message" required data-msg-required="Este campo é obrigatório."></textarea>
                    </div>
                    <div class="text-right mt-20">
                        <button type="submit" class="btn btn-form btn-yellow">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
            <span class="sucess-msg"></span>
        </form>
    </section>

    @include('inc.patrocinador')

    @include('inc.subFooter')

</main>

@include('inc.footer')

<script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('js/counter.min.js') }}"></script>
<script src="{{ url('js/global.min.js') }}"></script>

</body>
</html>
