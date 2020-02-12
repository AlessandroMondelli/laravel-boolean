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
    return view('home');
})->name('homepage');

Route::get('/faqs', function () {
    $data = [
        'faq_list_bef' => config('data.faqs_before'),
        'faq_list_aft' => config('data.faqs_after')
    ];
    return view('faqs', $data);
})->name('faqs-page');


?>
