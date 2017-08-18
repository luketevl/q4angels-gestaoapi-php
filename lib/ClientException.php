<?php
namespace GestaoApi\Sdk;

class ClientException extends GestaoApiException{
  /**
  * @param string $message
  * @param int $code
  */
  public function __construct(string $message, int $code ){
    parent::__construct($message, $code);
  }
}