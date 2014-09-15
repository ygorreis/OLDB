<?php $this->load->helper('url'); ?>
<html lang="pt-br">
    <?php require_once 'header.php'; ?>
    <body>
        <div class="container">
            <?php require_once 'menu.php' ?>
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
            <?php require_once 'footer.php'; ?>

        </div>

        <!-- /container -->
        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/cenarios_er.js"></script>

    </body>
</html>