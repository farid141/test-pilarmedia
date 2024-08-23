<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Sales;
use App\Models\Salesperson;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Disable query logging for performance
        DB::disableQueryLog();

        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Seed Products
        $products = [];
        for ($i = 1; $i <= 1000; $i++) {
            $products[] = [
                'name' => $faker->word,
                'price' => $faker->randomDigitNotNull() * 1000,
                'desc' => $faker->text,
            ];
        }
        DB::table('products')->insert($products); // Bulk insert products

        // Seed Salespersons
        $salespersons = [];
        for ($i = 1; $i <= 1000; $i++) {
            $salespersons[] = [
                'name' => $faker->name,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
            ];
        }
        DB::table('sales_persons')->insert($salespersons); // Bulk insert salespersons

        // Seed Sales in bulk (2 million records)
        $sales = [];
        $batchSize = 10000; // Adjust batch size for bulk insert
        for ($i = 1; $i <= 2000000; $i++) {
            $sales[] = [
                'sales_date' => $faker->date(),
                'product_id' => rand(1, 1000),
                'sales_amount' => $faker->randomFloat(2, 10, 1000),
                'sales_person_id' => rand(1, 1000),
            ];

            if ($i % $batchSize == 0) {
                DB::table('sales')->insert($sales); // Bulk insert sales records
                $sales = []; // Reset the array
            }
        }
        // Insert any remaining records
        if (!empty($sales)) {
            DB::table('sales')->insert($sales);
        }

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
