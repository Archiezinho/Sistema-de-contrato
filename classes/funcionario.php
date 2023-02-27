<?php

class funcionario {
	private $cod;
	private $codEmpresa;
	private $nome;
	private $cpf;
	private $identidade;
	private $sexo;
	private $CTPS;
	private $serie;
	private $titulo;	
	private $CNH;
	private $rua;
	private $numero;
	private $bairro;
	private $cidade;
	private $estado;
	private $pais;
	private $telefone;
	private $estadoCivil;
	private $escolaridade;
	private $registro;
	private $certidao;
	private $certificado;
	private $filhos;
	private $email;
	private $status;
	private $dependentes;

	//contrato de trabalho
	private $nacionalidade;

	//vale-transporte
	private $cep;
	private $setor;

	//registroEmpregado
	private $nomePai;
	private $nomeMae;
	private $reservista;
	private $categoria;
	private $foto;
	private $cadastroPis;
	private $numCadastroPis;

	
	function __construct($cod, $codEmpresa, $nome, $cpf, $identidade, $sexo, $CTPS, $serie, $titulo, $CNH, $rua, $numero, $bairro, $cidade, $estado,$pais, $telefone, $estadoCivil, $escolaridade, $registro, $certidao, $certificado, $filhos, $email, $status, $dependentes, $nacionalidade, $cep, $setor, $nomePai, $nomeMae, $reservista, $categoria, $foto, $cadastroPis, $numCadastroPis){
		$this->cod= $cod;
		$this->codFuncionario= $codFuncionario;
		$this->nome= $nome;
		$this->cpf=$cpf;
		$this->identidade=$identidade;
		$this->sexo=$sexo;  
		$this->CTPS=$CTPS;         
		$this->serie=$serie;
		$this->titulo=$titulo;
		$this->CNH=$CNH;
		$this->rua=$rua;
		$this->numero= $numero;
		$this->bairro=$bairro;
		$this->cidade=$cidade;
		$this->estado=$estado;
		$this->pais=$pais;
		$this->telefone=$telefone;
		$this->estadoCivil=$estadoCivil;
		$this->escolaridade= $escolaridade; 
		$this->registro=$registro;    
		$this->certidao=$certidao;
		$this->certificado=$certificado;
		$this->filhos=$filhos; 
		$this->email=$email;
		$this->status= $status;
		$this->dependentes=$dependentes;
		$this->nacionalidade=$nacionalidade;
		$this->cep=$cep;
		$this->setor=$setor;
		$this->nomePai=$nomePai;
		$this->nomeMae=$nomeMae;
		$this->reservista=$reservista;
		$this->categoria=$categoria;
		$this->foto=$foto;
		$this->cadastroPis=$cadastroPis;
		$this->numCadastroPis=$numCadastroPis;
	}
	
