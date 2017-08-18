<?php
namespace GestaoApi\Sdk;

interface RequestInterface{

  const HTTP_GET    = 'GET';
  const HTTP_POST   = 'POST';
  const HTTP_PUT    = 'PUT';
  const HTTP_DELETE = 'DELETE';

  /**
  * @return array
  */
  public function getPayload() : array;

  /**
  * @return string
  */
  public function getPath() : string;

  /**
  * @return string
  */
  public function getMethod() : string;
}