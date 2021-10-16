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
            'number' => '012-3456789',
        ]);
        PhoneBook::create([
            'name' => 'Oxlade Chamberlain',
            'number' => '012-4456789',
        ]);
        PhoneBook::create([
            'name' => 'Virgil Van Dijk',
            'number' => '012-5456789',
        ]);
        PhoneBook::create([
            'name' => 'Allison Becker',
            'number' => '012-6456789',
        ]);
        PhoneBook::create([
            'name' => 'James Beck',
            'number' => '012-7456789',
        ]);
    }
}
