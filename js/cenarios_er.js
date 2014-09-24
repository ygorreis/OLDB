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
        $("#cenario").html("&nbsp &nbsp Um empregado pode trabalhar em qualquer número de projetos (um, vários ou nenhum). Enquanto um empregado não é obrigado a trabalhar em um projeto, cada projeto deve ter pelo menos um funcionário que lhe foi atribuído (um ou muitos). Além disso, cada funcionário deve pertencer a um e somente um departamento. Para um departamento de existir no entanto, ele deve ter pelo menos dois funcionários.<hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/esol-ok.jpg");
        $("#imagem_c").attr('usemap', "#mapa");
        $("#fbta").html("Correta");
        $("#fbca").html("Correto! Esta solução exibe corretamente a entidades, relacionamentos e cardinalidade desse cenário.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("A cardinalidade deste Diagrama ER está incorreto. O cenário indica que um empregado não é obrigado a trabalhar em um projeto, mas a cardinalidade do Diagrama ER desta solução incorretamente mostra que um empregado deve trabalhar pelo menos um projeto.");
        $("#fbtc").html("Incorreta");
        $("#fbcc").html("A cardinalidade deste Diagrama ER está incorreto. O cenário indica que um projeto pode ter muitos empregados, mas deve ter pelo menos um funcionário. De acordo com este diagrama incorreto, um projeto pode ter apenas um empregado. Além disso, o cenário afirma que um funcionário deve pertencer um e somente um departamento, mas a cardinalidade desta solução mostra incorretamente que um empregado não pode pertencer a um departamento.");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("A cardinalidade deste Diagrama ER está incorreto. O cenário indica que um projeto pode ter muitos empregados, mas deve ter pelo menos um funcionário. De acordo com este diagrama incorreto, um projeto pode ter apenas um empregado. Além disso, este diagrama mostra que um empregado pode pertencer a vários departamentos, quando, neste cenário, que só pode pertencer a um.");
        return false;
    });
});

$(function() {
    $('.automoveis').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Automóveis");
        $("#cenario").html("&nbsp &nbsp Uma peça de automóvel (que consiste em PNUM, pname, preço) contém pelo menos uma parte. Além disso, uma parte do automóvel pode também estar contido em uma ou mais partes.<hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/asol-ok.jpg");
        $("#imagem_c").attr('usemap', "#mapa");
        $("#fbta").html("Incorreta");
        $("#fbca").html("Esta solução é incorreta porque a cardinalidade mínima mostra que uma peça não pode conter qualquer parte (cardinalidade mínima é 0). O cenário, no entanto, afirma que uma parte tem de conter pelo menos uma parte.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("Esta solução é incorreta porque você não pode ter duas entidades em um diagrama ER com exatamente o mesmo nome.");
        $("#fbtc").html("Correta");
        $("#fbcc").html("Solução correta");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("Esta solução só seria correto se Peças e subpartes continha atributos diferentes. Neste cenário, uma instância parte específica pode conter uma parte e também ser contido em uma parte. Portanto, cada instância teria, então, a aparecer em ambas as partes e subpartes, gerando, assim, uma duplicação desnecessária de cada instância. Duplicação de dados desta forma, seria difícil de manter.");
        return false;
    });
});

$(function() {
    $('.medico').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Médico");
        $("#cenario").html("&nbsp &nbsp Você foi contratado por um hospital regional para criar um banco de dados que irá acompanhar os procedimentos realizados para os pacientes e as informações de faturamento correspondente. Para facilitar o armazenamento desta informação, o hospital atribui a cada novo paciente um número único paciente. Muitas vezes, o mesmo paciente pode ser visto pelo hospital para procedimentos diferentes, e irá, portanto, manter o mesmo número único. O hospital precisa de um sistema de banco de dados que é capaz de controlar todos os procedimentos realizados para o paciente e pode faturar o ou individualmente para as visitas.<hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/msol-ok.jpg");
        $("#imagem_c").attr('usemap', "#mapa");
        $("#fbta").html("Incorreta");
        $("#fbca").html("Este sistema não permite uma referência a ser usado por mais de um paciente. Portanto, a cardinalidade deste diagrama é incorreto.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("A cardinalidade correta entre o procedimento e contas está faltando nesta solução. Por exemplo, um processo pode gerar apenas uma conta.");
        $("#fbtc").html("Correta");
        $("#fbcc").html("Solução correta");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("Um procedimento refere-se a apenas um projeto de lei, e cada projeto de lei deve ser tratado individualmente.");
        return false;
    });
});

