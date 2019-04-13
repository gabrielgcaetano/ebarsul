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
            border: 1px solid black;
            border-collapse: collapse;
            align: center;
        }
    </style>
</head>
<body>

<main>
    <section class="section py-30">
        <div id="lista-inscritos" class="equal-height-grid-top">
            <div class="grid-34 offset-1">
                <table style="width:100%">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Cidade</th>
                        <th>Telefone</th>
                        <th>Tipo</th>
                        <th>Camiseta</th>
                        <th>Status</th>
                    </tr>
                    @forelse($inscritos as $inscrito)
                        <tr>
                            <td><p style="margin-left: 5%;">{{ $inscrito->nome }}</p></td>
                            <td><p style="margin-left: 5%;">{{ $inscrito->email }}</p></td>
                            <td><p style="text-align: center;">{{ $inscrito->documento }}</p></td>
                            <td><p style="text-align: center;">{{ $inscrito->cidade }}</p></td>
                            <td><p style="text-align: center;">{{ $inscrito->telefone }}</p></td>
                            <td><p style="text-align: center;">{{ $inscrito->tipo }}</p></td>
                            <td><p style="text-align: center;">{{ $inscrito->camiseta }}</p></td>
                            <td >
                                @if( $inscrito->status  == 1)
                                    <p style="text-align: center;">PENDENTE</p>
                                @elseif( $inscrito->status == 2)
                                    <p style="text-align: center;">APROVADO</p>
                                @else
                                    <p style="text-align: center;">CANCELADO</p>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <h1>Nenhum Inscrito!</h1>
                    @endforelse
                </table>
                <br>
                <br>
                <br>
                <form>
                    <input type="button" value="Imprimir" onClick="window.print()"/>
                </form>
            </div>
        </div>
    </section>
</main>

@include('inc.footer')

<script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('js/counter.min.js') }}"></script>
<script src="{{ url('js/global.min.js') }}"></script>
</body>
</html>
