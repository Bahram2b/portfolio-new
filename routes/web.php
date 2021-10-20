<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ClipController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Photo;
use App\Models\Clip;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {



//    $product=Photo::where('category',27)->where('status',1)->get();
//    $manipulation=Photo::where('category',1)->where('status',1)->get();


    return view('welcome');


});
//Route::get('/olddashboard', function () {
//    return view('dashboard');
//});
Route::get('/photo-portfolio', function () {
    $portraits=Photo::where('category',"Portrait")->latest()->get();
    $manipulation=Photo::where('category',"Photo Manipulation")->latest()->get();
    $product=Photo::where('category',"Product Photography")->latest()->get();
    $music=Photo::where('category',"Music")->latest()->get();
    return view('photohome',compact('portraits','product','manipulation','music'));})->name('Photo.Portfolio');
Route::get('/video-portfolio', function () {
    $broll=Clip::where('category',"Broll")->latest()->get();
    $motion=Clip::where('category',"Motion")->latest()->get();
    $product=Clip::where('category',"Product")->latest()->get();
    $music=Clip::where('category',"Music")->latest()->get();

    return view('videohome',compact('broll','motion','product','music'));})->name('Video.Portfolio');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

        $user = User::find(Auth::user()->id);

            return view('admin.index',compact('user'));})->name('Dashboard');
// Admin routes
Route::middleware(['auth:sanctum', 'verified'])->get('/photo/management/{cat}', [PhotoController::class,'index'])->name('Photo.index');
Route::post('/photo/add', [PhotoController::class,'store'])->name('Photo.Store');
Route::post('/photo/edit', [PhotoController::class,'create'])->name('Photo.Edit');
Route::middleware(['auth:sanctum', 'verified'])->get('delete/photo/{id}', [PhotoController::class,'destroy'])->name('Photo.Destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('photo/management/update/{id}', [PhotoController::class,'update'])->name('Photo.Update');

// Admin Clips
Route::middleware(['auth:sanctum', 'verified'])->get('/clip/management/{cat}', [ClipController::class,'index'])->name('Clip.index');
Route::post('/clip/Add', [ClipController::class,'store'])->name('Clip.Store');
Route::middleware(['auth:sanctum', 'verified'])->get('delete/clip/{id}', [ClipController::class,'destroy'])->name('Clip.Destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('clip/management/clipupdate/{id}', [ClipController::class,'update'])->name('Clip.Update');
//Admin Profile
Route::get('/Admin/ChangePassword/', [ProfileController::class,'AdminChangePass'])->name('admin.pass');
Route::get('/Admin/ChangeProfile/', [ProfileController::class,'AdminChangeProfile'])->name('admin.profile');
Route::post('/Admin/UpdatePassword/', [ProfileController::class,'AdminPassUpdate'])->name('password.update');
Route::post('/Admin/UpdateProfile/', [ProfileController::class,'AdminProfileUpdate'])->name('profile.update');

Route::get('/category/logout', [CategoryController::class,'Logout'])->name('user.logout');
