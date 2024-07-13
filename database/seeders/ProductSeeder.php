<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $merchantId = DB::table('merchants')->first()->id;

        $products = [
            ['Fresh Apples', 'Delicious and crunchy apples.', 150, 2.99, 'Fruits'],
            ['Organic Tomatoes', 'Fresh organic tomatoes.', 200, 1.50, 'Vegetables'],
            ['Bananas', 'Rich in potassium and fiber.', 180, 0.99, 'Fruits'],
            ['Carrots', 'Crunchy, tasty, and highly nutritious.', 160, 1.20, 'Vegetables'],
            ['Blueberries', 'Sweet, nutritious and wildly popular.', 90, 3.50, 'Fruits'],
            ['Spinach', 'Super healthy and versatile leafy green.', 100, 2.00, 'Vegetables'],
            ['Almonds', 'Highly nutritious and rich in healthy fats.', 75, 5.00, 'Nuts'],
            ['Chicken Breast', 'High-quality protein source.', 50, 4.99, 'Meat'],
            ['Whole Wheat Bread', 'Made from whole grains.', 120, 2.50, 'Bakery'],
            ['Milk', 'Rich in calcium and vitamin D.', 200, 1.99, 'Dairy']
        ];

        // Get all files from public/product_images directory
        $imageFiles = File::files(public_path('product_images'));

        // Shuffle the array to randomize the order of images
        shuffle($imageFiles);

        foreach ($products as $index => $product) {
            // Use modulo operator to cycle through images if there are more products than images
            $imagePath = $imageFiles[$index % count($imageFiles)]->getFilename();

            Product::create([
                // 'farmer_id' => $merchantId,
                'product_name' => $product[0],
                'product_description' => $product[1],
                'product_quantity' => $product[2],
                'product_price' => $product[3],
                'product_category' => $product[4],
                'product_image' => $imagePath, // Use the randomized image file name
            ]);
        }
    }
}
