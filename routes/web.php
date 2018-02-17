<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $packages = App\Package::paginate(9);

    return view('packages')->with('packages', $packages);
});

Route::get('/seed', function () {
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
    
    
    return redirect('/');
});

