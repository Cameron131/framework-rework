<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Response;
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

Route::get('/ipa', function (Request $request) {
    return response()->json(["Name"=>"IPA", "Description"=>"Has an bitter taste"]);
});

Route::get('/ipa/voodoo-ranger', function (Request $request) {
    return response()->json(["Name"=>"Voodoo Ranger"]);
});
Route::get('/ipa/120-minute-ipa', function (Request $request) {
    return response()->json(["Name"=>"120 Minute IPA"]);
});
Route::get('/ipa/two-hearted-ale', function (Request $request) {
    return response()->json(["Name"=>"Two Hearted Ale"]);
});

Route::get('/stout', function (Request $request) {
    return response()->json(["Name"=>"Stout", "Description"=>"Has a roasted taste"]);
});

Route::get('/porter', function (Request $request) {
    return response()->json(["Name"=>"Porter", "Description"=>"Has a sweet/bitter taste"]);
});

Route::get('/sour', function (Request $request) {
    return response()->json(["Name"=>"Sour", "Description"=>"Has a sour taste"]);
});
?>