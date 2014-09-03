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
                                <li role="presentation"><a href="<?= site_url('oldb/er_tabelas')?>">Entidade Relacionamento para Tabelas</a></li>
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
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="empregado"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Empregado</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="automoveis"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Automóveis</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="medico"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Médico</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="revendedora"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Revendedora de Carros</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="prescricao"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Prescrição de Remédios</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="pedido"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Pedidos</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="telefone"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Telefones</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="fornecedor"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Fornecedores</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="universidade"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Universidade</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well" id="apresentacao">
                <h1 id="tituloc">Cenários Entidade Relacionamento</h1>
                <div id="texto">
                <i>Pratique determinando o bom diagrama de entidade relacionamento para descrever o modelo de dados para um determinado cenário.</i>
                <br><br>
                (Falta inserir uma introdução a respeito do assunto)
                </div>
                <p id="cenario"></p>
                <img id="imagem_c" src="">
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