<?php

namespace QuestaoApi\Sdk\Customer\Request;

use QuestaoApi\Sdk\RequestInterface;

class CustomerList implements RequestInterface{
  /**
     * @var int | Página da listagem
     */
    private $page;
    /**
     * @var int | Quantidades de itens a retornar
     */
    private $per_page;
    /**
     * @param int $page
     * @param int $per_page
     */
    public function __construct($page, $per_page){
        $this->page     = $page;
        $this->per_page = $per_page;
    }
    /**
     * @return array
     */
    public function getPayload() : array{
        return [
            'page'      => $this->page,
            'per_page'  => $this->per_page,
        ];
    }
    /**
     * @return string
     */
    public function getPath() : string{
        return 'customers';
    }
    /**
     * @return string
     */
    public function getMethod() : string{
        return self::HTTP_GET;
    }
}