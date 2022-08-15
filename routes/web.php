<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;




// THIS TAKES YOU TO THE HOME PAGE ; LANDING PAGE
Route::get('/', function () {
    return view('home');
});
// THIS IS THE WELCOME AUTOMATIC LAYOUT THAT LARAVEL BRINGS
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/createpost', function () {
    return view('createPost');
});

Route::get('/editcomment', function () {
    return view('editComment');
});

// -----------------IMPORTANT. WHEN YOU ENTER TO A POST DETAILS AND YOU CLICK ON THE NAV FOR EXAMPLE REGISTER OR LOGIN IT TAKES
// YOU TO A http://localhost/postdetail/login AND THEN DOESNT WORK. IT SHOULD BE ALWAYS localhost/login


// THIS WILL TAKES YOU TO THE POST DETAIL YOU CLICKED ON
// Route::get('/postdetail/{id}', function () {
//     return view('postDetail');
// });

Route::get('/aboutme', function () {
    return view('aboutMe');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/', [BlogController::class, 'showAll']);

// Route::post('/test/{id}', [BlogController::class, 'update']);

Route::post('/', [BlogController::class, 'create']);

// Route::delete('/test/{id}', [BlogController::class, 'delete']);

Route::post('/update/{id}', [BlogController::class, 'update']);

Route::get('/postdetail/{id}', [BlogController::class, 'postDetails']);

Route::get('/postdetail/{id}', [BlogController::class, 'details']);

Route::post('/postDetail', [CommentController::class, 'addComment']);

Route::delete('/comment/{id}', [CommentController::class, 'delete']);

// Route::delete('/postDetail/{id}', [CommentController::class, 'destroy']);




//protecting a group of Routes
Route::middleware('auth')->group(function () {
   Route::post('/create', [BlogController::class, 'create']);
   Route::post('comment', [BlogController::class, 'addComment']);
});

//protecting a single Route
Route::delete('/post/{id}', [BlogController::class, 'delete'])->middleware('auth');

