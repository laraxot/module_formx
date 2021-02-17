<?php

//use Illuminate\Http\Request;

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
/*
Route::prefix('formx')->group(function () {
    Route::get('/', 'FormXController@index');
});
*/
/*
Route::get('calendar/events', function (Request $request) {
    $name = $request->get('name');

    $events = [];
    foreach (range(0, 6) as $i) {
        $events[] = [
            'id' => uniqid(),
            'title' => \Str::random(4).$name,
            'start' => now()->addDay(random_int(-10, 10))->toDateString(),
        ];
    }

    return $events;
});
*/
