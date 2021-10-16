<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhoneBook;

class PhoneBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhoneBook::truncate();
        PhoneBook::create([
            'name' => 'Sadio Mane',
            'number' => '012-34567890',
        ]);
        PhoneBook::create([
            'name' => 'Oxlade Chamberlain',
            'number' => '012-44567890',
        ]);
        PhoneBook::create([
            'name' => 'Virgil Van Dijk',
            'number' => '012-54567890',
        ]);
        PhoneBook::create([
            'name' => 'Allison Becker',
            'number' => '012-64567890',
        ]);
        PhoneBook::create([
            'name' => 'James Beck',
            'number' => '012-74567890',
        ]);
    }
}
