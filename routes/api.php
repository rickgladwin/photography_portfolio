<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Photo as PhotoResource;
use App\User;
use App\Photo;

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

Route::get('test', function() {
    return 'success';
});

Route::get('user/{user}/album/{album}', function($userId, $albumId = null) {
    return "user: $userId, album: $albumId";
});

Route::get('user/{user}', function($userId) {
    return new UserResource(User::find($userId));
});

Route::get('photo/{photo}', function ($photoId) {
    return new PhotoResource(Photo::find($photoId));
});
