<?php

class dependente {
	private $cod;
	private $nome;
	private $nascimento;
	private $sexo;
	private $codfuncionario;
	private $salariofamilia;
	private $irrf;

	//salario familia
	private $parentesco;
	private $numOrdem;
	private $localNascimento;
	private $cartorio;
	private $numRegistro;
	private $numLivro;
	private $numFolha;
	private $dataCertidao;
	private $baixa;
	private $visto;
	private $competenciaInicial;
	
	function __construct($cod,$nome,$nascimento, $sexo,$codfuncionario,$salariofamilia, $irrf, $parentesco, $numOrdem, $localNascimento, $cartorio, $numRegistro, $numLivro, $numFolha, $dataCertidao, $baixa, $visto, $competenciaInicial){
		$this->cod=$cod;
		$this->nome=$nome;
		$this->nascimento=$nascimento;
		$this->sexo=$sexo;
		$this->codfuncionario=$codfuncionario;
		$this->salariofamilia=$salariofamilia;
		$this->irrf=$irrf;
		$this->parentesco=$parentesco;
		$this->numOrdem=$numOrdem;
		$this->localNascimento=$localNascimento;
		$this->cartorio=$cartorio;
		$this->numRegistro=$numRegistro;
		$this->numLivro=$numLivro;
		$this->numFolha=$numFolha;
		$this->dataCertidao=$dataCertidao;
		$this->baixa=$baixa;
		$this->visto=$visto;
		$this->competenciaInicial=$competenciaInicial;
	
	}
	function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
	function setNome($nome) {
        $this->nome = $nome;
    }
	function setSexo($sexo) {
        $this->sexo = $sexo;
    }
	function setcodfuncionario($codfuncionario) {
        $this->codfuncionario = $codfuncionario;
    }
	function setSalariofamilia($salariofamilia) {
        $this->salariofamilia = $salariofamilia;
    }	
	function setIrrf($irrf) {
        $this->irrf = $irrf;
    }
	function setParentesco($parentesco) {
		$this->parentesco = $parentesco;
	}
	function setNumOrdem($numOrdem) {
		$this->numOrdem = $numOrdem;
	}
	function setLocalNascimento($localNascimento) {
		$this->localNascimento = $localNascimento;
	}
	function setCartorio($cartorio) {
		$this->cartorio = $cartorio;
	}
	function setNumRegistro($numRegistro) {
		$this->numRegistro = $numRegistro;
	}
	function setNumLivro($numLivro) {
		$this->numLivro = $numLivro;
	}
	function setNumFolha($numFolha) {
		$this->numFolha = $numFolha;
	}
	function setDataCertidao($dataCertidao) {
		$this->dataCertidao = $dataCertidao;
	}
	function setBaixa($baixa) {
		$this->baixa = $baixa;
	}
	function setVisto($visto) {
		$this->visto = $visto;
	}
	function setCompetenciaInicial($competenciaInicial) {
        $this->competenciaInicial = $competenciaInicial;
    }
    function setValorDependente($valorDependente) {
        $this->valorDependente = $valorDependente;
    }
	function GetCodigo() {
       return $this->codigo;
    }
	function GetNome() {
        return $this->nome;
    }
	function GetSexo() {
        return $this->sexo;
    }
	function Getcodfuncionario() {
        return $this->codfuncionario;
    }
	function GetSalariofamilia() {
        return $this->salariofamilia;
    }	
	function GetIrrf() {
        return $this->irrf;
    }
	function GetParentesco() {
		return $this->parentesco;
	}
	function GetNumOrdem() {
        return $this->numOrdem;
	}
	function GetLocalNascimento() {
		return $this->localNascimento;
	}
	function GetCartorio() {
        return $this->cartorio;
	}
	function GetNumRegistro() {
		return $this->numRegistro;
	}
	function GetNumLivro() {
		return $this->numLivro;
	}
	function GetNumFolha() {
        return $this->numFolha;
	}
	function GetDataCertidao() {
		return $this->dataCertidao;
	}
	function GetBaixa() {
        return $this->baixa;
	}
	function GetVisto() {
        return $this->visto;
	}
	function getCompetenciaInicial() {
        return $this->competenciaInicial;
    }
    function getValorDependente() {
        return $this->valorDependente;
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
		$query = "INSERT INTO dependente(nome, nascimento, sexo, codfuncionario, salariofamilia, irrf, parentesco, numOrdem, localNascimento, cartorio, numRegistro, numLivro, numFolha, dataCertidao, baixa, visto, competenciaInicial) VALUES ('$this->nome','$this->nascimento','$this->sexo','$this->codfuncionario','$this->salariofamilia','$this->irrf','$this->parentesco','$this->numOrdem','$this->localNascimento','$this->cartorio','$this->numRegistro','$this->numLivro','$this->numFolha','$this->dataCertidao','$this->baixa','$this->visto','$this->competenciaInicial')";
		$conexao->query($query);
	}
	function deletar($conexao, $cod) {
		$query = "delete from dependente where cod= '$cod'";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
		}
	function alterar($conexao,$cod) {
		$query = "UPDATE dependente SET nome='$this->nome',nascimento='$this->nascimento',sexo='$this->sexo',codfuncionario='$this->codfuncionario',salariofamilia='$this->salariofamilia',irrf='$this->irrf' ,parentesco='$this->parentesco' ,numOrdem='$this->numOrdem' ,localNascimento='$this->localNascimento' ,cartorio='$this->cartorio' ,numRegistro='$this->numRegistro' ,numLivro='$this->numLivro' ,numFolha'$this->numFolha' ,dataCertidao='$this->dataCertidao' ,baixa='$this->baixa' ,visto='$this->visto' ,competenciaInicial='$this->competenciaInicial' WHERE cod= $cod";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
	
	}
}