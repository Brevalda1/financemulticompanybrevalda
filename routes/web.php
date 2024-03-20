<?php
use App\Http\Controllers\gajipegawaiController;
use App\Http\Controllers\pencatatanrekeningController;
use App\Http\Controllers\pencatatanmasadepanController;
use App\Http\Controllers\biayaoperationalproyekController;
use App\Http\Controllers\biayaoperationalnonbudgetingController;
use App\Http\Controllers\biayapribadiController;
use App\Http\Controllers\biayalainlainController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\detailbiayaoperationalproyekController;
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
Route::get("/", [loginController::class,"Login"]);
// Route::get("/", [gajipegawaiController::class,"Gajipegawaiselect"]);
Route::get("/gajipegawai", [gajipegawaiController::class,"Gajipegawaiselect"]);
Route::get("/users",[loginController::class,"Userss"]);
Route::post("/",[loginController::class,"Plogin"]);
Route::get("/gajipegawaiform", [gajipegawaiController::class,"Gajipegawaiform"]);
Route::get("/updategajipegawaiform/{no}", [gajipegawaiController::class,"Gajipegawaiedit"]);
Route::get("/deletegajipegawaiform/{no}", [gajipegawaiController::class,"Gajipegawaidelete"]);
Route::post("/updategajipegawaiform/{no}", [gajipegawaiController::class,"GajiPegawaiupdate"]);
Route::post("/gajipegawaiform", [gajipegawaiController::class,"Gajipegawaiinsert"]);

Route::get("/pencatatanrekening", [pencatatanrekeningController::class,"Pencatatanrekeningselect"]);
Route::get("/pencatatanrekeningform", [pencatatanrekeningController::class,"Pencatatanrekeningform"]);
Route::post("/pencatatanrekeningform", [pencatatanrekeningController::class,"Pencatatanrekeninginsert"]);
Route::get("/deletepencatatanrekeningform/{no}", [pencatatanrekeningController::class,"Pencatatanrekeningdelete"]);
Route::get("/updatepencatatanrekeningform/{no}", [pencatatanrekeningController::class,"PencatatanRekeningedit"]);
Route::post("/updatepencatatanrekeningform/{no}", [pencatatanrekeningController::class,"Pencatatanrekeningupdate"]);

Route::get("/pencatatanmasadepan", [pencatatanmasadepanController::class,"Pencatatanmasadepanselect"]);
Route::get("/pencatatanmasadepanform", [pencatatanmasadepanController::class,"Pencatatanmasadepanform"]);
Route::post("/pencatatanmasadepanform", [pencatatanmasadepanController::class,"Pencatatanmasadepaninsert"]);
Route::get("/updatepencatatanmasadepanform/{no}", [pencatatanmasadepanController::class,"Pencatatanmasadepanedit"]);
Route::post("/updatepencatatanmasadepanform/{no}", [pencatatanmasadepanController::class,"Pencatatanmasadepanupdate"]);
Route::get("/deletepencatatanmasadepanform/{no}", [pencatatanmasadepanController::class,"Pencatatanmasadepandelete"]);

Route::get("/biayapribadi", [biayapribadiController::class,"Biayapribadiselect"]);
Route::get("/biayapribadiform", [biayapribadiController::class,"Biayapribadiform"]);
Route::post("/biayapribadiform", [biayapribadiController::class,"Biayapribadiinsert"]);
Route::get("/updatebiayapribadiform/{no}", [biayapribadiController::class,"Biayapribadiedit"]);
Route::post("/updatebiayapribadiform/{no}", [biayapribadiController::class,"Biayapribadiupdate"]);
Route::get("/deletebiayapribadiform/{no}", [biayapribadiController::class,"Biayapribadidelete"]);

Route::get("/biayaoperationalproyek", [biayaoperationalproyekController::class,"Biayaoperationalproyekselect"]);
Route::get("/biayaoperationalproyekform", [biayaoperationalproyekController::class,"Biayaoperationalproyekform"]);
Route::post("/biayaoperationalproyekform", [biayaoperationalproyekController::class,"Biayaoperationalproyekinsert"]);
Route::get("/updatebiayaoperationalproyekform/{no}", [biayaoperationalproyekController::class,"Biayaoperationalproyekedit"]);
Route::post("/updatebiayaoperationalproyekform/{no}", [biayaoperationalproyekController::class,"Biayaoperationalproyekupdate"]);
Route::get("/deletebiayaoperationalproyekform/{no}", [biayaoperationalproyekController::class,"Biayaoperationalproyekdelete"]);

Route::get("/biayaoperationalnonbudgeting", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgetingselect"]);
Route::get("/biayaoperationalnonbudgetingform", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgetingform"]);
Route::post("/biayaoperationalnonbudgetingform", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgetinginsert"]);
Route::get("/updatebiayaoperationalnonbudgetingform/{no}", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgetingedit"]);
Route::post("/updatebiayaoperationalnonbudgetingform/{no}", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgetingupdate"]);
Route::get("/deletebiayaoperationalnonbudgetingform/{no}", [biayaoperationalnonbudgetingController::class,"Biayaoperationalnonbudgetingdelete"]);


Route::get("/biayalainlain", [biayalainlainController::class,"Biayalainlainselect"]);
Route::get("/biayalainlainform", [biayalainlainController::class,"Biayalainlainform"]);
Route::post("/biayalainlainform", [biayalainlainController::class,"Biayalainlaininsert"]);
Route::get("/updatebiayalainlainform/{no}", [biayalainlainController::class,"Biayalainlainedit"]);
Route::post("/updatebiayalainlainform/{no}", [biayalainlainController::class,"Biayalainlainupdate"]);
Route::get("/deletebiayalainlainform/{no}", [biayalainlainController::class,"Biayalainlaindelete"]);

Route::get("/detailbiayaoperationalproyeka", [detailbiayaoperationalproyekController::class,"Detailbiayaoperationalproyekselect"]);
Route::get("/detailbiayaoperationalproyekform", [detailbiayaoperationalproyekController::class,"Detailbiayaoperationalproyekform"]);
Route::post("/detailbiayaoperationalproyekform", [detailbiayaoperationalproyekController::class,"Detailbiayaoperationalproyekinsert"]);
Route::get("/updatedetailbiayaoperationalproyekform/{no}", [detailbiayaoperationalproyekController::class,"Detailbiayaoperationalproyekedit"]);
Route::post("/updatedetailbiayaoperationalproyekform/{no}", [detailbiayaoperationalproyekController::class,"Detailbiayaoperationalproyekupdate"]);
Route::get("/deletedetailbiayaoperationalproyekform/{no}", [detailbiayaoperationalproyekController::class,"Detailbiayaoperationalproyekdelete"]);