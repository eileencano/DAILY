<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', HomeController::class);

route::get('/posts',[PostController::class, 'index'] );

route::get('/posts/agendar', [PostController::class,'agendar'] );
route::get('/posts/cancelar', [PostController::class,'cancelar'] );
route::get('/posts/iniciar', [PostController::class,'iniciar'] );
route::get('/posts/password', [PostController::class,'password'] );
route::get('/posts/register', [PostController::class,'register'] );
route::get('/posts/dashboard', [PostController::class,'dashboard'] );
route::get('/posts/d', [PostController::class,'d'] );

route::get('/posts/{post}/{agendar?}', function ($post,$category = null) {

    return "Daily/{$post}";
});
    

/* route::get('/posts/{post}/{category}', function ($post,$category) {
return "Daily /{$post} de la categoria {$category}";
}); */




