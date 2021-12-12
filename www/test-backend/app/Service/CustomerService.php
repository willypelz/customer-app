<?php


namespace App\Service;


use App\Library\Traits\IceAndFireTrait;

class CustomerService
{
    use IceAndFireTrait;


    /**
     * Filtering api response customer with any of the available parameter
     * supported by the ice and fire endpoint.
     * @param $params
     * @param $query
     * @return array|string
     */
    public function getFilteredCustomers($params, $query)
    {
        return $this->getWithFilter("customers?$params=$query");
    }

}
