<?php

namespace App\Http\Controllers;

use App\User;
use App\Tender;
use App\Bid;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Mail;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$this->get('/', function () {
    return Redirect::to('/index');
});

$this->get('/index', function () {
    return view('home');
});

$this->get('/properties', function () {
    return view('properties');
});

$this->auth();

$this->get('/home', 'HomeController@index');
