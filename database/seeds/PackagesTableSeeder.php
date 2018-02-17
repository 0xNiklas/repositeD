<?php

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Package::create([
            'author' => 'N_klas',
            'git' => 'https://github.com/0xNiklas/packageD',
            'name' => 'packageD',
            'description' => 'A Dlang based Package Manager',
            'minor' => 0,
            'major' => 1,
            'patch' => 0
        ]);

        \App\Package::create([
            'author' => 'N_klas',
            'git' => 'https://github.com/0xNiklas/packageD',
            'name' => 'Test 1',
            'description' => 'Test 1',
            'minor' => 0,
            'major' => 3,
            'patch' => 5
        ]);

        \App\Package::create([
            'author' => 'N_klas',
            'git' => 'https://github.com/0xNiklas/packageD',
            'name' => 'Test 2',
            'description' => 'Test 2',
            'minor' => 2,
            'major' => 1,
            'patch' => 5
        ]);
    }
}
