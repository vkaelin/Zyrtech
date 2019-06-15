<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Set;
use App\Product;
use App\Type;
use App\Period;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // admin
        factory(User::class, 1)->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@doe.com',
            'role_id' => 1,
        ]);

        // owner
        factory(User::class, 1)->create([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@doe.com',
            'role_id' => 2,
        ]);

        // chefs
        User::all()->each(function ($user) {
            $user->chefs()->saveMany(factory(User::class, 50)->make([
                'role_id' => 3,
            ]));
        });

        // types
        factory(Type::class, 1)->create([
            'name' => 'Fruit'
        ]);

        factory(Type::class, 1)->create([
            'name' => 'Légume'
        ]);

        // periods
        factory(Period::class, 1)->create([
            'name' => 'Eté'
        ]);

        // products
        factory(Product::class, 25)->create([
            'type_id' => 1,
            'period_id' => 1
        ]);

        // sets
        for ($i = 0; $i < 50; $i++) {
            User::first()->sets()->create([
                'code' => str_random(10),
                'chef_id' => User::inRandomOrder()->where('role_id', 3)->first()->id
            ]);
        }

        // sets products
        User::first()->sets()->each(function ($set) {
            $nbProducts = rand(1, 10);
            for ($i = 0; $i < $nbProducts; $i++) {
                $product = Product::inRandomOrder()->first();

                if (! $set->products()->where('product_id', $product->id)->exists()) {
                    $set->products()->attach($product);
                }
            }
        });
    }
}
