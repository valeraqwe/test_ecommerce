<?php

namespace Tests\Feature;

use App\Models\Currency;
use App\Models\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;



    /** @test */
    public function a_product_can_be_created()
    {
        Currency::create(['name' => 'USD']);

        $response = $this->post('/products', [
            'title' => 'Test Product',
            'price' => 99.99,
            'currency_id' => 1,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('products', ['title' => 'Test Product']);
    }
}

