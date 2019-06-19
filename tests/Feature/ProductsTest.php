<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_create_products()
    {
        $this->withoutExceptionHandling();
        $this->signIn(null, 'admin');

        $this->get('/admin/products/create')->assertStatus(200);
        $this->post('/admin/products', $attributes = factory(Product::class)->raw());

        // $this->assertDatabaseHas('products', $attributes); 
    }
}
