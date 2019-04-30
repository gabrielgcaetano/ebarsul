<table align="center" border="0" cellpadding="0" cellspacing="0" style="width:600px; background-color:#334A6C">
    <tbody>
    <tr>
        <td style="padding-top: 80px">
            <table align="center" border="0" cellpadding="0" cellspacing="0"
                   style="width:472px; background-color:#EAEEED">
                <tbody>
                <tr>
                    <td style="padding-top: 30px;" align="center">
                        <img src="{{ url('images/lgo/logo-ebalmoco-para-web.png') }}" alt="" border="0"
                             style="display: block; width: 150px">
                    </td>
                </tr>
                <tr>
                    <td style="font-family: Georgia ; font-weight: bold; font-size: 24px; color: #334A6C; text-align: center; padding-top: 40px; letter-spacing: 2px;">
                        Nova inscrição no <br>EBAlmoço
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 20px">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:380px;">
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    Nome: {{ $dados['nome'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    Email: {{ $dados['email'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    Documento: {{ $dados['documento'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    Telefone: {{ $dados['telefone'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    Cidade: {{ $dados['cidade'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    Tipo: {{ $dados['tipo'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    Comprovante em anexo.
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    <a href="{{route('confirmar', ['id' => $dados['id']])}}" target="_parent"><button>Confirmar</button></a>
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td style="font-family: verdana; font-size: 13px; color: #334A6C;text-align: center;letter-spacing: 1px;">
                                    <a href="{{route('rejeitar', ['id' => $dados['id']])}}" target="_parent"><button>Rejeitar</button></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td style="width: 600px; padding-top: 40px">
                        <img src="{{ url('images/lgo/banner.png') }}" alt="" border="0"
                             style="display: block;">
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 40px; width: 472px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:472px;">
                <tbody>
                <tr>
                    <td style="width: 342px; font-family: verdana; font-size: 11px; color: #ffffff; padding-left: 10px">
                        <a href="mailto:seuemail@aqui.com" style="text-decoration: none;color: #ffffff"></a><br>
                        <a href="tel:(00) 0000-0000" style="text-decoration: none;color: #ffffff"></a>
                    </td>
                    <td style="width: 40px;">
                        <img src="http://emailmarketingtemplates.com.br/templates/datas-comemorativas/dia-dos-pais-6/Dia-dos-pais-6.3.png"
                             alt="" border="0" style="display: block;">
                    </td>
                    <td style="width: 40px;">
                        <img src="http://emailmarketingtemplates.com.br/templates/datas-comemorativas/dia-dos-pais-6/Dia-dos-pais-6.4.png"
                             alt="" border="0" style="display: block;">
                    </td>
                    <td style="width: 50px;" align="center">
                        <img src="http://emailmarketingtemplates.com.br/templates/datas-comemorativas/dia-dos-pais-6/Dia-dos-pais-6.5.png"
                             alt="" border="0" style="display: block;">
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 30px;width: 472px">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:472px;">
                <tr>
                    <td style="width: 472px">
                        <hr style="background-color: #ffffff;" color="#ffffff">
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="width: 411px; font-family: verdana; font-size: 11px; color: #ffffff; text-align: center; padding-top:15px; padding-bottom: 80px">
            <a href="www.mcbdapelotas.com.br" style="text-decoration: none;color: #ffffff">www.mcbdapelotas.com.br</a>

        </td>
    </tr>
    </tbody>
</table>