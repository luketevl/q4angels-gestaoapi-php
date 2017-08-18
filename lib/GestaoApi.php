<?php
namespace GestaoApi\Sdk;

use GuzzleHttp\Client as GuzzleClient;

class GestaoApi{

  private $client;

  private $customerHandle;
  
  /**
  * @param string $baseUrl
  * @param string $apikey
  * @param int|null $timeout
  * @param array $headers
  */
  public function __construct(string $baseUrl, string $apikey, int $timeout, array $header = [] ){
    $this->client = new Client(
      new GuzzleClient([
        'base_url' => $baseUrl,
        'base_uri' => $baseUrl,
        'defaults' => [
          'headers'   => $headers,
          'timeout'   => $timeout
        ]
      ], $apikey)
    ) ;
  }

  /**
  * @return CustomerHandler
  */

  public function customer() : CustomerHandler{
    if(!$this->customerHandler instanceof CustomerHandler){
      $this->customerHandler = new Customer($this->client);
    }
    return $this->customerHandler;
  }


}