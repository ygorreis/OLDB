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
                        <li role="presentation"><a href="<?= site_url('oldb') ?>">HOME</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projetando Banco de Dados
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li role="presentation"><a href="<?= site_url('oldb/notacoes_er') ?>">Notações Entidade Relacionamento</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="<?= site_url('oldb/cenarios_er') ?>">Cenário para Entidade Relacionamento</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="<?= site_url('oldb/er_tabelas')?>">Entidade Relacionamento para Tabelas</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="<?= site_url('oldb/dependencias_er') ?>">Dependências</a></li>
                            </ul>
                        </li>
                        <li role="presentation"><a href="#">SQL</a></li>
                        <li role="presentation"><a href="#">INFO</a></li>
                    </ul>
                </div>
            </div>
    </body>
</html>    