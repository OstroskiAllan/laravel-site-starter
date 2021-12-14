<?php
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contato', function(){
    return view('contact');
});
Route::get('/produtos', function(){

    $busca = request('search');

    return view('product', ['busca' => $busca ]);
});

Route::get('/produtos_teste/{id}', function($id){
    return view('product', ['id' => $id ]);
});