$(function() {
    $('.revendedora').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Revendedora de Carros");
        $("#cenario").html("&nbsp &nbsp Um negociante de carro local contratou você para projetar um sistema de banco de dados que irá acompanhar os reparos do carro feitas por seus técnicos. No projeto do sistema, um mecânico deve ser atribuído a cada carro para reparo como cada reparo é monitorado através de um relatório de trabalho. Além disso, o sistema de base de dados deve ser capaz de gerar um relatório para o cliente que contém uma descrição do trabalho que foi realizado, a data, a hora, e resultado.<hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/rcsol-ok.jpg");
        $("#imagem_c").attr('usemap', "#mapa");
        $("#fbta").html("Incorreta");
        $("#fbca").html("A reparação deve ser associado a apenas um carro. Neste diagrama, a cardinalidade mínimo mostra que uma reparação pode ser associada com vários carros.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("Um técnico deverá ser capaz de reparar mais do que um carro de cada vez. Neste diagrama, a cardinalidade mínima mostra que um técnico só pode trabalhar em um carro.");
        $("#fbtc").html("Correta");
        $("#fbcc").html("Solução correta");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("A reparação deve ser associado a apenas um carro. Neste diagrama, a cardinalidade mínimo mostra que uma reparação pode ser associada com vários carros.");
        return false;
    });
});

$(function() {
    $('.prescricao').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Prescrição de Remédios");
        $("#cenario").html("&nbsp &nbsp Um sistema de banco de dados precisa ser projetado que irá acompanhar prescrições médicas para os pacientes. Este sistema de banco de dados deve ser capaz de mostrar não só que as drogas um paciente foi receitado, mas também o nome do médico que prescreveu. Ao projetar esse sistema, deve-se notar que um médico pode emitir várias receitas diferentes para um determinado paciente. Da mesma forma, um paciente pode ter prescrições de médicos diferentes.<hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/psol-ok.jpg");
        $("#fbta").html("Incorreta");
        $("#fbca").html("Esta solução não está mapeada corretamente. O diagrama ER neste problema deve apoiar a relação de trabalho triangular apresentado no cenário - um medicamento é prescrito por um médico para um paciente. Este diagrama ER mostra relacionamentos incompletos entre drogas, paciente e doutor, drogas retratando e paciente como uma relação completa, e paciente e médico como uma relação completa.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("Esta solução não está mapeada corretamente. O diagrama ER neste problema deve apoiar a relação de trabalho triangular apresentado no cenário - um medicamento é prescrito por um médico para um paciente. Por essa relação, os médicos devem ser conectado ao paciente através da droga que eles prescrevem. Com o diagrama ER aqui, droga é prescrita pelo médico e doutor PrescribesFor paciente são relacionamentos incompletos, o que torna impossível dizer o que eles prescrevem.");
        $("#fbtc").html("Correta");
        $("#fbcc").html("Correto! Este problema chamado para um relacionamento a três entre drogas, paciente e médico.");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("Esta solução apresenta a redundância desnecessária. O diagrama ER neste problema deve apoiar a relação de trabalho triangular apresentado no cenário - um medicamento é prescrito por um médico para um paciente. Com o diagrama ER aqui, um medicamento é prescrito a um paciente, e um paciente tem um médico. O paciente é desnecessariamente replicado duas vezes.");
        return false;
    });
});

