<?php
namespace GestaoApi\Sdk\Customer;

trait CustomerBuilder{
  /**
     * @param array $customerData
     * @return Customer
     */
    private function _buildCustomer($customerData) : Customer
    {
        $customerData->address = new Address(
            get_object_vars($customerData->addresses[0])
        );
        $customerData->contacts = new Contact(
            get_object_vars($customerData->contacts[0])
        );
        $customerData->date_created = new \DateTime(
            $customerData->data_criacao
        );
        return new Customer(get_object_vars($customerData));
    }
}