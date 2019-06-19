<?php

use Illuminate\Database\Seeder;
use App\Type;
use App\Period;
use App\Label;
use App\Product;
use App\ProductLabel;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // types
        factory(Type::class, 1)->create([
            'name' => 'Fruit'
        ]);

        factory(Type::class, 1)->create([
            'name' => 'Légume'
        ]);

        // periods
        factory(Period::class, 1)->create([
            'name' => 'Saison'
        ]);

        factory(Period::class, 1)->create([
            'name' => 'Hors saison'
        ]);

        factory(Label::class, 1)->create([
            'name' => 'Local'
        ]);

        factory(Label::class, 1)->create([
            'name' => 'Label Vert'
        ]);

        factory(Label::class, 1)->create([
            'name' => 'Label bleu'
        ]);

        // products
        for ($i = 0; $i < 3; $i++) {
            factory(Product::class, 1)->create([
                'name' => 'Banane',
                'type_id' => Type::where('name', 'fruit')->first()->id,
                'period_id' => Period::where('name', 'Hors saison')->first()->id,
                'image_src' => 'banane.jpg'
            ]);

            factory(Product::class, 1)->create([
                'name' => 'Brocoli',
                'type_id' => Type::where('name', 'Légume')->first()->id,
                'period_id' => Period::where('name', 'Saison')->first()->id,
                'image_src' => 'brocoli.jpg'
            ]);

            factory(Product::class, 1)->create([
                'name' => 'Fraise',
                'type_id' => Type::where('name', 'Fruit')->first()->id,
                'period_id' => Period::where('name', 'Hors saison')->first()->id,
                'image_src' => 'fraise.jpg'
            ]);

            factory(Product::class, 1)->create([
                'name' => 'Framboise',
                'type_id' => Type::where('name', 'Fruit')->first()->id,
                'period_id' => Period::where('name', 'Hors saison')->first()->id,
                'image_src' => 'framboise.jpg'
            ]);

            factory(Product::class, 1)->create([
                'name' => 'Poire',
                'type_id' => Type::where('name', 'Fruit')->first()->id,
                'period_id' => Period::where('name', 'Saison')->first()->id,
                'image_src' => 'poire.jpg'
            ]);

            factory(Product::class, 1)->create([
                'name' => 'Pomme',
                'type_id' => Type::where('name', 'Fruit')->first()->id,
                'period_id' => Period::where('name', 'Saison')->first()->id,
                'image_src' => 'pomme.jpg'
            ]);

            factory(Product::class, 1)->create([
                'name' => 'Prune',
                'type_id' => Type::where('name', 'Fruit')->first()->id,
                'period_id' => Period::where('name', 'Saison')->first()->id,
                'image_src' => 'prune.jpg'
            ]);

            factory(Product::class, 1)->create([
                'name' => 'Salade',
                'type_id' => Type::where('name', 'Légume')->first()->id,
                'period_id' => Period::where('name', 'Saison')->first()->id,
                'image_src' => 'salade.jpg'
            ]);
        }

        // labels of products
        $labels = Label::all();
        
        Product::all()->each(function ($product) use ($labels) { 
            $product->labels()->attach(
                $labels->random(rand(1, 3))->pluck('id')->toArray()
            ); 
        });
    }
}
