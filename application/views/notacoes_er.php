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
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projetando Banco de Dados
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="<?= site_url('oldb/notacoes_er')?>">Notações Entidade Relacionamento</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="#">Cenário para Entidade Relacionamento</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="#">Entidade Relacionamento para Tabelas</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="#">Dependências</a></li>
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
                                        <a href="#">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                        <a href="#">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Completo, Disjunto</a>
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
                            </span>  Minímo</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                        <a href="#">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Completo, Disjunto</a>
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
                                        <a href="#">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                        <a href="#">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Completo, Disjunto</a>
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
                                        <a href="#">Binário Não-Identificado 1-N</a>
                                    </td>
                                </tr>
                               <tr>
                                    <td>
                                        <a href="#">Binário Identificado 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário N-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Binário 1-1</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Unário 1-N</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Incompleto, Sobreposto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Completo, Disjunto</a>
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
                <h1>Notações Entidade Relacionamento</h1>
                Explore os varios conjuntos de notações para diagrama de entidades e relacionamentos
            </div>
        </div>
    </div>
            
            <div id="imagem">
                
            </div>
            
            <!-- Site footer -->
            <div class="footer">
                <h4>Desenvolvido por <a href="https://www.facebook.com/ygor.reis">Ygor Reis</a> e <a href="https://www.facebook.com/jonas.sousa.58">Jonas Sousa</a>.</h4>
            </div>

        </div> 
        <!-- /container -->


        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->


    </body>
</html>