<?php
namespace GestaoApi\Sdk\Customer\Request;

use QuestaoApi\Sdk\RequestInterface;
use QuestaoApi\Sdk\Address;
use QuestaoApi\Sdk\Contact;
use QuestaoApi\Sdk\User;


class CustomerCreate implements RequestInterface{


    /**
      * @var int | Identificador
    */
    private $id;

  /**
      * @var string | Registro Geral
    */
    private $rg;

  /**
      * @var string | Código que identifica unicamente o cliente. Não deve repetir em outro cliente.

    */
    private $codigo;

  /**
      * @var string | Indicação de pessoa Física ou Jurídica. F ou J
    */
    private $tipo;

  /**
      * @var string | Indica a origem do cliente: false para nacional e true para estrangeira.
    */
    private $exterior;

  /**
      * @var string | Número de CPF. Informe somente se pessoa física.
    */
    private $cpf;

  /**
      * @var string | Número de CNPJ. Informe somente se pessoa jurídica.
    */
    private $cnpj;

  /**
      * @var string | Nome do cliente quando pessoa física e razão social quando pessoa jurídica.
    */
    private $razao_social;

  /**
      * @var string | Nome informal. Informe somente se pessoa jurídica.
    */
    private $nome_fantasia;

  /**
      * @var string | Número de Inscrição Estadual.
    */
    private $ie;

  /**
      * @var string | Número de Inscrição Municipal. Informe somente se pessoa jurídica.
    */
    private $im;

  /**
      * @var string | Nome do responsável da empresa. Informe somente se pessoa jurídica.
    */
    private $responsavel;

  /**
      * @var string | Última data em que o cliente foi modificado.
    */
    private $data_alteracao;

  /**
      * @var \DateTime | Data em que o cliente foi adicionado no sistema.
    */
    private $data_cadastro;

  /**
      * @var bool | Registro Geral. Informe somente se pessoa física.
    */
    private $ativo;

  /**
      * @var \DateTime | Data de nascimento do cliente. Informe somente se pessoa física.
    */
    private $data_nascimento;

  /**
      * @var string | Genero do cliente. M ou F
    */
    private $sexo;

  /**
      * @var string | Profissão exercida pelo cliente. Informe somente se pessoa física.
    */
    private $profissao;

  /**
      * @var string | Nome da mãe. Informe somente se pessoa física.
    */
    private $filiacao_mae;

  /**
      * @var string | Nome do pai. Informe somente se pessoa física.
    */
    private $filiacao_pai;

  /**
      * @var string | Estado civil do cliente. Informe somente se pessoa física. "" "S" "C" "D" "V"
    */
    private $estado_civil;

  /**
      * @var float | Renda aproximada por mês. Informe somente se pessoa física.
    */
    private $renda_mensal;

  /**
      * @var bool | Informa se o cliente deve receber e-mails automáticos quando decorrente de algum evento no ERP. Um exemplo é o envio da NF-e para o destinatário quando ela é aprovada.
    */
    private $recebe_email;

  /**
      * @var float | Valor que o cliente terá de limite de crédito.

    */
    private $limite_credito;

  /**
      * @var float | Saldo Atual do cliente
    */
    private $saldo;

  /**
      * @var string | Coloque aqui as informações importantes que não tem um campo específico.
    */
    private $informacao_adicional;

  /**
      * @var GestaoApi\Sdk\Contact | nformações de telefone, e-mail, Twitter, etc...
    */
    private $contatos;

  /**
      * @var GestaoApi\Sdk\Address | Cadastro dos endereços do cliente.
    */
    private $enderecos;

    /**
      * @var GestaoApi\Sdk\User | Cadastro dos vendedores vinculados ao cliente.
    */
    private $vendedores;


