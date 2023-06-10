
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="{{ route('consultor.desempenho') }}">
        @csrf
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td height="80" colspan="3" valign="top"><img src="img/topo_internas.png" width="100%" height="80"></td>
                </tr>
                <tr>
                    <td noWrap width="10"><IMG src="inc/spacer.gif" width="10"></td>
                    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td height="20" bgcolor="#fafafa"><div align="right"><strong>Período:</strong></div></td>
                                <td bgcolor="#fafafa"><div align="left">
                                    <select name="ano_inicio">
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007" selected>2007</option>
                                    </select>
                                    a
                                    <select name="ano_fim">
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007" selected>2007</option>
                                    </select>
                                </div></td>
                                <td width="20%" rowspan="2"><div align="center"><font color="black">
                                    <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_relatorio.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Relatório" name="btSalvar22" />
                                    <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_grafico.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Gráfico" name="btSalvar222" />
                                    <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_pizza.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Pizza" name="btSalvar222" />
                                </font></div></td>
                            </tr>
                            <tr bgcolor="#fafafa">
                                <td nowrap="nowrap" bgcolor="#efefef"><div align="right"><strong>Consultores</strong></div></td>
                                <td>
                                    <table align="center">
                                        <tr>
                                            <td>
                                                <select multiple size="8" name="consultores[]" id="consultores" style="width:280">
                                                    <option value="aline.chastel">Aline Chastel Lima</option>
                                                    <option value="anapaula.chiodaro">Ana Paula Fontes Martins Chiodaro</option>
                                                    <option value="bruno.freitas">Bruno Sousa Freitas</option>
                                                    <option value="contato">Carlos Cezar Girão de Arruda</option>
                                                    <option value="carlos.arruda">Carlos Flávio Girão de Arruda</option>
                                                    <option value="carlos.carvalho">Carlos Henrique deCarvalho</option>
                                                    <option value="eduardo.costa">Eduardo Costa</option>
                                                    <option value="fabiano.lima">Fabiano de Oliveira Lima</option>
                                                    <option value="fernando.alves">Fernando Alves</option>
                                                    <option value="fernando.ferraz">Fernando Ferraz</option>
                                                    <option value="flavia.pereira">Flávia Pereira</option>
                                                    <option value="gabriel.santos">Gabriel Santos</option>
                                                    <option value="gabriela.torres">Gabriela Torres</option>
                                                    <option value="jose.gomes">José Gomes</option>
                                                    <option value="juliana.albuquerque">Juliana Albuquerque</option>
                                                    <option value="lucas.souza">Lucas Souza</option>
                                                    <option value="luciano.silva">Luciano Silva</option>
                                                    <option value="marcio.ferreira">Márcio Ferreira</option>
                                                    <option value="maria.silva">Maria Aparecida Silva</option>
                                                    <option value="mauricio.santos">Maurício Santos</option>
                                                    <option value="paulo.silva">Paulo Silva</option>
                                                    <option value="pedro.santos">Pedro Santos</option>
                                                    <option value="rafael.souza">Rafael Souza</option>
                                                    <option value="renata.rodrigues">Renata Rodrigues</option>
                                                    <option value="roberto.alves">Roberto Alves</option>
                                                    <option value="rodrigo.souza">Rodrigo Souza</option>
                                                    <option value="simone.rodrigues">Simone Rodrigues</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table></td>
                    <td noWrap width="10"><IMG src="inc/spacer.gif" width="10"></td>
                </tr>
            </tbody>
        </table>
    </form>

</body>
</html>


