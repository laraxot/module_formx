<?php

declare(strict_types=1);

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
/* test spostato dentro livewire
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
//*/
