<?php

use Illuminate\Database\Seeder;
use App\Models\Company;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        $limit = 100;
        for ($i = 0; $i < $limit; $i++) {
            Company::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'website' => '123.com',
                'email' => $faker->email,
            ]);
        }
    }
}
