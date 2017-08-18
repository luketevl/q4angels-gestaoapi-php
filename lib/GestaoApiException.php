<?php
namespace GestaoApi\Sdk;

class GestaoApiException{
  /**
  * @param string $message
  */
  public function __construct(string $message ){
    parent::__construct(json_encode($message), 0);
  }
}