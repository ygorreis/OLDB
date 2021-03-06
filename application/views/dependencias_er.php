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
                        <h1 id="titulod">Dependências Funcionais<br></h1>
                        <h4 id="subtitulo"><i>Pratique determinar as dependências funcionais entre atributos nos cenários à esquerda.</i></h4>
                        <div id="texto">
                            <br>
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
                            <p><a href="" data-toggle="modal" data-target="#feedbacka">A. </a><span id="itema"></span></p>
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
                            <p><a href="" data-toggle="modal" data-target="#feedbackb">B. </a><span id="itemb"></span></p>
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
                            <p><a href="" data-toggle="modal" data-target="#feedbackb">C. </a><span id="itemc"></span></p>
                            <div class="modal fade" id="feedbackb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <script type="text/javascript" src="../js/dependencias_er.js"></script>

    </body>
</html>