$(function() {
    $('.pedido').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Pedidos");
        $("#cenario").html("<img src='../img/pedq.jpg'><hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/pedsol-ok.jpg");
        $("#fbta").html("Incorreta");
        $("#fbca").html("Um pedido pode conter mais do que um produto. Este fato pode ser deduzido porque há três produtos na forma representados. A cardinalidade mínima do diagrama ER para essa solução, em seguida, mostra incorretamente que um pedido pode conter apenas um produto.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("De acordo com o diagrama nesta solução, um produto só pode ser pedido uma vez. Embora este diagrama não contradiga de forma gritante a forma descrita, não faz sentido que um produto só pode nunca ser encomendado uma vez. Portanto, a cardinalidade mínima é incorreta nesta solução.");
        $("#fbtc").html("Correta");
        $("#fbcc").html("Solução Correta!");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("Esta solução tem um erro com sua cardinalidade mínima. Cada linha de pedido deve ter apenas um produto.");
        return false;
    });
});

$(function() {
    $('.telefone').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Telefones");
        $("#cenario").html("<img src='../img/telq.jpg'><hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/telsol-ok.jpg");
        $("#fbta").html("Incorreta");
        $("#fbca").html("Esta solução está incorreta por causa de um erro com sua cardinalidade mínima. No formulário exibido, três números de telefone são apresentados, de modo que o modelo de banco de dados teria de suportar mais de um número.");
        $("#fbtb").html("Correta");
        $("#fbcb").html("Solução Correta!");
        $("#fbtc").html("Incorreta");
        $("#fbcc").html("Esta solução está incorreta por causa de um erro com sua cardinalidade mínima que mostra que um número de telefone pode pertencer a várias empresas, quando, na realidade, cada empresa deve ter um número de telefone diferente.");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("Nesta solução, o mapeamento do diagrama está incorrecta. O volume é mostrado como uma entidade própria, quando, na realidade, deve ser um atributo da empresa. Essencialmente, quando o mínimo eo máximo cardinalidade em ambos os lados de um relacionamento são um, uma entidade é realmente um atributo da outra.");
        
        return false;
    });
});

$(function() {
    $('.fornecedor').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Fornecedores");
        $("#cenario").html("<img src='../img/forq.jpg'><hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/forsol-ok.jpg");
        $("#fbta").html("Incorreta");
        $("#fbca").html("Uma parte é mostrada na tabela como sendo capazes de conter mais do que um fornecedor. Este fato é evidenciado pelo fato de que o relatório mostra o Garage Opener como comprado por três empresas diferentes. Nesta solução, o diagrama ER mostra incorretamente que uma parte só pode ser comprado de um fornecedor.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("Um fornecedor pode fornecer mais de uma parte. Este fato é evidenciado pelo fato de que o relatório mostra Best Buy através do fornecimento de um alarme e de garagem. Nesta solução, o diagrama ER incorretamente mostra que uma parte só pode ser fornecido por um único fornecedor.");
        $("#fbtc").html("Correta");
        $("#fbcc").html("Solução Correta!");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("A citação só pode vir de um fornecedor. Este diagrama ER mostra incorretamente que uma citação pode vir de muitos fornecedores.");
        return false;
    });
});

$(function() {
    $('.universidade').click(function() {
        $("#texto").hide();
        $("#tituloc").html("Universidade");
        $("#cenario").html("<img src='../img/uniq.jpg'><hr><i>Determine o melhor diagrama entidade-relacionamento para descrever o modelo de dados do cenário apresentado acima:</i>");
        $("#imagem_c").show();
        $("#imagem_c").attr('src', "../img/unisol-ok.jpg");
        $("#fbta").html("Incorreta");
        $("#fbca").html("Este diagrama ER é incorreta porque não há representação dentro dele para a entidade Departamento.");
        $("#fbtb").html("Incorreta");
        $("#fbcb").html("Este diagrama ER é incorreta porque não há representação dentro dele para a entidade Faculdade.");
        $("#fbtc").html("Correta");
        $("#fbcc").html("Correto! Universidade não deve ser mapeada como uma entidade, pois este sistema de banco de dados é apenas para uma universidade.");
        $("#fbtd").html("Incorreta");
        $("#fbcd").html("Este diagrama ER está incorreta porque tem uma entidade separada para a Universidade. Neste exemplo, uma única universidade está acompanhando Faculdade, Departamento, e Especialização. Uma vez que este sistema envolve apenas uma universidade, a Universidade não deve ser uma entidade.");
        return false;
    });
});


