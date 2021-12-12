<?php

/************************************
 ** File: Customer Repository file  ******
 ** Date: 10th June 2020  ************
 ** Customer Repository file  ************
 ** Author: Asefon pelumi M. *********
 ** Senior Software Developer ********
 * Email: pelumiasefon@gmail.com  ***
 * **********************************/

namespace App\Http\Repository;


use App\Library\Providers\SearchProvider\Factories\SearchFactory;
use App\Models\Customer;

class CustomerRepository
{

    private $customer;

    /**
     * CustomerRepository constructor.
     * @param Customer $customer
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }


    /**
     * functions to get all customers
     *
     * @return Customer[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllCustomers()
    {
        return $this->customer->paginate(50);
    }


    /**
     * function to get single customer in the application
     * @param $table_field
     * @param $query
     * @return mixed
     */
    public function getSingleCustomer($table_field, $query)
    {
        return $this->customer->where($table_field, $query)->first();
    }

}
