$(function() {//função anonima que somente é disparada dspois do carregamento do DOM

    // Atribui evento e função para limpeza dos campos
    $('#busca').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#busca" ).autocomplete({
	    minLength: 1,
	    source: function( request, response ) {
	        $.ajax({
	            url: "json/listadependente.php",
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
	        $("#busca").val( ui.item.codfuncionario );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a>Nome: " + item.nome + "  CodFuncionario: " + item.codfuncionario + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#busca').val();

    	if(busca != "" && busca.length >= 1){
    		$.ajax({
	            url: "json/listadependente.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#busca').val()
	            },
	            success: function( data ) {
                   $('#codigo').val(data[0].cod); 
                   $('#nome').val(data[0].nome); 
                   $('#nascimento').val(data[0].nascimento); 
                   $('#sexo').val(data[0].sexo); 
                   $('#codfuncionario').val(data[0].codfuncionario); 
                   $('#salariofamilia').val(data[0].salariofamilia); 
                   $('#irrf').val(data[0].irrf); 
                   $('#parentesco').val(data[0].parentesco); 
                   $('#numOrdem').val(data[0].numOrdem); 
                   $('#localNascimento').val(data[0].localNascimento); 
                   $('#cartorio').val(data[0].cartorio); 
                   $('#numRegistro').val(data[0].numRegistro); 
                   $('#numLivro').val(data[0].numLivro); 
                   $('#numFolha').val(data[0].numFolha); 
                   $('#dataCertidao').val(data[0].dataCertidao); 
                   $('#baixa').val(data[0].baixa); 
                   $('#visto').val(data[0].visto); 
                   $('#competenciaInicial').val(data[0].competenciaInicial); 

                       
                     
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
        $('#nascimento').val(''); 
        $('#sexo').val(''); 
        $('#codfuncionario').val(''); 
        $('#salariofamilia').val(''); 
        $('#irrf').val(''); 
        $('#parentesco').val(''); 
        $('#numOrdem').val(''); 
        $('#localNascimento').val(''); 
        $('#cartorio').val(''); 
        $('#numRegistro').val(''); 
        $('#numLivro').val(''); 
        $('#numFolha').val(''); 
        $('#dataCertidao').val(''); 
        $('#baixa').val(''); 
        $('#visto').val(''); 
        $('#competenciaInicial').val('');
       }
    }
});

