<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/index', function ( Request $request) {
    Debugbar::enable();

    if($request){

        Debugbar::info('succes conect');
    }else{
        Debugbar::error('!!!!');
    }

    //Debugbar::startMeasure('render','Time for rendering');
    
    /*Debugbar::measure('My long operation', function() {
        // Do something…
        echo "
            <h1>hussein</h1>
            <ul>
                <li>1</li> 
                <li>2</li>
                <li>3</li>
                <li>4</li>       
            </ul>

            
            ";
        });*/
    
    //Debugbar::addMeasure('now', LARAVEL_START, microtime(true));
    //Debugbar::measure('My long operation', function() {
        // Do something…
    //});

    //Debugbar::stopMeasure('render');


    return view('index');
});