<?php

class usuarios {

    private $codigo;
    private $nome;
    private $usuario;
    private $senha;
    private $perfil;
    private $status;
	
	function __construct($codigo, $nome, $usuario, $senha, $perfil, $status) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->perfil = $perfil;
        $this->status = $status;
    }
	
 
    function getCodigo() {
        return $this->codigo;
    }
	
    function getNome() {
        return $this->nome;
    }
	function getUsuario() {
        return $this->usuario;
    }
 function getSenha() {
        return $this->senha;
    }
    function getPerfil() {
        return $this->perfil;
    }

    function getStatus() {
        return $this->status;
    }

 
function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
function setNome($nome) {
        $this->nome = $nome;
    }	
function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
	 function setStatus($status) {
        $this->status = $status;
    }


    
    function mostra($conexao, $usuario,$senha) {
		$query = "select * from usuarios where usuario ='$usuario' and senha = '$senha'";
        $stmt = $conexao->query($query);
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		$this->usuario = $user->usuario;
		$this->perfil = $user->perfil;
		$this->nome = $user->Nome;
		
		
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
$query = "INSERT INTO usuarios(usuario, senha, perfil, nome,status) VALUES ('$this->usuario','$this->senha','$this->perfil','$this->nome','Ativo')";
$conexao->query($query);

}
function deletar($conexao, $cod) {

$query = "delete from usuarios where cod= '$cod'";
$stmt=$conexao->prepare($query);

$stmt->execute();


}
   

}
