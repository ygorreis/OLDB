/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*cenarios_er*/
$(function() {
    $("#imagem_c").hide();
    return false;
});

$(function() {
    $('.empregado').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Empregado");
        $("#cenario").html("&nbsp &nbsp Um empregado pode trabalhar em qualquer número de projetos (um, vários ou nenhum). Enquanto um empregado não é obrigado a trabalhar em um projeto, cada projeto deve ter pelo menos um funcionário que lhe foi atribuído (um ou muitos). Além disso, cada funcionário deve pertencer a um e somente um departamento. Para um departamento de existir no entanto, ele deve ter pelo menos dois funcionários.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/esol.jpg");
        return false;
    });
});

$(function() {
    $('.automoveis').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Automóveis");
        $("#cenario").html("&nbsp &nbsp Uma peça de automóvel (que consiste em PNUM, pname, preço) contém pelo menos uma parte. Além disso, uma parte do automóvel pode também estar contido em uma ou mais partes.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/asol.jpg");
        return false;
    });
});

$(function() {
    $('.medico').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Médico");
        $("#cenario").html("&nbsp &nbsp Você foi contratado por um hospital regional para criar um banco de dados que irá acompanhar os procedimentos realizados para os pacientes e as informações de faturamento correspondente. Para facilitar o armazenamento desta informação, o hospital atribui a cada novo paciente um número único paciente. Muitas vezes, o mesmo paciente pode ser visto pelo hospital para procedimentos diferentes, e irá, portanto, manter o mesmo número único. O hospital precisa de um sistema de banco de dados que é capaz de controlar todos os procedimentos realizados para o paciente e pode faturar o ou individualmente para as visitas.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/msol.jpg");
        return false;
    });
});

$(function() {
    $('.revendedora').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Revendedora de Carros");
        $("#cenario").html("&nbsp &nbsp Um negociante de carro local contratou você para projetar um sistema de banco de dados que irá acompanhar os reparos do carro feitas por seus técnicos. No projeto do sistema, um mecânico deve ser atribuído a cada carro para reparo como cada reparo é monitorado através de um relatório de trabalho. Além disso, o sistema de base de dados deve ser capaz de gerar um relatório para o cliente que contém uma descrição do trabalho que foi realizado, a data, a hora, e resultado.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/rcsol.jpg");
        return false;
    });
});

$(function() {
    $('.prescricao').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Prescrição de Remédios");
        $("#cenario").html("&nbsp &nbsp Um sistema de banco de dados precisa ser projetado que irá acompanhar prescrições médicas para os pacientes. Este sistema de banco de dados deve ser capaz de mostrar não só que as drogas um paciente foi receitado, mas também o nome do médico que prescreveu. Ao projetar esse sistema, deve-se notar que um médico pode emitir várias receitas diferentes para um determinado paciente. Da mesma forma, um paciente pode ter prescrições de médicos diferentes.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/psol.jpg");
        return false;
    });
});

$(function() {
    $('.pedido').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Pedidos");
        $("#cenario").html("<img src='../img/pedq.jpg'>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/pedr.jpg");
        return false;
    });
});

$(function() {
    $('.telefone').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Telefones");
        $("#cenario").html("<img src='../img/telq.jpg'>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/telr.jpg");
        return false;
    });
});

$(function() {
    $('.fornecedor').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Fornecedores");
        $("#cenario").html("<img src='../img/forq.jpg'>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/forr.jpg");
        return false;
    });
});

$(function() {
    $('.universidade').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Universidade");
        $("#cenario").html("<img src='../img/uniq.jpg'>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/unir.jpg");
        return false;
    });
});


