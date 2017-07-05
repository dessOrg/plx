<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Bid;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Mail;
use SMSProvider;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

   public function sellappertment()
   {

       return view('sellappertment');
   }


  protected function addappert(Request $request) {
   $rules = array(
           'category' => 'required|max:200',
           'price' => 'required|max:200',
           'description' => 'required|max:300',
           'address' => 'required|max:100',
           'town' => 'required|max:200',
           'size' => 'required|max:100',
       );

       $validator = Validator::make(Input::all(), $rules);

  // check if the validator failed -----------------------
  if ($validator->fails()) {

     // get the error messages from the validator
     $messages = $validator->messages();

     // redirect our user back to the form with the errors from the validator
     return Redirect::to('/sellappertment')
         ->withErrors($validator);

  } else {
     // validation successful ---------------------------

     // report has passed all tests!
     // let him enter the database

     // create the data for report
     $property= new Property;
     $property->category     = Input::get('category');
     $property->address     = Input::get('address');
     $property->town     = Input::get('town');
     $property->location     = Input::get('location');
     $property->price     = Input::get('price');
     $property->bed    = Input::get('bed');
     $property->bath     = Input::get('bath');
     $property->parking     = Input::get('parking');
     $property->size     = Input::get('size');
     $property->description     = Input::get('description');
     $property->user_id     = Auth::user()->id;
     $property->image     = $request->file;
      $property->save();

        $fileName = $property->id . '.' .
        $request->file('file')->getClientOriginalExtension();

        $request->file('file')->move(
            base_path() . '/public/uploads', $fileName
        );

     $pat = '/public/uploads/'.$fileName;

        $prop_obj = new Property();
        $prop_obj->id = $property->id;
        $prop = Property::find($prop_obj->id); // Eloquent Model
        $prop->update(['image' => $pat]);

     // save report


     // redirect ----------------------------------------
     // redirect our user back to the form so they can do it all over again
     return Redirect::to('/sellappertment');
   }

  }


  public function pending()
  {

     $name = Property::get();
      return view('admin/pending')->with('properties', $name);
  }

}
