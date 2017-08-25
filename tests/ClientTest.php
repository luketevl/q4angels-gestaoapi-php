<?php
namespace GestaoApi\SdkTest;

use GuzzleHttp\Client as GuzzleClient;
use PagarMe\Sdk\Client;
use PagarMe\Sdk\RequestInterface;

class ClientTest extends \PHPUnit_Framework_TestCase{
  
  const REQUEST_PATH  = 'test';
  const CONTENT       = 'sample content';
  const API_KEY       = 'myApiKey';

  private $guzzleClientMoack;
  private $requestMock;

  public function setup(){
    $this-guzzleClientMock = $this->getMockBuilder('GuzzleHttp\Client')
                              ->disableOriginalConstructor()
                              ->getMock();

    $this->gestaoApiRequestMock = $this->getMockBuilder('GestaoApi\Sdk\RequestInterface')
                                  ->disableOriginalConstructor()
                                  ->getMock();

    $this->gestaoApiRequestMock->method('getMethod')->willReturn(RequestInterface::HTTP_POST);
    $this->gestaoApiRequestMock->method('getPath')->willReturn(RequestInterface::REQUEST_PATH);
    $this->gestaoApiRequestMock->method('getPayload')->willReturn(
      ['content' => self::CONTENT]
    );
  }

  /**
    * @test
    */
  public function mustSendRequest(){
    if($this->isUsingLegacyGuzzle()){
      $this->guzzleClientMock->method('createRequest')
        ->willReturn($this->getMock('GuzzleHttp\Message\RequestInterface'));
    }

    $responseMock = $this->getResponseMock();

    $this->guzzleClientMock->expects($this->once())->method('send')
      ->willReturn($responseMock);

    $client = new Client(
      $this->guzzleClientMock,
      self::API_KEY
    );
  // @todo
    // $client->send()
  }

}