<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        		'imagePath' => 'african-forum-on-music-480x480.jpg',
        		'title' => 'Harry Potter',
        		'description' => ' Superr good series a great time to watch ',
        		'price' => 10
        	]);
        $product->save();

                $product = new \App\Product([
        		'imagePath' => 'apple-music-not-really.jpg',
        		'title' => 'Mobile Phones',
        		'description' => ' Mobiles super good series are really awesome ',
        		'price' => 12
        	]);
        $product->save();

                $product = new \App\Product([
        		'imagePath' => 'images (1).jpg',
        		'title' => 'Games',
        		'description' => ' WWE 2K17 is coming soon !!!!! ',
        		'price' => 25
        	]);
        $product->save();

                $product = new \App\Product([
        		'imagePath' => 'images.jpg',
        		'title' => 'Laptops',
        		'description' => 'hp Pavilion series are a huge success ',
        		'price' => 64
        	]);
        $product->save();

                $product = new \App\Product([
        		'imagePath' => 'music-app-icon-100221079-large.png',
        		'title' => 'Cricket-Bat',
        		'description' => ' Ball and bat are really quality dependent ',
        		'price' => 38
        	]);
        $product->save();

                $product = new \App\Product([
        		'imagePath' => 'How-to-secure-DJ-gig.jpg',
        		'title' => 'Tennis Racket',
        		'description' => ' Play it smooth and like a rckstar ',
        		'price' => 10
        	]);
        $product->save();
    }
}
