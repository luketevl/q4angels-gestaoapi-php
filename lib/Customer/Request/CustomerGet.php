<?php
namespace QuestaoApi\Sdk\Customer\Request;

use QuestaoApi\Sdk\RequestInterface;

class CustomerGet implements RequestInterface{

    /**
      * @var int | Identificador
    */
    private $id;

    public function __construct(int $id){
      $this->id = $id;
    }

    /**
      * @return array
    */
    public function getPayload() : array{
      return [];
    }

    /**
      * @return string
    */
    public function getPath() : string{
      return sprintf('clientes/%d', $this->id);
    }

    /**
      * @return string
    */
    public function getMethod() : string{
      return self::HTTP_GET;
    }
}