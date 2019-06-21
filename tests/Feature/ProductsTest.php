<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_create_products()
    {
        $this->signIn(null, 'admin');

        $this->get('/admin/products/create')->assertStatus(200);

        $attributes = factory(Product::class)->raw();

        $attributes['image_src'] = UploadedFile::fake()->image('test.jpg');

        $this->post('/admin/products', $attributes)->assertRedirect('/admin/products');

        $this->assertDatabaseHas('products', [
            'name' => $attributes['name'],
            'description' => $attributes['description'],
            'image_src' => 'test.jpg'
        ]);
    }

    /** @test */
    public function admin_can_delete_products()
    {
        $product = factory(Product::class)->create();

        $this->signIn(null, 'admin');

        $this->delete("/admin/products/{$product->id}")->assertRedirect('/admin/products');

        $this->assertDatabaseMissing('products', $product->only('id'));
    }

    /** @test */
    public function admin_can_update_products()
    {
        $product = factory(Product::class)->create();

        $this->actingAs($this->signIn(null, 'admin'))
            ->patch("/admin/products/{$product->id}", $attributes = [
                'name' => 'Changed',
                'description' => 'Changed',
                'type_id' => factory(\App\Type::class)->create()->id,
                'period_id' => factory(\App\Period::class)->create()->id,
                'video_link' => 'https://www.youtube.com/watch?v=h3ilLEN1Qew'
            ])
            ->assertRedirect('/admin/products');

        $this->get("/admin/products/{$product->id}/edit")->assertOk();

        $attributes['video_link'] = 'h3ilLEN1Qew';
                
        $this->assertDatabaseHas('products', $attributes);
    }

    /** @test */
    public function products_are_displayed_paginated()
    {
        $this->withoutExceptionHandling();

        $products = factory(Product::class, 25)->create();

        $this->signIn(null, 'admin');

        $this->get("/admin/products/")
        ->assertSee($products[0]->name)
        ->assertSee($products[9]->name)
        ->assertViewMissing($products[10]->name)
        ->assertViewMissing($products[24]->name);
    }
}
