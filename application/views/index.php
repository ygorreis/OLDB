<?php $this->load->helper('url'); ?>
<html lang="pt-br">
    <?php require_once 'header.php'; ?>
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
                                <li role="presentation"><a href="<?= site_url('oldb/er_tabelas') ?>">Entidade Relacionamento para Tabelas</a></li>
                                <li class="divider"></li>
                                <li role="presentation"><a href="<?= site_url('oldb/dependencias_er') ?>">Dependências</a></li>
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
                <p><a class="btn btn-lg btn-success" href="<?= site_url('oldb/notacoes_er') ?>" role="button">Comece agora!</a></p>
            </div>

            <!-- Site footer -->
            <?php require_once 'footer.php'; ?>
            
        </div> 

        <!-- /container -->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

    </body>
</html>