      /**
      * $id,
      * @param $rg,
      * @param $codigo,
      * @param $tipo,
      * @param $exterior,
      * @param $cpf,
      * @param $cnpj,
      * @param $razao_social,
      * @param $nome_fantasia,
      * @param $ie,
      * @param $im,
      * @param $responsavel,
      * @param $data_alteracao,
      * @param $data_cadastro,
      * @param $ativo,
      * @param $data_nascimento,
      * @param $sexo,
      * @param $profissao,
      * @param $filiacao_mae,
      * @param $filiacao_pai,
      * @param $estado_civil,
      * @param $renda_mensal,
      * @param $recebe_email,
      * @param $limite_credito,
      * @param $saldo,
      * @param $informacao_adicional,
      * @param $contatos,
      * @param $enderecos,
      * @param $vendedores
      */
  public function __construct(
      int $id,
      string $rg,
      string $codigo,
      string $tipo,
      string $exterior,
      string $cpf,
      string $cnpj,
      string $razao_social,
      string $nome_fantasia,
      string $ie,
      string $im,
      string $responsavel,
      string $data_alteracao,
      \DateTime $data_cadastro,
      bool $ativo,
      \DateTime $data_nascimento,
      string $sexo,
      string $profissao,
      string $filiacao_mae,
      string $filiacao_pai,
      string $estado_civil,
      float $renda_mensal,
      bool $recebe_email,
      float $limite_credito,
      float $saldo,
      string $informacao_adicional,
      array $contatos,
      array $enderecos,
      array $vendedores
    ){
      $this->id                   = $id;
      $this->rg                   = $rg;
      $this->codigo               = $codigo;
      $this->tipo                 = $tipo;
      $this->exterior             = $exterior;
      $this->cpf                  = $cpf;
      $this->cnpj                 = $cnpj;
      $this->razao_social         = $razao_social;
      $this->nome_fantasia        = $nome_fantasia;
      $this->ie                   = $ie;
      $this->im                   = $im;
      $this->responsavel          = $responsavel;
      $this->data_alteracao       = $data_alteracao;
      $this->data_cadastro        = $data_cadastro;
      $this->ativo                = $ativo;
      $this->data_nascimento      = $data_nascimento;
      $this->sexo                 = $sexo;
      $this->profissao            = $profissao;
      $this->filiacao_mae         = $filiacao_mae;
      $this->filiacao_pai         = $filiacao_pai;
      $this->estado_civil         = $estado_civil;
      $this->renda_mensal         = $renda_mensal;
      $this->recebe_email         = $recebe_email;
      $this->limite_credito       = $limite_credito;
      $this->saldo                = $saldo;
      $this->informacao_adicional = $informacao_adicional;
      $this->contatos             = $contatos;
      $this->enderecos            = $enderecos;
      $this->vendedores           = $vendedores;
    }

    /**
    *  @return array
    */
  public function getPayload(){
      return [
        'id'                    => $this->id,
        'rg'                    => $this->rg,
        'codigo'                => $this->codigo,
        'tipo'                  => $this->tipo,
        'exterior'              => $this->exterior,
        'cpf'                   => $this->cpf,
        'cnpj'                  => $this->cnpj,
        'razao_social'          => $this->razao_social,
        'nome_fantasia'         => $this->nome_fantasia,
        'ie'                    => $this->ie,
        'im'                    => $this->im,
        'responsavel'           => $this->responsavel,
        'data_alteracao'        => $this->data_alteracao,
        'data_cadastro'         => $this->data_cadastro,
        'ativo'                 => $this->ativo,
        'data_nascimento'       => $this->data_nascimento,
        'sexo'                  => $this->sexo,
        'profissao'             => $this->profissao,
        'filiacao_mae'          => $this->filiacao_mae,
        'filiacao_pai'          => $this->filiacao_pai,
        'estado_civil'          => $this->estado_civil,
        'renda_mensal'          => $this->renda_mensal,
        'recebe_email'          => $this->recebe_email,
        'limite_credito'        => $this->limite_credito,
        'saldo'                 => $this->saldo,
        'informacao_adicional'  => $this->informacao_adicional,
        'contatos'              => $this->contatos,
        'enderecos'             => $this->enderecos,
        'vendedores'            => $this->vendedores,
      ];
    }

  /**
    *  @return string
  */
  public function getPath(){
    return 'clientes';
  }
  /**
  *  @return string
  */
  public function getMethod(){
    return self::HTTP_POST;
  }
}