/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*dependencias_er*/
$(function() {
    $('#questoes_d').hide();
    return false;
});

$(function() {
    $('.hospital').click(function() {
        $('#questoes_d').show();
        $("#texto").hide();
        $("#subtitulo").hide();
        $("#titulod").text("Hospital possui muitos médicos");
        $("#questao").text("Um sistema de banco de dados é necessário para acompanhar os hospitais e os médicos contratados pelos hospitais. O banco de dados irá incluir vários hospitais e os médicos só podem trabalhar para um hospital. Tendo em conta os seguintes atributos, identificar as dependências provavelmente funcionais: hospital_id, hospital_nome, hospital_endereco, medico_id, medico_nome, medico_salario, hospital_cidade");

        $("#itema").html("hospital_id determina hospital_nome, hospital_endereco, hospital_cidade" + "<br>" + "&nbsp &nbsp médico_id determina hospital_id, medico_nome, medico_endereco");
        $("#fbta").html('Correta!');
        $("#fbca").html('Resposta Correta.');

        $("#itemb").html("medico_id determina medico_nome, medico_endereco, medico_salario" + "<br>" + "&nbsp &nbsp hospital_id determina hospital_nome, hospital_endereco, hospital_cidade, medico_id");
        $("#fbtb").html('Incorreta!');
        $("#fbcb").html('Hospital_id não determina médico_id. Para um hospital_id não corresponde mais de um medico.');

        $("#itemc").html("Medico_id determina physician_nome, medico_endereco, medico_salario, hospital_id" + "<br>" + "&nbsp &nbsp hospital_cidade determina hospital_nome, hospital_endereco, medico _id");
        $("#fbtc").html('Incorreta!');
        $("#fbcc").html('Hospital_cidade não determina médico_id. Para um hospital_cidade não corresponde mais de um medico.');
        return false;
    });
});

$(function() {
    $('.universidade').click(function() {
        $('#questoes_d').show();
        $("#texto").hide();
        $("#subtitulo").hide();
        $("#titulod").html("Estacionamento no campus da universidade");
        $("#questao").html("A universidade está desenvolvendo um sistema para rastrear estacionamento para professores, funcionários e alunos. Todo mundo na universidade paga pelo direito de estacionar e depois é atribuído uma zona na qual ele ou ela pode estacionar. Estas zonas têm cada preço único - zonas de estacionamento whith mais perto de edifícios do campus custar mais do que as zonas mais distantes. Além disso, as restrições de zoneamento estão no local com base em sua função na universidade. Zona A é reservado para o presidente da universidade e da faculdade Deans. Faculdade pode estacionar em qualquer zona exceto B ou C. Os funcionários podem estacionar em apenas Zonas D ou E, e os alunos podem estacionar nas zonas FH. <br> Dados os seguintes attibutes identificar as dependências mais prováveis ​​funcional: <br> Universidade_id, universidade_posicao, zona_estacionamento, espaco_estacionamento, preco_estacionamento.");

        $("#itema").html("Universidade_posicao determina universidade_id, zona_estacionamento <br> &nbsp &nbsp Zona_estacionamento determina espaco_estacionamento, preco_estacionamento");
        $("#fbta").html('Incorreta!');
        $("#fbca").html('Zona_estacionamento não determina espaco_estacionamento.');

        $("#itemb").html("Universidade_id determina espaco_estacionamento <br> &nbsp &nbsp Espaco_estacionamento determina zona_estacionamento <br> &nbsp &nbsp Zona_estacionamento determina preco_estacionamento");
        $("#fbtb").html('Incorreta!');
        $("#fbcb").html('Universidade_id não determina espaco_estacionamento porque, para cada universidade, não pode haver mais de um espaço de estaccionamento.');

        $("#itemc").html("Medico_id determina physician_nome, medico_endereco, medico_salario, hospital_id" + "<br>" + "&nbsp &nbsp hospital_cidade determina hospital_nome, hospital_endereco, medico _id");
        $("#fbtc").html('Correta!');
        $("#fbcc").html('Resposta correta.');
        return false;
    });
});

$(function() {
    $('.estoque').click(function() {
        $('#questoes_d').show();
        $("#texto").hide();
        $("#subtitulo").hide();
        $("#titulod").html("Estoque");
        $("#questao").html('<div align="center"><img src="../img/qdep.jpg"></div>');

        $("#itema").html("codigo_est determina empresa_est, preco_est, qtd_est, div_est, pe_est, pais_est, taxa_est <br> &nbsp &nbsp pais_est determina taxa_est");
        $("#fbta").html('Correta!');
        $("#fbca").html('Resposta Correta.');

        $("#itemb").html("cod_est determina empresa_est, preco_est, qtd_est, div_est, pe_est, pais_est <br> &nbsp &nbsp pais_est determina taxa_est");
        $("#fbtb").html('Incorreta!');
        $("#fbcb").html('cod_est determina taxa_est por dependencia transitiva: se "a determina b" e "b determina c" então "a determina c", onde a = cod_est, b = pais_est e c = taxa_est.');

        $("#itemc").html("cod_est determina empresa_est, preco_est, qtd_est, div_est, pe_est, pais_est, taxa_est <br> &nbsp &nbsp pais_est determina preco_est");
        $("#fbtc").html('Incorreta!');
        $("#fbcc").html("País não determina funcionalmente o preço. Ao determinar a -> b, vemos que para cada valor de 'a' há apenas um valor de 'b'.");
        return false;
    });
});


