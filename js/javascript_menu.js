/*notacoes_er*/

$(function() {
   $('.max_1').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/max_1.jpg");
   return false;
 });
});

$(function() {
   $('.max_2').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/max_2.jpg");
   return false;
 });
});

$(function() {
   $('.max_3').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/max_3.jpg");
   return false;
 });
});

$(function() {
   $('.max_4').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/max_4.jpg");
   return false;
 });
});

$(function() {
   $('.max_5').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/max_5.jpg");
   return false;
 });
});

$(function() {
   $('.max_6').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/max_6.jpg");
   return false;
 });
});

$(function() {
   $('.max_7').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/max_7.jpg");
   return false;
 });
});

$(function() {
   $('.min_1').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/min_1.jpg");
   return false;
 });
});

$(function() {
   $('.min_2').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/min_2.jpg");
   return false;
 });
});

$(function() {
   $('.min_3').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/min_3.jpg");
   return false;
 });
});

$(function() {
   $('.min_4').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/min_4.jpg");
   return false;
 });
});

$(function() {
   $('.min_5').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/min_5.jpg");
   return false;
 });
});

$(function() {
   $('.min_6').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/min_6.jpg");
   return false;
 });
});

$(function() {
   $('.min_7').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/min_7.jpg");
   return false;
 });
});

$(function() {
   $('.pga_1').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/pga_1.jpg");
   return false;
 });
});

$(function() {
   $('.pga_2').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/pga_2.jpg");
   return false;
 });
});

$(function() {
   $('.pga_3').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/pga_3.jpg");
   return false;
 });
});

$(function() {
   $('.pga_4').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/pga_4.jpg");
   return false;
 });
});

$(function() {
   $('.pga_5').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/pga_5.jpg");
   return false;
 });
});

$(function() {
   $('.pga_6').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/pga_6.jpg");
   return false;
 });
});

$(function() {
   $('.pga_7').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/pga_7.jpg");
   return false;
 });
});

$(function() {
   $('.uml_1').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/uml_1.jpg");
   return false;
 });
});

$(function() {
   $('.uml_2').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/uml_2.jpg");
   return false;
 });
});

$(function() {
   $('.uml_3').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/uml_3.jpg");
   return false;
 });
});

$(function() {
   $('.uml_4').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/uml_4.jpg");
   return false;
 });
});

$(function() {
   $('.uml_5').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/uml_5.jpg");
   return false;
 });
});

$(function() {
   $('.uml_6').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/uml_6.jpg");
   return false;
 });
});

$(function() {
   $('.uml_7').click(function(){
   $("#texto").hide();
   $("#imagem_n").attr('src',"../img/uml_7.jpg");
   return false;
 });
});

