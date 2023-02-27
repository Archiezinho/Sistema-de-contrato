$(function() {//função anonima que somente é disparada dspois do carregamento do DOM

    // Atribui evento e função para limpeza dos campos
    $('#busca').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#busca" ).autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "json/listafuncionario.php",
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
	        $("#busca").val( ui.item.nome );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#busca").val( ui.item.CNPJ );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>Nome: " + item.nome + "  CPF: " + item.cpf + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#busca').val();

    	if(busca != "" && busca.length >= 1){
    		$.ajax({
	            url: "json/listafuncionario.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#busca').val()
	            },
	            success: function( data ) {
                   $('#codigo').val(data[0].cod); 
				   $('#codEmpresa').val(data[0].codEmpresa); 
				   $('#nome').val(data[0].nome);
	               $('#cpf').val(data[0].cpf);
	               $('#identidade').val(data[0].identidade);
				   var sexo = data[0].sexo;
				   $('#CTPS').val(data[0].CTPS);
				   $('#serie').val(data[0].serie);
				   $('#serie').val(data[0].serie);
				   $('#titulo').val(data[0].titulo);
				   $('#CNH').val(data[0].CNH);
				   $('#rua').val(data[0].rua);
				   $('#numero').val(data[0].numero);
				   $('#bairro').val(data[0].bairro);
				   $('#cidade').val(data[0].cidade);
	               $('#estado').val(data[0].estado);
				   $('#pais').val(data[0].pais);
				   $('#telefone').val(data[0].telefone);
				   var estadocivil= data[0].telefone;
				   var escolariadae= data[0].escolariadae;
				   $('#registro').val(data[0].registro);
				   $('#certidao').val(data[0].certidao);
				   $('#certificado').val(data[0].certificado);
				   $('#filhos').val(data[0].filhos);
	               $('#email').val(data[0].email);
				   $('#status').val(data[0].status);
                   $('#dependentes').val(data[0].dependentes);
                   $('#nacionalidade').val(data[0].nacionalidade);    
				   $('#cep').val(data[0].cep);
				   $('#setor').val(data[0].setor);
				   $('#nomePai').val(data[0].nomePai);
				   $('#nomeMae').val(data[0].nomeMae);
				   $('#reservista').val(data[0].reservista);
				   $('#categoria').val(data[0].categoria);
				   $('#foto').val(data[0].foto);
				   $('#cadastroPis').val(data[0].cadastroPis);
				   $('#numCadastroPis').val(data[0].numCadastroPis);
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#busca').val();

       if(busca == ""){
		$('#codigo').val(''); 
		$('#nome').val('');
	    $('#cpf').val('');
	    $('#identidade').val('');
		
		$('#CTPS').val('');
		$('#serie').val('');
		$('#serie').val('');
		$('#titulo').val('');
		$('#CNH').val('');
		$('#rua').val('');
		$('#numero').val('');
		$('#bairro').val('');
		$('#cidade').val('');
	    $('#estado').val('');
		$('#pais').val('');
		$('#telefone').val('');
		
		
		$('#registro').val('');
		$('#certidao').val('');
		$('#certificado').val('');
		$('#filhos').val('');
	    $('#email').val('');
		$('#status').val('');
        $('#dependentes').val('');
		$('#nacionalidade').val('');    
		$('#cep').val('');
		$('#setor').val('');
		$('#nomePai').val('');
		$('#nomeMae').val('');
		$('#reservista').val('');
		$('#categoria').val('');
		$('#foto').val('');
		$('#cadastroPis').val('');
		$('#numCadastroPis').val(''); 
       }
    }
});

