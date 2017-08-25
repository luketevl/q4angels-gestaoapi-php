<?php
namespace GestaoApi\Sdk\Customer;

use \GestaoApi\SdkFillable;

class Customer{


  /**
    * @var int
  */
  private $id;

/**
    * @var string
  */
  private $rg;

/**
    * @var string
  */
  private $codigo;

/**
    * @var string
  */
  private $tipo;

/**
    * @var string
  */
  private $exterior;

/**
    * @var string
  */
  private $cpf;

/**
    * @var string
  */
  private $cnpj;

/**
    * @var string
  */
  private $razao_social;

/**
    * @var string
  */
  private $nome_fantasia;

/**
    * @var string
  */
  private $ie;

/**
    * @var string
  */
  private $im;

/**
    * @var string
  */
  private $responsavel;

/**
    * @var string
  */
  private $data_alteracao;

/**
    * @var \DateTime
  */
  private $data_cadastro;

/**
    * @var bool
  */
  private $ativo;

/**
    * @var \DateTime
  */
  private $data_nascimento;

/**
    * @var string
  */
  private $sexo;

/**
    * @var string
  */
  private $profissao;

/**
    * @var string
  */
  private $filiacao_mae;

/**
    * @var string
  */
  private $filiacao_pai;

/**
    * @var string
  */
  private $estado_civil;

/**
    * @var float
  */
  private $renda_mensal;

/**
    * @var bool
  */
  private $recebe_email;

/**
    * @var float
  */
  private $limite_credito;

/**
    * @var float
  */
  private $saldo;

/**
    * @var string
  */
  private $informacao_adicional;

/**
    * @var GestaoApi\Sdk\Contact
  */
  private $contatos;

/**
    * @var GestaoApi\Sdk\Address
  */
  private $enderecos;

/**
    * @var GestaoApi\Sdk\User
  */
  private $vendedores;


/**
    * @var GestaoApi\Sdk\User
  */
  private $vendedores;

public function __construct(array $arrayData){
  $this->fill($arrayData);
}



/**
    * @codeCoverageIgnore
  */
  public function getId() : int{
    return $this->id;
  }

/**
    * @codeCoverageIgnore
  */
  public function getRg() : string{
    return $this->rg;
  }

/**
    * @codeCoverageIgnore
  */
  public function getCodigo() : string{
    return $this->codigo;
  }

/**
    * @codeCoverageIgnore
  */
  public function getTipo() : string{
    return $this->tipo;
  }

/**
    * @codeCoverageIgnore
  */
  public function getExterior() : string{
    return $this->exterior;
  }

/**
    * @codeCoverageIgnore
  */
  public function getCpf() : string{
    return $this->cpf;
  }

/**
    * @codeCoverageIgnore
  */
  public function getCnpj() : string{
    return $this->cnpj;
  }

/**
    * @codeCoverageIgnore
  */
  public function getRazao_social() : string{
    return $this->razao_social;
  }

/**
    * @codeCoverageIgnore
  */
  public function getNome_fantasia() : string{
    return $this->nome_fantasia;
  }

/**
    * @codeCoverageIgnore
  */
  public function getIe() : string{
    return $this->ie;
  }

/**
    * @codeCoverageIgnore
  */
  public function getIm() : string{
    return $this->im;
  }

/**
    * @codeCoverageIgnore
  */
  public function getResponsavel() : string{
    return $this->responsavel;
  }

/**
    * @codeCoverageIgnore
  */
  public function getData_alteracao() : \DateTime{
    return $this->data_alteracao;
  }

/**
    * @codeCoverageIgnore
  */
  public function getData_cadastro() : \DateTime{
    return $this->data_cadastro;
  }

/**
    * @codeCoverageIgnore
  */
  public function getAtivo() : bool{
    return $this->ativo;
  }

/**
    * @codeCoverageIgnore
  */
  public function getData_nascimento() : \DateTime{
    return $this->data_nascimento;
  }

/**
    * @codeCoverageIgnore
  */
  public function getSexo() : string{
    return $this->sexo;
  }

/**
    * @codeCoverageIgnore
  */
  public function getProfissao() : string{
    return $this->profissao;
  }

/**
    * @codeCoverageIgnore
  */
  public function getFiliacao_mae() : string{
    return $this->filiacao_mae;
  }

/**
    * @codeCoverageIgnore
  */
  public function getFiliacao_pai() : string{
    return $this->filiacao_pai;
  }

/**
    * @codeCoverageIgnore
  */
  public function getEstado_civil() : string{
    return $this->estado_civil;
  }

/**
    * @codeCoverageIgnore
  */
  public function getRenda_mensal() : float{
    return $this->renda_mensal;
  }

/**
    * @codeCoverageIgnore
  */
  public function getRecebe_email() : bool{
    return $this->recebe_email;
  }

/**
    * @codeCoverageIgnore
  */
  public function getLimite_credito() : float{
    return $this->limite_credito;
  }

/**
    * @codeCoverageIgnore
  */
  public function getSaldo() : float{
    return $this->saldo;
  }

/**
    * @codeCoverageIgnore
  */
  public function getInformacao_adicional() : string{
    return $this->informacao_adicional;
  }

/**
    * @codeCoverageIgnore
  */
  public function getContatos() : array{
    return $this->contatos;
  }

/**
    * @codeCoverageIgnore
  */
  public function getEnderecos() : array{
    return $this->enderecos;
  }

  /**
    * @codeCoverageIgnore
  */
  public function getVendedores() : array{
    return $this->vendedores;
  }


}