/*cenarios_er*/
 $(function() {
    $("#imagem_c").hide();
    return false;
 });

 $(function() {
   $('.empregado').click(function(){
        $("#texto").hide();
        $("#tituloc").text("Empregado");
        $("#cenario").text("Um empregado pode trabalhar em qualquer número de projetos (um, vários ou nenhum). Enquanto um empregado não é obrigado a trabalhar em um projeto, cada projeto deve ter pelo menos um funcionário que lhe foi atribuído (um ou muitos). Além disso, cada funcionário deve pertencer a um e somente um departamento. Para um departamento de existir no entanto, ele deve ter pelo menos dois funcionários.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src',"../img/esol.jpg");
        return false;
    });
 });
 
 $(function() {
   $('.automoveis').click(function(){
        $("#texto").hide();
        $("#tituloc").text("Automoveis");
        $("#cenario").text("Uma peça de automóvel (que consiste em PNUM, pname, preço) contém pelo menos uma parte. Além disso, uma parte do automóvel pode também estar contido em uma ou mais partes.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src',"../img/asol.jpg");
        return false;
    });
 });    
 
 $(function() {
   $('.medico').click(function(){
        $("#texto").hide();
        $("#tituloc").text("Médico");
        $("#cenario").text("Você foi contratado por um hospital regional para criar um banco de dados que irá acompanhar os procedimentos realizados para os pacientes e as informações de faturamento correspondente. Para facilitar o armazenamento desta informação, o hospital atribui a cada novo paciente um número único paciente. Muitas vezes, o mesmo paciente pode ser visto pelo hospital para procedimentos diferentes, e irá, portanto, manter o mesmo número único. O hospital precisa de um sistema de banco de dados que é capaz de controlar todos os procedimentos realizados para o paciente e pode faturar o ou individualmente para as visitas.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src',"../img/msol.jpg");
        return false;
    });
 });
 
 
 $(function() {
   $('.revendedora').click(function(){
        $("#texto").hide();
        $("#tituloc").text("Revendedora de Carros");
        $("#cenario").text("Um negociante de carro local contratou você para projetar um sistema de banco de dados que irá acompanhar os reparos do carro feitas por seus técnicos. No projeto do sistema, um mecânico deve ser atribuído a cada carro para reparo como cada reparo é monitorado através de um relatório de trabalho. Além disso, o sistema de base de dados deve ser capaz de gerar um relatório para o cliente que contém uma descrição do trabalho que foi realizado, a data, a hora, e resultado.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src',"../img/rcsol.jpg");
        return false;
    });
 });
 
 $(function() {
   $('.prescricao').click(function(){
        $("#texto").hide();
        $("#tituloc").text("Prescrição de Remédios");
        $("#cenario").text("Um sistema de banco de dados precisa ser projetado que irá acompanhar prescrições médicas para os pacientes. Este sistema de banco de dados deve ser capaz de mostrar não só que as drogas um paciente foi receitado, mas também o nome do médico que prescreveu. Ao projetar esse sistema, deve-se notar que um médico pode emitir várias receitas diferentes para um determinado paciente. Da mesma forma, um paciente pode ter prescrições de médicos diferentes.");
        $("#imagem_c").show();
        $("#imagem_c").attr('src',"../img/psol.jpg");
        return false;
    });
 });
 
 /*dependencias_er*/
 $(function() {
     $('#questoes_d').hide();
     return false;
 });
 
 $(function() {
   $('.hospital').click(function(){
        $('#questoes_d').show();
        $("#texto").hide();
        $("#feedbacka").hide();
        $("#feedbackb").hide();
        $("#feedbackc").hide();
        $("#titulod").text("Hospital");
        $("#questao").text("Um sistema de banco de dados é necessário para acompanhar os hospitais e os médicos contratados pelos hospitais. O banco de dados irá incluir vários hospitais e os médicos só podem trabalhar para um hospital. Tendo em conta os seguintes atributos, identificar as dependências provavelmente funcionais: hospital_id, hospital_nome, hospital_endereco, medico_id, medico_nome, medico_salario, hospital_cidade");
        $("#itema").text("hospital_id determina hospital_nome, hospital_endereco, hospital_cidade;  | médico_id determina hospital_id, medico_nome, medico_endereco.");
        $("#itema").click(function(){
            $("#fa").attr('class', "alert alert-success fade in");
            $("#fa").text("Correto");
            $("#feedbackb").hide();
            $("#feedbackc").hide();
            $("#feedbacka").show();
            return false;
        });
        $("#itemb").text("medico_id determina medico_nome, medico_endereco, medico_salario; | hospital_id determina hospital_nome, hospital_endereco, hospital_cidade, medico_id");
        $("#itemb").click(function(){
            $("#fa").attr('class', "alert alert-danger fade in");
            $("#fb").text("Incorreto. Hospital_id não determina médico_id. Para um hospital_id não corresponde mais de um medico.");
            $("#feedbacka").hide();
            $("#feedbackc").hide();
            $("#feedbackb").show();
            return false;
        });
        $("#itemc").text("Medico_id determina physician_nome, medico_endereco, medico_salario, hospital_id; | hospital_cidade determina hospital_nome, hospital_endereco, medico _id");
        $("#itemc").click(function(){
            $("#fa").attr('class', "alert alert-danger fade in");
            $("#fc").text("Incorreto. Hospital_id não determina médico_id. Para um hospital_id não corresponde mais de um medico.");
            $("#feedbacka").hide();
            $("#feedbackb").hide();
            $("#feedbackc").show();
            return false;
        });
        return false;
    });
 });
 
 $(function() {
   $('.universidade').click(function(){
        $('#questoes_d').show();
        $("#texto").hide();
        $("#feedbacka").hide();
        $("#feedbackb").hide();
        $("#feedbackc").hide();
        $("#titulod").text("Universidade");
        $("#questao").text("Uma universidade está desenvolvendo um sistema para rastrear estacionamento para professores, funcionários e alunos. Todos no universityy paga pelo direito de estacionar e depois é atribuída uma zona na qual ele ou ela pode estacionar. Estas zonas têm cada preço único - zonas com lugares de estacionamento mais perto de edifícios do campus custar mais do que as zonas mais distantes. Além disso, as restrições de zoneamento estão no local com base em sua função na universidade. Zona A é reservado para o presidente da universidade e da faculdade Deans. Faculdade pode estacionar em qualquer zona exceto B ou C. Os funcionários podem estacionar em apenas Zons D ou E, e os alunos podem estacionar nas zonas FH. Tendo em conta os seguintes atributos identifique as dependências funcionais mais prováveis​​:  universidade_id, universidade_posicao, zona_estacionamento, espaco_estacionamento, preço_estacionamento.");
        $("#itema").text("universidade_posicao determina universidade_id, zona_estacionamento | zona_estacionamento determina espaço_estacionamento, preco_estacionamento.");
        $("#itema").click(function(){
            $("#fa").attr('class', "alert alert-danger fade in");
            $("#fa").text("Incorreto. Zona_estacionamento não determina espaco_estacionamento.");
            $("#feedbacka").show();
            return false;
        });
        $("#itemb").text("universidade_id determina espaco_estacionamento | espaco_estacionamento determina zona_estacionamento | zona_estacionamento determina preco_estacionamento.");
        $("#itemb").click(function(){
            $("#fa").attr('class', "alert alert-danger fade in");
            $("#fb").text("Incorreto. Universidade_id não determina espaco_estacionamento porque para cada universidade não pode haver mais do que um espaço de estacionamento.");
            $("#feedbackb").show();
            return false;
        });
        $("#itemc").text("universidade_id determina universidade_posicao, zona_estacionamento | espaco_estacionamento determina zona_estacionamento, preco_estacionamento.");
        $("#itemc").click(function(){
            $("#fa").attr('class', "alert alert-sucess fade in");
            $("#fc").text("Correto");
            $("#feedbackc").show();
            return false;
        });
        return false;
    });
 });