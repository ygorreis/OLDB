/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* er_tabelas*/



$(function() {
    $('.er_tabelas_1').click(function() {
        $("#texto").hide();
        $("#texto").html("<h4 style=\"color:gray\">Descrição</h4><hr><p>Uma empresa é estruturada de um modo que o empregado faça parte de um departamento e que um departamento tenha vários empregados.</p><br>");
        $("#texto").show();
        $("#imagem_n").attr('src', '../img/er_tabelas_1_n_binario.png');
        return false;
    });
});

$(function() {
    $('.er_tabelas_2').click(function() {
        $("#texto").hide();
        $("#texto").html("<h4 style=\"color:gray\">Descrição</h4><hr><p>Um empregado pode gerenciar vários empregados, mas nem todo empregado gerencia os outros. Entretanto, enquanto um empregado não é um gerente, ele só pode ser gerenciado por um gerente.</p><br>");
        $("#texto").show();
        $("#imagem_n").attr('src', '../img/er_tabelas_1_n_unario.png');
        return false;
    });
});

$(function() {
    $('.er_tabelas_3').click(function() {
        $("#texto").hide();
        $("#texto").html("<h4 style=\"color:gray\">Descrição</h4><hr><p>Um empregado é atribuído a um estacionamento. E um estacionamento só pode ser atribuído a um empregado.</p><br>");
        $("#texto").show();
        $("#imagem_n").attr('src', '../img/er_tabelas_1_1_empregado.png');
        return false;
    });
});

$(function() {
    $('.er_tabelas_4').click(function() {
        $("#texto").hide();
        $("#texto").html("<h4 style=\"color:gray\">Descrição</h4><hr><p>A universidade é estruturada de tal modo que membros do corpo docente fazem parte de um departamento. Para amenizar a responsabilidade, cada departamento tem um presidente, um responsável. Além disso, um membro do corpo docente pode presidir um ou nenhum departamento.</p><br>");
        $("#texto").show();
        $("#imagem_n").attr('src', '../img/er_tabelas_1_1_universidade.png');
        return false;
    });
});

$(function() {
    $('.er_tabelas_5').click(function() {
        $("#texto").hide();
        $("#texto").html("<h4 style=\"color:gray\">Descrição</h4><hr><p>Uma companhia é estruturada de tal modo que um empregado pode trabalhar em vários projetos e um projeto pode ter vários empregados trabalhando nele.</p><br>");
        $("#texto").show();
        $("#imagem_n").attr('src', '../img/er_tabelas_n_n_binario.png');
        return false;
    });
});

$(function() {
    $('.er_tabelas_6').click(function() {
        $("#texto").hide();
        $("#texto").html("<h4 style=\"color:gray\">Descrição</h4><hr><p>Um projeto pode ter 0 ou N projetos alternativos e o projeto alternatvivo pode ser o substituto de 1 ou N projetos. </p>Por exemplo: o projeto \"Implementar um software\" tem como projetos alternativos: <ol><li>Modificar um software.</li> <li>Comprar um software. </li> <li>Contratar consultores.</li></ol><br>");
        $("#texto").show();
        $("#imagem_n").attr('src', '../img/er_tabelas_n_n_unario.png');
        return false;
    });
});