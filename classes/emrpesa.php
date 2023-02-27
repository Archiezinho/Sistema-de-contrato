<?php

class empresa {
	private $cod;
	private $razao;
	private $nome;
	private $CNPJ;
	private $inscricao;
	private $rua;
	private $numero;
	private $bairro;
	private $estado;
	private $telefone;
	private $email;
	private $responsavel;
	
	//contrato de trabalho
	private $naturezaJuridica;
	
	
	function __construct($cod,$razao,$nome,$CNPJ, $inscricao, $rua,$numero, $bairro,$estado,$telefone,$email,$responsavel,$naturezaJuridica){
		$this->cod=$cod;
		$this->razao=$razao;
		$this->nome=$nome;
		$this->CNPJ=$CNPJ;
		$this->inscricao=$inscricao;
		$this->rua=$rua;
		$this->numero=$numero;
		$this->bairro=$bairro;
		$this->estado=$estado;
		$this->telefone=$telefone;
		$this->email=$email;
		$this->responsavel=$responsavel;
		$this->naturezaJuridica=$naturezaJuridica;
	
	}
	function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
	function setRazao($razao) {
        $this->razao = $razao;
    }
	function setNome($nome) {
        $this->nome = $nome;
    }
	function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
	function setInscricao($inscricao) {
        $this->inscricao = $inscricao;
    }
	function setRua($rua) {
        $this->rua = $rua;
    }	
	function setNumero($numero) {
        $this->numero = $numero;
    }
	function setBairro($bairro) {
        $this->bairro = $bairro;
    }
	function setEstado($estado) {
        $this->estado = $estado;
    }	
	function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
	function setEmail($email) {
        $this->email = $email;
    }
	function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }
	function setNaturezaJuridica($naturezaJuridica) {
		$this->naturezaJuridica = $naturezaJuridica;
	}	
	function getCodigo() {
        return $this->codigo;
    }
	function getRazao() {
        return $this->razao;
    }
	function getNome() {
       return  $this->nome;
    }
	function getCnpj() {
        return $this->cnpj;
    }
	function getInscricao() {
        return $this->inscricao;
    }
	function getRua() {
        return $this->rua;
    }	
	function getNumero() {
        return $this->numero;
    }
	function getBairro() {
        return $this->bairro;
    }
	function getEstado() {
        return $this->estado;
    }	
	function getTelefone() {
        return $this->telefone;
    }
	function getEmail() {
        return $this->email;
    }
	function getResponsavel() {
        return $this->responsavel;
    }
	function getNaturezaJuridica() {
		return $this->naturezaJuridica;
	}
	
	
	function mostra2($conexao) {
		$query = "select * from usuarios";
        foreach($conexao->query($query) as $chave=>$valor){
		$this->codigo[] = $valor[0];
		$this->nome[] = $valor[1];
		$this->usuario[] = $valor[2];
		$this->senha[] = $valor[3];
		$this->status[] = $valor[4];
		$this->perfil[] = $valor[5];	
			
		}
		
    }
	function insere($conexao) {
		$query = "INSERT INTO empresa(razao, nome, CNPJ, Inscricao, rua, numero, bairro, estado, telefone, email, responsavel, naturezaJuridica) VALUES ('$this->razao','$this->nome','$this->CNPJ','$this->inscricao','$this->rua','$this->numero','$this->bairro','$this->estado','$this->telefone','$this->email','$this->responsavel','$this->naturezaJuridica')";
		$conexao->query($query);
	}
	function deletar($conexao, $cod) {
		$query = "delete from empresa where cod= '$cod'";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
		}
	function alterar($conexao,$cod) {
		$query = "UPDATE empresa SET razao='$this->razao',nome='$this->nome',CNPJ='$this->CNPJ',Inscricao='$this->inscricao',rua='$this->rua',numero='$this->numero',bairro='$this->bairro',estado='$this->estado',telefone='$this->telefone',email='$this->email',responsavel='$this->responsavel',naturezaJuridica='$this->naturezaJuridica' WHERE cod= $cod";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
	
	}
}