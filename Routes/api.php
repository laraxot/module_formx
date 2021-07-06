<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
//use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/formx', function (Request $request) {
    return $request->user();
});
*/
<<<<<<< HEAD
/*
=======
/* test spostato dentro livewire
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
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
<<<<<<< HEAD
*/
=======
//*/
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
