<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewdemoController;
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
/*
Route::get('/',function()
    {
        return view('Welcome');
    });
*/
Route::get('/test', [ProductController::class,'index']);
Route::get('/nvk-view1',function()
    {
        return view('nvk-view1',['name'=>"Devmaster Academy!"]);
    });
Route::get('/nvk-view2',function()
    {
        return view('nvk-view2',['name'=>'Devmaster Academy!', 'arr'=>[1,4,7,2,9],]);
    });
Route::get('/nvk-view3',function()
    {
        return view('nvk-view3',['name'=>["Devmaster","Academy","Kien","Nguyen"],
        'arr'=>[10,15,12,1,22,30],
        'users'=>[],]);
    });
    #Template Blade Layout
Route::get('/home',function()
{
    return view('index');
});

Route::get('/about-us',function()
{
    return view('about');
});

Route::get('/contact',function()
{
    return view('contact');
});
#Views
Route::get('/view-1',function(){return view('view1');});
Route::get('/view-2',function(){return view('view2',['name'=>'Welcome to, Devmaster']);});
Route::get('/view-3',function(){return  view('admin.view-3',['name'=>'Quản  trị  nội dung']);});
Route::get('/view-4',[ViewdemoController::class,'view4'])->name('viewdemo.view4');
Route::get('/view-5',[ViewdemoController::class,'view5'])->name('viewdemo.view5');
Route::get('/view-6',function(){return view('view6');});
