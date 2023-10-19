<?php
use App\Http\Controllers\gajipegawaiController;
use App\Http\Controllers\pencatatanrekeningController;
use App\Http\Controllers\pencatatanmasadepanController;
use App\Http\Controllers\biayaoperationalproyekController;
use App\Http\Controllers\biayaoperationalnonbudgetingController;
use App\Http\Controllers\biayapribadiController;
use App\Http\Controllers\biayalainlainController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('formbiayaoperationalproyek');
// });


// Route::get("/", [gajipegawaiController::class,"Gajipegawai"]);
Route::get("/", [gajipegawaiController::class,"Gajipegawaiselect"]);
Route::get("/login", [loginController::class,"Login"]);
Route::get("/users",[loginController::class,"Userss"]);
Route::post("/login",[loginController::class,"Plogin"]);
Route::get("/gajipegawaiform", [gajipegawaiController::class,"Gajipegawaiform"]);
Route::post("/gajipegawaiform", [gajipegawaiController::class,"Gajipegawaiinsert"]);
Route::get("/pencatatanrekening", [pencatatanrekeningController::class,"Pencatatanrekening"]);
Route::get("/pencatatanrekeningform", [pencatatanrekeningController::class,"Pencatatanrekeningform"]);
Route::get("/pencatatanmasadepan", [pencatatanmasadepanController::class,"Pencatatanmasadepan"]);
Route::get("/pencatatanmasadepanform", [pencatatanmasadepanController::class,"Pencatatanmasadepanform"]);
Route::get("/biayaoperationalproyek", [biayaoperationalproyekController::class,"Biayaoperationalproyek"]);
Route::get("/biayaoperationalproyekform", [biayaoperationalproyekController::class,"Biayaoperationalproyekform"]);
Route::get("/biayaoperationalnonbudgeting", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgeting"]);
Route::get("/biayaoperationalnonbudgetingform", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgetingform"]);
Route::get("/biayapribadi", [biayapribadiController::class,"Biayapribadi"]);
Route::get("/biayapribadiform", [biayapribadiController::class,"Biayapribadiform"]);
Route::get("/biayalainlain", [biayalainlainController::class,"Biayalainlain"]);
Route::get("/biayalainlainform", [biayalainlainController::class,"Biayalainlainform"]);