<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Set;

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
            $user->chefs()->saveMany(factory(App\User::class, 4)->make([
                'role_id' => 3,
            ]));
        });
    }
}
