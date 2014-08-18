<?php $this->load->helper('url'); ?>
<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Plataforma para aprendizagem interativa de Banco de Dados">
        <meta name="author" content="Ygor Reis | Jonas Sousa">
 
        <title>OLDB | Open Learning DataBase</title>
 
       
       
        <link href="../css/bootstrap.min.css" rel="stylesheet">
 
        <link href="../css/justified-nav.css" rel="stylesheet">
 
    </head>
    <body>
        <div class="container">
 
            <div class="masthead">
                <div class="navbar-collapse collapse">
                    <ul class="nav nav-justified">
                        <li role="presentation"><a href="<?= site_url('oldb')?>">HOME</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projetando Banco de Dados
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="<?= site_url('oldb/notacoes_er')?>">Notações Entidade Relacionamento</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="<?= site_url('oldb/cenarios_er')?>">Cenário para Entidade Relacionamento</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="#">Entidade Relacionamento para Tabelas</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="<?= site_url('oldb/dependencias_er')?>">Dependências</a></li>
                            </ul>
                        </li>
                        <li role="presentation"><a href="#">SQL</a></li>
                        <li role="presentation"><a href="#">INFO</a></li>
                    </ul>
                </div>
 
            </div>
 
 
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Máximo</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="" class="max_1">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                        <a href="" class="max_2">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <a href="" class="max_3">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <a href="" class="max_4">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <a href="" class="max_5">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <a href="" class="max_6">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                         <a href="" class="max_7">Completo, Disjunto</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Minímo, Máximo</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="" class="min_1">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                       <a href="" class="min_2">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="min_3">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="min_4">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="min_5">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="min_6">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="min_7">Completo, Disjunto</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Pé de Galinha</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                               <tr>
                                    <td>
                                        <a href="" class="pga_1">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                       <a href="" class="pga_2">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="pga_3">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="pga_4">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="pga_5">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="pga_6">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="pga_7">Completo, Disjunto</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Classe UML</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="" class="uml_1">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                       <a href="" class="uml_2">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="uml_3">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="uml_4">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="uml_5">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="uml_6">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="" class="uml_7">Completo, Disjunto</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well" id="apresentacao">
                <div id="texto"><h1>Notações Entidade Relacionamento</h1>
                    ALGUMAS INFORMAÇÕES IMPORTANTES:<br><br>
                    <ul>
                        <li>TODO DIAGRAMA DE ENTIDADE RELACIONAMENTO CONSISTE EM VÁRIOS COMPONENTES: ENTIDADES, ATRIBUTOS, IDENTIFICADORES E RELAÇÕES.</li>
                        <li>É POSSÍVEL QUE ESSES COMPONENTES USEM UM DE MUITOS MÉTODOS DO DIAGRAMA DE ENTIDADE RELACIONAMENTO.</li>
                        <li>EMBORA NÃO HAJA UM MÉTODO DE DIAGRAMAÇÃO DE ER ACEITÁVEL, MUITOS DOS SÍMBOLOS PERMANECEM CONSISTENTES.</li>
                        <li>O PRIMEIRO DE TODOS, AS CLASSES SÃO DENOTADAS POR RETÂNGULOS.</li>
                        <li>LINHAS SÃO TRAÇOS ENTRE AS CLASSES PARA LIGAR DUAS OU MAIS CLASSES. FREQUENTEMENTE UM TRIÂNGULO PODERÁ SER DESENHADO PARA INFORMAR COMO AS CLASSES SE RELACIONAM.</li>
                        <li>FINALIZANDO,  DIAGRAMAS DE ENTIDADE RELACIONAMENTO USAM OUTROS SÍMBOLOS PARA MOSTRAR A CARDINALIDADE. ESTES SÍMBOLOS DIFICILMENTE SÃO CONSISTENTES, ENTRETANTO, ELES PODEM SER NÚMEROS, LETRAS OU, MAIS COMUMENTE, PÉS DE GALINHA.</li>
                    </ul>
                </div>
                <img id="imagem_n" src="">
            </div>
        </div>
    </div>
           
            <!-- Site footer -->
            <div class="footer">
                <h4>Desenvolvido por <a href="https://www.facebook.com/ygor.reis">Ygor Reis</a> e <a href="https://www.facebook.com/jonas.sousa.58">Jonas Sousa</a>.</h4>
            </div>
 
        </div>
        <!-- /container -->
 
 
        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/javascript_menu.js"></script>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
 
 
    </body>
</html>