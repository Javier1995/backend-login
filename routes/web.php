<?php

use App\Helper\Helpers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/user', [UserController::class, 'listUsers']);

Route::get('/find-year-with-most-people-alive', function () {
    $yearList1 =  [[1951, 2018], [1981, 2000], [1980, 1982], [1983, 1984]];
    $yearList2 = [[1951, 2018], [1981, 2000], [1983, 1984]];
    $result1 = Helpers::findYearWithMostPeopleAlive($yearList1);
    $result2 = Helpers::findYearWithMostPeopleAlive( $yearList2 );

     return view('task1.task',[
        'results' => [
            'result1' => [
                'list' => json_encode(  $yearList1 ),
                 'result'=> json_encode($result1),
            ],
            'result2' =>[
                'list' => json_encode(  $yearList2 ),
                'result'=> json_encode($result2)
            ]
        ] 
    ]);
});

require __DIR__.'/auth.php';
