<?php $this->load->helper('url'); ?>
<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Plataforma para aprendizagem interativa de Banco de Dados">
        <meta name="author" content="Ygor Reis | Jonas Sousa">

        <title>OLDB | Open Learning DataBase</title>

        
        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/justified-nav.css" rel="stylesheet">



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


            <!-- Jumbotron -->
            <div class="jumbotron">

                <h1>Open Learning DataBase</h1>
                <p class="lead">Uma abordagem interativa para ensinar banco de dados</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Comece agora!</a></p>
            </div>

            <!-- Site footer -->
            <div class="footer">
                <h4>Desenvolvido por <a href="https://www.facebook.com/ygor.reis">Ygor Reis</a> e <a href="https://www.facebook.com/jonas.sousa.58">Jonas Sousa</a>.</h4>
            </div>

        </div> 
        <!-- /container -->


        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->


    </body>
</html>