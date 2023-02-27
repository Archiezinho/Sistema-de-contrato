$(function() {//função anonima que somente é disparada dspois do carregamento do DOM

    // Atribui evento e função para limpeza dos campos
    $('#busca').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#busca" ).autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "json/listacontrato.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#busca').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#busca").val( ui.item.codFuncionario );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#busca").val( ui.item.codEmpresa );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>Nome: " + item.codFuncionario + "  CNPJ: " + item.codEmpresa + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#busca').val();

    	if(busca != "" && busca.length >= 1){
    		$.ajax({
	            url: "json/listacontrato.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#busca').val()
	            },
	            success: function( data ) {
                   $('#codigo').val(data[0].cod);
                   $('#tipo').val(data[0].tipo);
                   $('#codFuncionario').val(data[0].codFuncionario);
                   $('#codEmpresa').val(data[0].codEmpresa);
                   $('#dataInicio').val(data[0].dataInicio);
                   $('#dataFim').val(data[0].dataFim);
                   $('#cargo').val(data[0].cargo);
                   $('#cbo').val(data[0].cbo);
                   $('#salario').val(data[0].salario);
                   $('#jornada').val(data[0].jornada);
                   $('#experiencia').val(data[0].experiencia);
                   $('#diasExperiencia').val(data[0].diasExperiencia);
                   $('#valeTransporte').val(data[0].valeTransporte);
                   $('#periculosidade').val(data[0].periculosidade);
                   $('#insalubridade').val(data[0].insalubridade);
                   $('#escala').val(data[0].escala);
                   $('#regime').val(data[0].regime);
                   $('#atividades').val(data[0].atividades);
                   $('#servico').val(data[0].servico);
                   $('#rotinaPagamento').val(data[0].rotinaPagamento);
                   $('#tipoPagamento').val(data[0].tipoPagamento);
                   $('#contribuicaoSindical').val(data[0].contribuicaoSindical);
                   $('#enderecoTrabalho').val(data[0].enderecoTrabalho);
                   $('#vigorContrato').val(data[0].vigorContrato);
                   $('#regiaoRecrutar').val(data[0].regiaoRecrutar);
                   $('#prazoRecrutamento').val(data[0].prazoRecrutamento);
                   $('#multaRecrutamento').val(data[0].multaRecrutamento);
                   $('#multaVinculo').val(data[0].multaVinculo);
                   $('#foro').val(data[0].foro);
                   $('#numOrdem').val(data[0].numOrdem);
                   $('#numMatricula').val(data[0].numMatricula);
                   $('#autenticacao').val(data[0].autenticacao);
                   $('#secao').val(data[0].secao);
                   $('#salarioInicial').val(data[0].salarioInicial);
                   $('#comissoes').val(data[0].comissoes);
                   $('#tarefa').val(data[0].tarefa);
                   $('#entradaTrabalho').val(data[0].entradaTrabalho);
                   $('#refeicao').val(data[0].refeicao);
                   $('#saidaTrabalho').val(data[0].saidaTrabalho);
                   $('#descansoSemanal').val(data[0].descansoSemanal);
                   $('#fgts').val(data[0].fgts);
          
                     
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#busca').val();

       if(busca == ""){
        $('#codigo').val('');
        $('#tipo').val('');
        $('#codFuncionario').val('');
        $('#codEmpresa').val('');
        $('#dataInicio').val('');
        $('#dataFim').val('');
        $('#cargo').val('');
        $('#cbo').val('');
        $('#salario').val('');
        $('#jornada').val('');
        $('#experiencia').val('');
        $('#diasExperiencia').val('');
        $('#valeTransporte').val('');
        $('#periculosidade').val('');
        $('#insalubridade').val('');
        $('#escala').val('');
        $('#regime').val('');
        $('#atividades').val('');
        $('#servico').val('');
        $('#rotinaPagamento').val('');
        $('#tipoPagamento').val('');
        $('#contribuicaoSindical').val('');
        $('#enderecoTrabalho').val('');
        $('#vigorContrato').val('');
        $('#regiaoRecrutar').val('');
        $('#prazoRecrutamento').val('');
        $('#multaRecrutamento').val('');
        $('#multaVinculo').val('');
        $('#foro').val('');
        $('#numOrdem').val('');
        $('#numMatricula').val('');
        $('#autenticacao').val('');
        $('#secao').val('');
        $('#salarioInicial').val('');
        $('#comissoes').val('');
        $('#tarefa').val('');
        $('#entradaTrabalho').val('');
        $('#refeicao').val('');
        $('#saidaTrabalho').val('');
        $('#descansoSemanal').val('');
        $('#fgts').val('');
       }
    }
});

