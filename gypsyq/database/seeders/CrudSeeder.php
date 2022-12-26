<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\crud;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        crud::create(
            [
                "name"=>"iphone 14",
                "price"=>200.50,
                "imageUrl"=>"https://pixabay.com/photos/iphone-iphone-7-ios-10-smartphone-1766253/",
                "category"=>"mobile",
                "description"=>"iphone 14promax 1TB",
                
            ]
            );

            crud::create(
                [
                    "name"=>"iphone 14",
                    "price"=>200.00,
                    "imageUrl"=>"https://pixabay.com/photos/iphone-iphone-7-ios-10-smartphone-1766253/",
                    "category"=>"mobile",
                    "description"=>"iphone 14promax 1TB",
                    
                ]
                );
                crud::create(
                    [
                        "name"=>"iphone 11 promax",
                        "price"=>150000.78,
                        "imageUrl"=>"https://pixabay.com/photos/iphone-iphone-7-ios-10-smartphone-1766253/",
                        "category"=>"mobile",
                        "description"=>"iphone 11promax 520GB",
                        
                    ]
                    );
    }
}
