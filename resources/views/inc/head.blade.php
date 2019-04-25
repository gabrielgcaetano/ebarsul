<header class="header">
    <div class="mobile-content">
        <div class="text-center">
            <img class="ml-45"
                 alt="EBA ALMOÇO - 2019 | 8 de junho de 2019 em Pelotas - RS | Moto Clube Bodes do Asfalto | "
                 src="{{ url('images/lgo/logo-ebalmoco-para-web.png') }}" style="width: 250px">
        </div>
    </div>
    <nav class="menu">
        <a class="toggle-menu">
            <img alt="Acessar menu" src="{{ url('images/ico/toggle-menu.png') }}">
        </a>
        <div class="menu-content">
            <ul class="menu-list">
                <h1 class="">
                    <a class="fade menu-logo logo-big"  href="{{ route('evento') }}" target="_self" data-aos="zoom-in"
                       data-aos-duration="1000">
                        <img alt="EBA ALMOÇO - 2019 | 8 de junho de 2019 em Pelotas - RS | Moto Clube Bodes do Asfalto | "
                             src="{{ url('images/lgo/logo-ebalmoco-para-web.png') }}" style="width: 250px">
                    </a>
                    <a class="fade menu-logo logo-small" href="{{ route('evento') }}" target="_self">
                        <img alt="EBA ALMOÇO - 2019 | 8 de junho de 2019 em Pelotas - RS | Moto Clube Bodes do Asfalto | "
                             src="{{ url('images/lgo/logo-ebalmoco-para-web.png') }}">
                    </a>
                </h1>
                <li class="menu-item" data-aos="fade-down">
                    <a href="{{ route('evento') }}" target="_self" class="menu-link is-active">O evento</a>
                </li>
                <li class="menu-item" data-aos="fade-down">
                    <a href="{{ route('inscricao') }}" target="_self" class="menu-link">Inscrição</a>
                </li>
                <li class="menu-item menu-third-item" data-aos="fade-down">
                    <a href="{{ route('cidade') }}" target="_self" class="menu-link">Princesa do Sul</a>
                </li>
                <li class="menu-item" data-aos="fade-down">
                    <a href="{{ route('programacao') }}" target="_self" class="menu-link">Programação</a>
                </li>
                <li class="menu-item" data-aos="fade-down">
                    <a href="{{ route('hospedagem') }}" target="_self" class="menu-link">Hospedagem</a>
                </li>
                <li class="menu-item" data-aos="fade-down">
                    <a href="{{ route('contato') }}" target="_self" class="menu-link">Contato</a>
                </li>
            </ul>
            <div class="text-center">
                <img class="img-inline-block px-5 text-center" style="width: 100px;margin-top: -100px" alt="Bandeira de Pelotas" src="{{ url('images/ico/flag-pelotas.png') }}">
            </div>
        </div>

    </nav>

</header>