	function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
	function setCodEmpresa($codEmpresa) {
        $this->codEmpresa = $codEmpresa;
    }
	function setNome($nome) {
        $this->nome = $nome;
    }
	function setCpf($cpf) {
        $this->cpf = $cpf;
    }
	function setIdentidade($identidade) {
        $this->identidade = $identidade;
    }
	function setSexo($sexo) {
        $this->sexo = $sexo;
    }
	function setCTPS($CTPS) {
        $this->CTPS = $CTPS;
    }
	function setSerie($serie) {
        $this->serie = $serie;
    }
	function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
	function setCNH($CNH) {
        $this->CNH = $CNH;
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
	function setCidade($cidade) {
        $this->cidade = $cidade;
    }
	function setEstado($estado) {
        $this->estado = $estado;
    }
	function setPais($pais) {
        $this->pais = $pais;
    }
	function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
	function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }
	function setEscolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
    }
	function setRegistro($registro) {
        $this->registro = $registro;
    }
	function setCertidao($certidao) {
        $this->certidao = $certidao;
    }
	function setCertificado($certificado) {
        $this->certificado = $certificado;
    }
	function setFilhos($filhos) {
        $this->filhos = $filhos;
    }
	function setEmail($email) {
        $this->email = $email;
    }
	function setDependentes($Dependentes) {
        $this->dependente = $dependentes;
    }
	function setNacionalidade($nacionalidade) {
		$this->nacionalidade = $nacionalidade;
	}
	function setCep($cep) {
        $this->cep = $cep;
	}
	function setSetor($setor) {
		$this->setor = $setor;
	}
	function setNomePai($nomePai) {
		$this->nomePai = $nomePai;
	}
	function setNomeMae($nomeMae){
		$this->nomeMae = $nomeMae;
	}
	function setReservista($reservista){
		$this->reservista = $reservista;
	}
	function setCategoria($categoria){
		$this->categoria = $categoria;
	}
	function setTituloEleitor($tituloEleitor){
		$this->tituloEleitor = $tituloEleitor;
	}
	function setFoto($foto){
		$this->foto = $foto;
	}
	function setCadastroPis($cadastroPis){
		$this->cadastroPis = $cadastroPis;
	}
	function setNumCadastroPis($numCadastroPis){
		$this->numCadastroPis = $numCadastroPis;
	}
	function getCodigo() {
        return $this->codigo;
    }
	function getCodEmpresa() {
        return $this->codEmpresa;
    }
	function getNome($nome) {
       return  $this->nome;
    }
	function getCpf($cpf) {
         return $this->cpf;
    }
	function getIdentidade() {
        return $this->identidade;
	
	function getSexo() {
        return $this->sexo;
    }
    }
	function getCTPS() {
       return  $this->CTPS;
    }
	function getSerie() {
        return $this->serie;
    }
	function getTitulo() {
        return $this->titulo;
    }
	function getCNH() {
        return $this->CNH;
    }
	function getRua() {
        return $this->rua;
    }
	function getNumero() {
        return $this->numero;
    }
	function getBairro() {
       return  $this->bairro;
    }
	function getCidade() {
       return  $this->cidade;
    }
	function getEstado() {
          return $this->estado;
    }
	function getPais() {
        return $this->pais;
    }
	function getTelefone() {
        return $this->telefone;
    }
	function getEstadoCivil() {
        return $this->estadoCivil;
    }
	function getEscolaridade() {
        return $this->escolaridade;
    }
	function getRegistro() {
        return $this->registro;
    }
	function getCertidao($certidao) {
        return $this->certidao;
    }
	function getCertificado() {
        return $this->certificado;
    }
	function getFilhos() {
        return $this->filhos;
    }
	function getEmail() {
        return $this->email;
    }
	function getDependentes() {
        return $this->dependentes;
    }
	function getNacionalidade() {
		return $this->nacionalidade;
	}
	function getCep(){
		return $this->cep;
	}
	function getSetor(){
        return $this->setor;
    }
	function getNomePai(){
        return $this->nomePai;
	}
	function getNomeMae(){
		return $this->nomeMae;
	}
	function getReservista(){
        return $this->reservista;
	}
	function getCategoria(){
        return $this->categoria;
	}
	function getTituloEleitor(){
		return $this->tituloEleitor;
	}
	function getFoto(){
        return $this->foto;
    }
	function getCadastroPis(){
		return $this->cadastroPis;
	}
	function getNumCadastroPis(){
		return $this->numCadastroPis;
	}
function insere($conexao) {
		
		$query = "INSERT INTO funcionario(codEmpresa, nome, cpf, identidade,sexo, CTPS, serie, titulo, CNH, rua, numero, bairro, cidade, estado, pais, telefone, estadoCivil, escolaridade, registro, certidao, certificado, filhos, email, status, dependentes, nascionalidade, cep, setor, nomePai, nomeMae, reservista, categoria, foto, cadastroPis, numCadastroPis) VALUES ('$this->codEmpresa','$this->nome', '$this->cpf', '$this->identidade','$this->sexo', '$this->CTPS', '$this->serie', '$this->titulo', '$this->CNH', '$this->rua', '$this->numero', '$this->bairro', '$this->cidade', '$this->estado','$this->pais', '$this->telefone', '$this->estadoCivil', '$this->escolaridade', '$this->registro', '$this->certidao', '$this->certificado', '$this->filhos', '$this->email', '$this->status', '$this->dependentes','$this->nascionalidade','$this->cep','$this->setor','$this->nomePai','$this->nomeMae','$this->reservista','$this->categoria','$this->foto','$this->cadastroPis','$this->numCadastroPis)";
		$conexao->query($query);
		//print $conexao->errorCode(); 
		//print_r($conexao->errorInfo());		
		
	}
	function deletar($conexao, $cod) {
		$query = "delete from funcionario where cod= '$cod'";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
		}
		function alterar($conexao,$cod) {
			$query = "UPDATE empresa SET codEmpresa='$this->codEmpresa' ,nome='$this->nome',cpf='$this->cpf',identidade='$this->identidade',sexo='$this->sexo',CTPS='$this->CTPS',serie='$this->serie',titulo='$this->titulo',CNH='$this->CNH',rua='$this->rua',numero='$this->numero',bairro='$this->bairro',cidade='$this->cidade',estado='$this->estado',pais='$this->pais',telefone='$this->telefone',estadoCivil='$this->estadoCivil',escolaridade='$this->escolaridade',registro='$this->registro',certidao='$this->certidao',certificado='$this->certificado',filhos='$this->filhos',email='$this->email',status='$this->status',dependentes='$this->dependentes',nacionalidade='$this->nacionalidade',cep='$this->cep',setor='$this->setor',nomePai='$this->nomePai',nomeMae='$this->nomeMae',reservista='$this->reservista',categoria='$this->categoria',foto='$this->foto',cadastroPis='$this->cadastroPis',numCadastroPis='$this->numCadastroPis' WHERE cod= $cod";
			$stmt=$conexao->prepare($query);
			$stmt->execute();
		
		}




}