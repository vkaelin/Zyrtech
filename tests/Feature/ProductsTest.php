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
        $this->withoutExceptionHandling();

        Storage::fake('avatars');

        $this->signIn(null, 'admin');

        $this->get('/admin/products/create')->assertStatus(200);

        $attributes = factory(Product::class)->raw();

        $attributes['image_src'] = UploadedFile::fake()->image('testUpload.jpg');

        $this->post('/admin/products', $attributes)->assertRedirect('/admin/products');

        $this->assertDatabaseHas('products', [
            'name' => $attributes['name'],
            'description' => $attributes['description'],
            'image_src' => 'testUpload.jpg'
        ]);
    }
}
