<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Image;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Storage;
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
  $name = Property::where('status','=','Active')->get();
    return view('properties')->with('properties', $name);
});

$this->get('/prop{id}', function($id)
{

   $name = Property::find($id);
   $im = Image::where('property_id','=',$id)->get();
   $user = User::find($name->user_id);
    return view('property')->with('user', $user)->with('property', $name)->with('images', $im);
});

$this->get('/agents', function () {
  $name = User::where('role','=','normal')->get();
    return view('agents')->with('agents', $name);
});

$this->get('/agent{id}', function($id)
{

   $name = Property::where('user_id','=',$id);
   $user = User::find($id);
    return view('agent')->with('agent', $user)->with('properties', $name);
});

$this->auth();

$this->get('/home', 'HomeController@index');

$this->get('/sellappertment', 'IndexController@sellappertment');
$this->post('/addappert', 'IndexController@addappert');
$this->get('/sellplot', 'IndexController@sellplot');
$this->post('/addplot', 'IndexController@addplot');
$this->get('/editappert{id}', 'IndexController@loadappert');
$this->post('/editappert{id}', 'IndexController@updateappert');
$this->get('/editplot{id}', 'IndexController@loadplot');
$this->post('/editplot{id}', 'IndexController@updateplot');
$this->get('/del{id}', 'IndexController@deladd');
$this->get('/image{id}', 'IndexController@loadimage');
$this->post('/image{id}', 'IndexController@addimage');
$this->get('/delimage{id}/{p_id}', 'IndexController@delimage');
$this->get('/pay', 'IndexController@pay');


$this->get('/pending', 'IndexController@pending');
$this->get('/verify{id}', 'IndexController@verify');
