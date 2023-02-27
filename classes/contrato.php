<?php

class contrato {
	private $cod;
	private $tipo;
	private $codFuncionario;
	private $codEmpresa;
	private $dataInicio;
	private $dataFim;
	private $cargo;
	private $cbo;
	private $salario;
	private $jornada;
	private $experiencia;
	private $diasExperiencia;
	private $valeTransporte;
	private $periculosidade;
	private $insalubridade;
	private $escala;

	//contrato de trabalho
	private $regime;
	private $atividades;
	private $servico;
	private $rotinaPagamento;
	private $tipoPagamento;
	private $contribuicaoSindical;
	private $enderecoTrabalho;
	private $vigorContrato;
	private $regiaoRecrutar;
	private $prazoRecrutamento;
	private $multaRecrutamento;
	private $multaVinculo;
	private $foro;

	//registro
    private $numOrdem;
    private $numMatricula;
    private $autenticacao;
    private $secao;
    private $salarioInicial;
    private $comissoes;
    private $tarefa;
    private $entradaTrabalho;
    private $refeicao;
    private $saidaTrabalho;
    private $descansoSemanal;
    private $fgts;
	
	function __construct( $cod,$tipo,$codFuncionario,$codEmpresa,$dataInicio, $dataFim,$cargo,$cbo,$salario, $jornada,$experiencia,$diasExperiencia,$valeTransporte, $periculosidade,$insalubridade,$escala,$regime,$servico,$atividades,$rotinaPagamento,$tipoPagamento,$contribuicaoSindical,$enderecoTrabalho,$vigorContrato,$regiaoRecrutar,$prazoRecrutamento,$multaRecrutamento,$multaVinculo,$foro, $numOrdem, $numMatricula, $autenticacao, $secao, $salarioInicial, $comissoes, $tarefa, $entradaTrabalho, $refeicao, $saidaTrabalho, $descansoSemanal, $fgts){
		$this->cod= $cod;
		$this->tipo=$tipo;
		$this->codFuncionario=$codFuncionario;
		$this->codEmpresa=$codEmpresa;
		$this->dataInicio=$dataInicio;
		$this->dataFim=$dataFim;
		$this->cargo=$cargo;
		$this->cbo=$cbo;
		$this->salario=$salario;
		$this->jornada=$jornada;
		$this->experiencia=$experiencia;
		$this->diasExperiencia=$diasExperiencia;
		$this->valeTransporte=$valeTransporte;
		$this->periculosidade=$periculosidade;
		$this->insalubridade=$insalubridade;
		$this->escala=$escala;
		$this->regime=$regime;
		$this->servico=$servico;
		$this->atividades=$atividades;
		$this->rotinaPagamento=$rotinaPagamento;
		$this->tipoPagamento=$tipoPagamento;
		$this->contribuicaoSindical=$contribuicaoSindical;
		$this->enderecoTrabalho=$enderecoTrabalho;
		$this->vigorContrato=$vigorContrato;
		$this->regiaoRecrutar=$regiaoRecrutar;
		$this->prazoRecrutamento=$prazoRecrutamento;
		$this->multaRecrutamento=$multaRecrutamento;
		$this->multaVinculo=$multaVinculo;
		$this->foro=$foro;
		$this->numOrdem=$numOrdem;
        $this->numMatricula=$numMatricula;
        $this->autenticacao=$autenticacao;
        $this->dataRegistro=$dataRegistro;
        $this->naturezaCargo=$naturezaCargo;
        $this->secao=$secao;
        $this->salarioInicial=$salarioInicial;
        $this->comissoes=$comissoes;
        $this->tarefa=$tarefa;
        $this->entradaTrabalho=$entradaTrabalho;
        $this->refeicao=$refeicao;
        $this->saidaTrabalho=$saidaTrabalho;
        $this->descansoSemanal=$descansoSemanal;
        $this->fgts=$fgts;
	}
	function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
	function setTipo($tipo) {
        $this->tipo = $tipo;
    }
	function setCodFuncionario($codFuncionario) {
        $this->codFuncionario = $codFuncionario;
    }
	function setCodEmpresa($codEmpresa) {
        $this->codEmpresa = $codEmpresa;
    }
	function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }
	function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }
	function setCargo($cargo) {
        $this->cargo = $cargo;
    }
	function setCbo($Cbo) {
        $this->Cbo = $Cbo;
    }
	function setSalario($salario) {
        $this->salario = $salario;
    }
	function setJornada($jornada) {
        $this->jornada = $jornada;
    }
	function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
	function setDiasExperiencia($diasExperiencia) {
        $this->diasExperiencia = $diasExperiencia;
    }
	function setValeTransporte($valeTransporte) {
        $this->valeTransporte = $valeTransporte;
    }
	function setPericulosidade($Periculosidade) {
        $this->Periculosidade = $periculosidade;
    }
	function setInsalubridade($insalubridade) {
        $this->insalubridade = $insalubridade;
    }
	function setEscala($escala) {
        $this->escala = $escala;
    }
	function setRegime($regime) {
		$this->regime = $regime;
	}
	function setServico($servico) {
		$this->servico = $servico;
	}
	function setAtividades($atividades) {
		$this->atividades = $atividades;
	}
	function setRotinaPagamento($rotinaPagamento) {
		$this->rotinaPagamento = $rotinaPagamento;
	}
	function setTipoPagamento($tipoPagamento) {
		$this->tipoPagamento = $tipoPagamento;
	}
	function setContribuicaoSindical($contribuicaoSindical){
		$this->contribuicaoSindical = $contribuicaoSindical;
	}
	function setEnderecoTrabalho($enderecoTrabalho) {
		$this->enderecoTrabalho = $enderecoTrabalho;
	}
	function setVigorContrato($vigorContrato) {
		$this->vigorContrato = $vigorContrato;
	}
	function setRegiaoRecrutar($regiaoRecrutar){
		$this->regiaoRecrutar = $regiaoRecrutar;
	}
	function setPrazoRecrutamento($prazoRecrutamento){
		$this->prazoRecrutamento = $prazoRecrutamento;
	}
	function setMultaRecrutamento($multaRecrutamento){
		$this->multaRecrutamento = $multaRecrutamento;
	}
	function setMultaVinculo($multaVinculo){
		$this->multaVinculo = $multaVinculo;
	}
	function setForo($foro){
		$this->foro = $foro;
	}
	function setNumOrdem($numOrdem) {
        $this->numOrdem = $numOrdem;
    }
    function setNumMatricula($numMatricula) {
        $this->numMatricula = $numMatricula;
    }
    function setAutenticacao($autenticacao) {
        $this->autenticacao = $autenticacao;
    }
    function setDataRegistro($dataRegistro) {
        $this->dataRegistro = $dataRegistro;
    }
    function setNaturezaCargo($naturezaCargo) {
        $this->naturezaCargo = $naturezaCargo;
    }
    function setSecao($secao) {
        $this->secao = $secao;
    }
    function setTarefa($tarefa) {
        $this->tarefa = $tarefa;
    }
    function setEntradaTrabalho($entradaTrabalho) {
        $this->entradaTrabalho = $entradaTrabalho;
    }
    function setRefeicao($refeicao) {
        $this->refeicao = $refeicao;
    }
    function setSaidaTrabalho($saidaTrabalho) {
        $this->saidaTrabalho = $saidaTrabalho;
    }
    function setDescansoSemanal($descansoSemanal) {
        $this->descansoSemanal = $descansoSemanal;
    }
    function setFgts($fgts) {
        $this->fgts = $fgts;
    }
	function getCodigo() {
        return $this->codigo; 
    }
	function getTipo() {
        return $this->tipo; 
    }
	function getCodFuncionario() {
        return $this->codFuncionario;
    }
	function getCodEmpresa() {
        return $this->codEmpresa; 
    }
	function getDataInicio() {
        return $this->dataInicio; 
    }
	function getDataFim() {
        return $this->dataFim; 
    }
	function getCargo() {
        return $this->cargo; 
    }
	function getCbo() {
        return $this->Cbo; 
    }
	function getSalario() {
        return $this->salario; 
    }
	function getJornada() {
        return $this->jornada; 
    }
	function getExperiencia() {
        return $this->experiencia; 
    }
	function getDiasExperiencia() {
        return $this->diasExperiencia; 
    }
	function getValeTransporte() {
        return $this->valeTransporte;
    }
	function getPericulosidade() {
        return $this->Periculosidade ; 
    }
	function getInsalubridade() {
        return $this->insalubridade ;
    }
	function getEscala() {
        return $this->escala ; 
    }
	function getRegime() {
        return $this->regime ; 
    }
	function getServico() {
        return $this->servico ; 
    }
	function getAtividades() {
		return $this->atividades ;
	}
	function getRotinaPagamento() {
		return $this->rotinaPagamento ;
	}
	function getTipoPagamento() {
		return $this->tipoPagamento ;
	}
	function getContribuicaoSindical() {
		return $this->contribuicaoSindical ;
	}
	function getEnderecoTrabalho() {
		return $this->enderecoTrabalho ;
	}
	function getVigorContrato() {
		return $this->vigorContrato ;
	}
	function getRegiaoRecrutar() {
		return $this->regiaoRecrutar ;
	}
	function getPrazoRecrutamento() {
		return $this->prazoRecrutamento ;
	}
	function getMultaRecrutamento() {
		return $this->multaRecrutamento ;
	}
	function getMultaVinculo() {
		return $this->multaVinculo ;
	}
	function getForo() {
        return $this->foro ;
	}
    function getNumOrdem() {
        return $this->numOrdem;
    }
    function getNumMatricula() {
        return $this->numMatricula;
    }
    function getAutenticacao() {
        return $this->autenticacao;
    }
    function getDataRegistro() {
        return $this->dataRegistro;
    }
    function getNaturezaCargo() {
        return $this->naturezaCargo;
    }
    function getSecao() {
        return $this->secao;
    }
    function getTarefa() {
        return $this->tarefa;
    }
    function getEntradaTrabalho() {
        return $this->entradaTrabalho;
    }
    function getRefeicao() {
        return $this->refeicao;
    }
    function getSaidaTrabalho() {
        return $this->saidaTrabalho;
    }
    function getDescansoSemanal() {
        return $this->descansoSemanal;
    }
    function getFgts() {
        return $this->fgts;
    }
	
