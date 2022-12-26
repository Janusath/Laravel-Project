<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;
use App\Http\Controllers\Api\TblsubcategoryController;
use App\Http\Controllers\Api\SampleController;
use App\Http\Controllers\Api\TblmajorategoryController;
use App\Http\Controllers\Api\TblfloorController;
use App\Http\Controllers\Api\TbltableController;
use App\Http\Controllers\Api\TblitemController;
use App\Http\Controllers\Api\TblsalebriefkotController;
use App\Http\Controllers\Api\TblsaledetailkotController;
use App\Http\Controllers\Api\TbllastidController;
use App\Http\Controllers\Api\PostController;
use App\Models\Tblmajorcategory;
use App\Models\Tblsaledetailkot;

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
// header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE, PATCH");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function($router) {
    Route::post('/register', [JWTController::class, 'register']);
    Route::post('/login', [JWTController::class, 'login']);
    Route::post('/logout', [JWTController::class, 'logout']);
    Route::post('/refresh', [JWTController::class, 'refresh']);
    Route::post('/profile', [JWTController::class, 'profile']);
});
    


Route::apiResource('floor',TblfloorController::class);
Route::apiResource('subcategory',TblsubcategoryController::class);
Route::apiResource('majorcategory',TblmajorategoryController::class);
Route::apiResource('sample',SampleController::class);
Route::apiResource('table',TbltableController::class);
Route::apiResource('item',TblitemController::class);
Route::apiResource('salebriefkot',TblsalebriefkotController::class);
Route::apiResource('saledetailkot',TblsaledetailkotController::class);
Route::apiResource('lastid',TbllastidController::class);

