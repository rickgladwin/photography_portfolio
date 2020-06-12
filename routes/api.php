<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Photo as PhotoResource;
use App\User;
use App\Photo;
use Illuminate\Support\Facades\Log;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('user/{user}/album/{album}', function($userId, $albumId = null) {
    return "user: $userId, album: $albumId";
});

Route::get('user/{user}', function($userId) {
    return new UserResource(User::find($userId));
});

Route::get('photo/{photo}/likes_count', function ($photoId) {
    try {
        $likes_count = Photo::find($photoId)->likes->count();
    } catch (Exception $e) {
        $likes_count = 0;
    }
    return json_encode(['likes_count' => $likes_count]);
});

Route::put('photo/{photo}/like/{user}', function($photoId, $userId) {
    return 'liked';
});
