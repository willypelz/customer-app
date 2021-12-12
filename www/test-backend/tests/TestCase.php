<?php

namespace Tests;

use App\Exceptions\Handler;
use App\Models\Customer;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Http\JsonResponse;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $customer;

    /**
     *
     * factory model connection for testing
     */
    public function setUp(): void
    {
        parent::setUp();
        /**
         * This disables the exception handling to display the stacktrace on the console
         * the same way as it shown on the browser
         */
        $this->disableExceptionHandling();

        \Artisan::call('migrate');

        $customers = Customer::factory()->times(3)->create();
        $this->customer = $customers[0];
    }

    protected function disableExceptionHandling()
    {

    }

}
