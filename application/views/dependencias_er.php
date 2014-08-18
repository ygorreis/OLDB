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
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="hospital"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Hospital</a>
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="" class="estoque"><span class="glyphicon glyphicon-circle-arrow-right">
                            </span>  Estoque</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well" id="apresentacao">
                <h1 id="titulod">Dependências</h1>
                <div id="texto">
                <ul>
                    <li>A dependência funcional ocorre quando o valor de um atributo determina o valor de um outro atributo. Por exemplo, quando é dada uma StudentID, você pode encontrar StudentName. Portanto, existe uma dependência funcional entre StudentID e StudentName.</li>
                    <li>Os atributos utilizados como um ponto de partida são chamados determinantes. No exemplo acima, determina StudentID StudentName</li>
                    <li>Às vezes, mais do que um atributo é utilizado na criação de um determinante determinante compósito. </li>
                    <li>Por definição, uma chave primária irá determinar todos os outros atributos da tabela. </li>
                    <li>Para determinar as dependências funcionais, duas perguntas devem ser feitas: É Y um fato relacionado com X? Ou, no exemplo dado, é relacionada com a StudentName StudentID? 
                        O X determinar Y? Ou, mais uma vez, neste exemplo, não StudentID determinar StudentName? </li>
                    <li>Além disso, as regras de negócios são muitas vezes a melhor maneira de descobrir os determinantes. Por exemplo, seguindo as regras de negócio, você esperaria uma ProductSKU para determinar ProductPrice. </li>
                    <li>Finalmente, dependências funcionais só existe quando os atributos envolvidos têm identificadores únicos e individuais.</li>
                </ul>
                </div>
                <div id="questoes_d">
                    <div id="questao">
                    </div><br>
                    <p>A. <a href="" id="itema"></a><br></p>
                    <div id="feedbacka" class="">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong id="fa"></strong>
                    </div>
                    <p>B. <a href="" id="itemb"></a><br></p>
                    <div id="feedbackb" class="alert alert-danger fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong id="fb"></strong>
                    </div>
                    C. <a href="" id="itemc"></a><br>
                    <div id="feedbackc" class="alert alert-danger fade in">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong id="fc"></strong>
                    </div>
                </div>
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