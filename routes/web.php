<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('affichage', function() {
    if(session()->has('files')) {
        $files = session()->get('files');
        return view('uploads.index',['files'=>$files ]);
    }
    return view('uploads.index');
    
});

Route::get('create', function() {
   
    if(session()->has('files')) { // verifier si la session est exist 

    } else {
        session()->put('files',[]); // creation de la session
    }


    return view('uploads.create');
});


Route::post('create', function() {
    $file = request('file'); // recuperez les infos du fichier
    $file_name  = "ayoub" . time() . '.' . $file->getClientOriginalExtension();
    $file->move('public', $file_name);
    $path = 'public'.'/'.$file_name;
    session()->push('files', $path);
    return view('uploads.create', [ 'message'=>"successfully Uploaded !"]);    
});


Route::get('controller', 'TestController@testview');
Route::post('controller', 'TestController@postmethod');


