<?php

namespace Tests\Feature\Api\v1;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

final class CustomerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test for _success_when_getting_all_customers_list.
     *
     * @return void
     */
    /** @test */
    public function it_returns_success_when_getting_all_customers() : void
    {
        $response = $this->getJson('/api/v1/customers');
        $response->assertStatus(JsonResponse::HTTP_OK)
            ->assertJson(["status_code" => JsonResponse::HTTP_OK]);
    }

    /**
     * A basic feature test for single_customer_when_is_fetched .
     *
     * @return void
     */
    /** @test */
    public function it_returns_single_customer_when_is_fetched() : void
    {
        $response = $this->getJson('/api/v1/customers/' . $this->customer->id);
        $response->assertStatus(JsonResponse::HTTP_OK)
            ->assertJson(["status_code" => JsonResponse::HTTP_OK]);
    }
}
