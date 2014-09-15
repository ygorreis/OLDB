<?php $this->load->helper('url'); ?>
<html lang="pt-br">
    <?php require_once 'header.php'; ?>
    <body>
        <div class="container">
            <?php require_once 'menu.php' ?>
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-circle-arrow-right">
                                        </span> Relações</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="" class="er_tabelas_1"> 1-N Binário</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="er_tabelas_2"> 1-N Unário</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="er_tabelas_3"> 1 - 1 | Exemplo Empregado</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="er_tabelas_4"> 1 - 1 | Exemplo Faculdade</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="er_tabelas_5"> N - N Binário</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="er_tabelas_6">N - N Unário</a>
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
                        <div id="texto">
                            <h1>Entidade Relacionamento para Tabelas</h1>
                            <br>
                            <p>
                                Mapear um diagrama de Entidade-Relacionamento para Tabelas é parecido com um 
                                arquiteto na sua mesa desenhando um projeto. Na sua essência, um diagrama de 
                                Entidade-Relacionamento mostra a relação dos dados com os termos de entidades 
                                e relacionamentos.
                            </p>

                            <p>
                                Por sua vez, as Tabelas dão as ideias e conceitos das interações
                                no Diagrama ER, com isso elas tornam o banco de dados quase pronto.
                            </p>

                            <p>
                                De forma geral, o Diagrama de Entidade e Relacionamento para Tabelas consiste em:
                            <ul>
                                <li>
                                    Identificação das chaves primárias
                                </li>
                                <li>
                                    Inserção das chaves estrangeiras
                                </li>
                                <li>
                                    Definição de cardinalidade
                                </li>
                            </ul>
                            </p>
                        </div>
                        <img id="imagem_n" src="">
                    </div>
                </div>
            </div>
            
            <!-- Site footer -->
            <?php require_once 'footer.php'; ?>

        </div>
        
        <!-- /container -->
        <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/er_tabelas.js"></script>
        
    </body>
</html>