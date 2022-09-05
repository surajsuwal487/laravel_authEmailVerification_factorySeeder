<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Models\User;


//you can also include eloquent thigs here
Route::get('/', function () {
    $users = QueryBuilder::for(User::class)
        ->allowedFilters([
            'id',
            'name',
            'email',
            AllowedFilter::scope('verified'),
            AllowedFilter::exact('id')

        ])
        ->allowedSorts([
            'name'
        ])
        ->allowedFields(['id', 'name'])
        ->get();

    return $users;
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify', [MailController::class, 'verifyUser'])->name('verify.user');
