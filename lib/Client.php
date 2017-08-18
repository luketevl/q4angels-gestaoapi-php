<?php
namespace GestaoApi\Sdk;

use GuzzleHttp\Client as GuzzleClient;

class Client{
  
  /**
  * @var string
  */
  private $apiKey;

  /**
  * @var GuzzleClient
  */
  private $client;

  /**
  * @var int
  */
  private $timeout;

  /**
  * @param \GuzzleHttp\Client $client
  * @param string $apiKey
  * @param int|null $timeout
  */

  public function __construct(GuzzleClient $client, string $apiKey, int $timeout){
    $this->client = $cliente;
    $this->apiKey = $apiKey;
    $this->timeout = $timeout;
  }


  /**
  * @param RequestInterface $apiRequest
  * @return \stdClass
  * @throws ClientException
  */

  public function send(RequestInterface $apiRequest){
    $request = $this->buildRequest($apiRequest);

    try{
      $response = $this->client->send($request, ['timeout' => $this->timeout]);
      return json_decode($response->getBody()->getContents());
    }
    catch(\GuzzleHttp\Exception\RequestException $exception){
      throw new ClientException(
        $exception->getMessage(),
        $exception->getCode()
      );
    }
  }


  /**
    * @param RequestInterface $apiRequest
    * @return mixed
    */

  public function buildRequest($apiRequest){
    if(class_exists('\\GuzzleHttp\\Message\\Request')){
      return $this->client->createRequest(
        $apiRequest->getMethod(),
        $apiRequest->getPath(),
        ['json' => $this->_buildBody($apiRequest)]
      );
    }

    else if (class_exists('\\GuzzleHttp\\Psr7\\Request')) {
        return new \GuzzleHttp\Psr7\Request(
            $apiRequest->getMethod(),
            $apiRequest->getPath(),
            ['Content-Type' => 'application/json'],
            json_encode($this->buildBody($apiRequest))
        );
    }
    throw new \Exception("Can't build request");
  }


  /**
    * @param RequestInterface $apiRequest
    * @return array
    */
  private function _buildBody(RequestInterface $request){
    return array_merge($request->getPayload(), ['api_key' => $this->apiKey]);
  }

}