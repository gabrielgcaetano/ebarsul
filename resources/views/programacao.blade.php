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
<body>

@include('inc.head')

<main>
    <section class="section back-black color-white py-30">
        <div class="equal-height-grid">
            <div class="grid-34 offset-1">
                <h2 class="title-yellow">Programação</h2>
                <p>Confira a programação completa do <strong> EBA Almoço - 2022</strong>:</p>
                <h2 class="title-yellow mt-20">11 de Junho – Sábado</h2>
                <p><strong>10:00</strong> Estaremos aguardando por vocês no estacionamento do Centro Português 1° de
                    Dezembro, Via de Acesso a Praia do Laranjal, com café, chá, chimarrão,
                    salgadinhos e muito calor humano.</p>
                <p class="m-small"><strong>Clube Centro Português 1° Dezembro</strong></p>
                <p class="m-small">R. Cidade do Faro, 238</p>
                <p class="m-small">Bairro: Laranjal</p>
                <p class="m-small">Pelotas - RS</p>

                <h1><br></h1>
                <iframe class="img-center"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27138.34482091172!2d-52.32385101830171!3d-31.762490814100012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9511b3f6da20bf0b%3A0xe08ef60d293413c8!2sCentro+Portugu%C3%AAs+1+Dezembro!5e0!3m2!1spt-BR!2sbr!4v1556153351466!5m2!1spt-BR!2sbr"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <h1><br></h1>

                <p><strong>12:30</strong> Será servido o almoço no restaurante do centro Português, pelo maitre Paulinho.
                Buffet com feijoada.
                </p>
                <h1><br></h1>

                <p><strong>14:00</strong> Saíremos, em um bonde, com escolta dos agentes de trânsito da SMTT, até o
                    Centro de Eventos da Fenadoce, na BR 392. Para visitação a Feira Nacional do Doce, onde faremos a
                    foto oficial do evento.
                </p>

                <h1><br></h1>

                <a href="https://fenadoce.com.br/a-feira/" target="_blank"><img class="img-center"
                                                                                               style="width:600px;height:auto;"
                                                                                               src="{{ url('images/lgo/banner-fenadoce-2022.png') }}"></a>

                <h1><br></h1>

                <p><strong>20:30</strong> Para os Irmãos que permanecerem na cidade, jantar em local a ser definido.</p>


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

</body>
</html>
