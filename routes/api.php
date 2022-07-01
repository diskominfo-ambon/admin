<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Plan;
use App\Models\User;
use App\Models\Announcement;
use App\Models\Application;
use App\Models\Post;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', function (Request $request) {
    $posts = Post::all();

    return response()->json(['data' => $posts]);
});

Route::get('/plans', function (Request $request) {
    $plans = Plan::all();

    return response()->json(['data' => $plans]);
});

Route::get('/application', function (Request $request) {
    $key = $request->query('key');

    $application = Application::selectedKey($key)->first();

    return response()->json(['data' => $application]);
});

Route::get('announcements', function (Request $request) {
    $annos = Announcement::all();

    return response()->json(['data' => $annos]);
});
