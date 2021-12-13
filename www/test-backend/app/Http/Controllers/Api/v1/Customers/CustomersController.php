<?php

/************************************
 ** File: Customer Controller file  ******
 ** Date: 12th December 2021  ************
 ** Customer Controller file  ************
 ** Author: Asefon pelumi M. *********
 ** Senior Software Developer ********
 * Email: pelumiasefon@gmail.com  ***
 * **********************************/

namespace App\Http\Controllers\Api\v1\Customers;

use App\Http\Controllers\Controller;
use App\Http\Library\RestFullResponse\ApiResponse;
use App\Http\Repository\CustomerRepository;
use App\Http\Resources\v1\Customers\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;

class CustomersController extends Controller
{

    protected $customerRepository;
    protected $apiResponse;
    protected $customerResource;


    /**
     * CustomersController constructor.
     * @param CustomerRepository $customerRepository
     * @param ApiResponse $apiResponse
     * @param CustomerResource $customerResource
     */
    public function __construct(
        CustomerRepository $customerRepository,
        ApiResponse $apiResponse,
        CustomerResource $customerResource
    )
    {
        $this->customerRepository = $customerRepository;
        $this->apiResponse = $apiResponse;
        $this->customerResource = $customerResource;
    }

    /**
     * @group Customer management
     *
     *  Customer Collection
     *
     * An Endpoint to get all Customer in the system
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @apiResourceCollection \App\Http\Resources\v1\Customer\CustomerResourceCollection
     * @apiResourceModel \App\Models\Customer
     */
    public function index()
    {
        $customers = $this->customerRepository->getAllCustomers();
        return $this->apiResponse->respondWithDataPagination(
            $this->customerResource->transformCollection($customers->items()),  $customers, JsonResponse::HTTP_OK);
    }

    /**
     * @group Customer management
     *
     *  Customers Collection
     *
     * An Endpoint to get single Customer detail in the system
     *
     * @param Customer $customer
     * @return \Illuminate\Http\JsonResponse
     * @apiResourceCollection \App\Http\Resources\v1\Customer\CustomerResourceCollection
     * @apiResourceModel \App\Models\Customer
     */
    public function show(Customer $customer)
    {
        return $this->apiResponse->respondWithDataStatusAndCodeOnly(
            $this->customerResource->transform($customer));
    }
}
