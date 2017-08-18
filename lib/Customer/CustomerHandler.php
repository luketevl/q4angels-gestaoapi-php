<?php
namespace GestaoApi\Sdk\Customer;

use GestaoApi\Sdk\AbstractHandler;
use GestaoApi\Sdk\Client;
use GestaoApi\Sdk\Customer\Request\CustomerCreate;
use GestaoApi\Sdk\Customer\Request\CustomerGet;
use GestaoApi\Sdk\Customer\Request\CustomerList;
use GestaoApi\Sdk\Contact;
use GestaoApi\Sdk\Address;

class CustomerHandler extends AbstractHandler{
  use CustomBuilder;


    /**
     * @param string $razao_social
     * @param string $codigo
     * @param Address $address
     * @param Contact $contact
     */

     public function create(string $razao_social, string $codigo, Address $address, Contact $contact) : Customer{
       $request = $this->client->send($request);
       return $this->_buildCustomer($response); 
     }

     public function getList() : array{
       $request   = new CustomerList();
       $response  = $this->client-send($request);

       $customers = [];

       foreach($response as $customersResponse){
         $customers[] = $this->_buildCustomer($customersResponse);
       }

       return $customers;
     }

    /**
     * @param int $id
     */

     public function get(int $id) : Customer{
       $request = new CustomerGet($id);
       $response = $this->client->send($request);

       return $thi->_buildCustomer($response);
     }

}