function insere($conexao) {
		
		$query = "INSERT INTO contrato(tipo, codFuncioncionario, codEmpresa, dataInicio, dataFim, cargo, cbo, salario, jornada, experiencia, diasExperiencia, valeTransporte, periculosidade, insalubridade, escala, regime, atividades, rotinaPagamento, tipoPagamento, contibuicaoSindical, enderecoTrabalho, vigorTrabalho, regiaoRecrutar, prazoRecrutamento, multaRecrutamento, multaVinculo, foro, numOrdem, numMatricula, autenticacao, secao, salarioInicial, comissoes, tarefa, entradaTrabalho, refeicao, saidaTrabalho, descansoSemanal, fgts) VALUES ('$this->tipo','$this->codFuncionario','$this->codEmpresa','$this->dataInicio','$this->dataFim','$this->cargo','$this->cbo','$this->salario','$this->jornada','$this->experiencia','$this->diasExperiencia','$this->valeTransporte','$this->periculosidade','$this->insalubridade','$this->escala','$this->regime','$this->atividades','$this->rotinaPagamento','$this->tipoPagamento','$this->contribuicaoSindical','$this->enderecoTrabalho','$this->vigorContrato','$this->regiaoRecrutar','$this->prazoRecrutamento','$this->multaRecrutamento','$this->multaVinculo','$this->foro','$this->numOrdem','$this->numMatricula','$this->getAutenticacao','$this->secao','$this->salarioInicial','$this->comissoes','$this->tarefa','$this->entradaTrabalho','$this->refeicao','$this->saidaTrabalho','$this->descansoSemanal','$this->fgts')";
		$conexao->query($query);
		//print $conexao->errorCode(); 
		print_r($conexao->errorInfo());		
		
	}	
function deletar($conexao, $cod) {
		$query = "delete from contrato where cod= '$cod'";
		$stmt=$conexao->prepare($query);
		$stmt->execute();
		}



}