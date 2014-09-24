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
                        <img id="imagem_c" src="" usemap="" alt="">
                        <map name="mapa">
                            <area shape="rect" coords="0,0,399,249" data-toggle="modal" data-target="#feedbacka" alt="m1">
                            <area shape="rect" coords="400,0,806,248" data-toggle="modal" data-target="#feedbackb" alt="m2">
                            <area shape="rect" coords="0,251,499,399" data-toggle="modal" data-target="#feedbackc" alt="m3">
                            <area shape="rect" coords="401,251,806,499" data-toggle="modal" data-target="#feedbackd" alt="m4">
                        </map>
                        
                        <div class="modal fade" id="feedbacka" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="fbta"></h4>
                                    </div>
                                    <div class="modal-body" id="fbca"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="feedbackb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="fbtb"></h4>
                                    </div>
                                    <div class="modal-body" id="fbcb"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="feedbackc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="fbtc"></h4>
                                    </div>
                                    <div class="modal-body" id="fbcc"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="feedbackd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="fbtd"></h4>
                                    </div>
                                    <div class="modal-body" id="fbcd"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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