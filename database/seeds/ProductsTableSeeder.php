<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = factory(\App\Tag::class,5)->create();

        factory(\App\Seller::class,2)->create()->each(function($seller) use ($tags){
            factory(\App\Product::class,3)->create(['seller_id'=>$seller->id])->each(function($product) use ($tags){
                factory(\App\Review::class,10)->create(['product_id'=>$product->id]);

                $product->tags()->attach($tags[rand(0,4)]->id);
                $product->tags()->attach($tags[rand(0,4)]->id);


            });
        });

    }
}
