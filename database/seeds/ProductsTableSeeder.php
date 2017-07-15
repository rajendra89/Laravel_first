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
       DB::table('products')->truncate(); 
       DB::table('products')->insert([
       	[
       	'name'=>'Laravel 5.4',
       	'price'=>rand(1,5),
        'image'=>'',
       	'description'=>'whats new on Laravel 5.4',

       	],
       	[
       	'name'=>'Laravel 5.4',
       	'price'=>rand(1,5),
        'image'=>'',
       	'description'=>'whats new on Laravel 5.4',

       	],
       	[
       	'name'=>'Laravel 5.4',
       	'price'=>rand(1,5),
        'image'=>'',
       	'description'=>'whats new on Laravel 5.4',

       	] 

       	]);
    }
}
