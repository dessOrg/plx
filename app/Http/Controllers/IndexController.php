<?php

namespace App\Http\Controllers;

use App\User;
use App\Property;
use App\Image;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Mail;
use SMSProvider;
use Storage;

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

   public function sellplot()
   {

       return view('sellplot');
   }

  protected function addappert(Request $request) {
   $rules = array(
           'category' => 'required|max:200',
           'price' => 'required|max:200',
           'description' => 'required|max:300',
           'address' => 'required|max:100',
           'town' => 'required|max:200',
           'size' => 'required|max:100',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
     $property->status     = 'pending';
     $property->description     = Input::get('description');
     $property->user_id     = Auth::user()->id;

            $image = $request->file('image');
             $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
             $s3 = \Storage::disk('s3');
             $filePath = '/plx254/' . $imageName;
             $s3->put($filePath, file_get_contents($image), 'public');
      $property->image = $filePath;
      $property->save();


        $imag = new Image();
        $imag->property_id = $property->id;
        $imag->image = $filePath;
        $imag->save();

     // save report


     // redirect ----------------------------------------
     // redirect our user back to the form so they can do it all over again
     return Redirect::to('/prop'.$property->id);
   }

  }

 protected function addplot(Request $request) {
  $rules = array(
          'price' => 'required|max:200',
          'description' => 'required|max:300',
          'address' => 'required|max:100',
          'town' => 'required|max:200',
          'size' => 'required|max:100',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      );

      $validator = Validator::make(Input::all(), $rules);

 // check if the validator failed -----------------------
 if ($validator->fails()) {

    // get the error messages from the validator
    $messages = $validator->messages();

    // redirect our user back to the form with the errors from the validator
    return Redirect::to('/sellplot')
        ->withErrors($validator);

 } else {
    // validation successful ---------------------------

    // report has passed all tests!
    // let him enter the database

    // create the data for report
    $property= new Property;
    $property->category     = "Plot";
    $property->address     = Input::get('address');
    $property->town     = Input::get('town');
    $property->location     = Input::get('location');
    $property->price     = Input::get('price');
    $property->bed    = "0";
    $property->bath     = "0";
    $property->parking     = "0";
    $property->size     = Input::get('size');
    $property->status     = 'pending';
    $property->description     = Input::get('description');
    $property->user_id     = Auth::user()->id;

           $image = $request->file('image');
            $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $s3 = \Storage::disk('s3');
            $filePath = '/plx254/' . $imageName;
            $s3->put($filePath, file_get_contents($image), 'public');
     $property->image = $filePath;
     $property->save();


       $imag = new Image();
       $imag->property_id = $property->id;
       $imag->image = $filePath;
       $imag->save();

    // save report


    // redirect ----------------------------------------
    // redirect our user back to the form so they can do it all over again
    return Redirect::to('/prop'.$property->id);
  }

 }


  public function pending()
  {

     $name = Property::where('status','=','pending')->get();
      return view('admin/pending')->with('properties', $name);
  }

  public function verify($id)
  {

    $post_obj = new Property();
    $post_obj->id = $id;
    $post = Property::find($post_obj->id); // Eloquent Model
    $post->update(['status'=>'Active']);
    return redirect('/pending');
  }

  public function loadappert($id)
  {

    $post = Property::find($id);
    return view('/update')->with('property', $post);
  }

  public function loadplot($id)
  {

    $post = Property::find($id);
    return view('/updateplot')->with('property', $post);
  }

 protected function updateappert(Request $request, $id) {
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
    return Redirect::to('/editappert'.$id)
        ->withErrors($validator);

 } else {
    // validation successful ---------------------------

    // report has passed all tests!
    // let him enter the database

    // create the data for report

    $category     = Input::get('category');
    $address     = Input::get('address');
    $town     = Input::get('town');
    $location     = Input::get('location');
    $price     = Input::get('price');
    $bed    = Input::get('bed');
    $bath     = Input::get('bath');
    $parking     = Input::get('parking');
    $size     = Input::get('size');
    $description     = Input::get('description');
    $user_id     = Auth::user()->id;

       $prop_obj = new Property();
       $prop_obj->id = $id;
       $prop = Property::find($prop_obj->id); // Eloquent Model
       $prop->update(['category' => $category, 'address' => $address, 'town' => $town, 'location' => $location, 'price' => $price, 'bed' => $bed, 'bath' => $bath, 'parking' => $parking, 'size' => $size, 'description' => $description ]);

    // save report


    // redirect ----------------------------------------
    // redirect our user back to the form so they can do it all over again
    return Redirect::to('/prop'.$id);
  }

 }

protected function updateplot(Request $request, $id) {
 $rules = array(

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
   return Redirect::to('/editplot'.$id)
       ->withErrors($validator);

} else {
   // validation successful ---------------------------

   // report has passed all tests!
   // let him enter the database

   // create the data for report

   $address     = Input::get('address');
   $town     = Input::get('town');
   $location     = Input::get('location');
   $price     = Input::get('price');
   $size     = Input::get('size');
   $description     = Input::get('description');
   $user_id     = Auth::user()->id;

      $prop_obj = new Property();
      $prop_obj->id = $id;
      $prop = Property::find($prop_obj->id); // Eloquent Model
      $prop->update(['address' => $address, 'town' => $town, 'location' => $location, 'price' => $price, 'size' => $size, 'description' => $description ]);

   // save report


   // redirect ----------------------------------------
   // redirect our user back to the form so they can do it all over again
   return Redirect::to('/prop'.$id);
 }

}


  protected function deladd($id) {

    $hit = Property::find($id);
    $hit->delete();
    return Redirect::to('/properties');
  }

  public function loadimage($id)
  {

    $hit = Property::find($id);
    $post = Image::where('property_id','=',$id)->get();
    return view('/images')->with('images', $post)->with('property', $hit);
  }


 protected function addimage(Request $request, $id) {
  $rules = array(
'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      );

      $validator = Validator::make(Input::all(), $rules);

 // check if the validator failed -----------------------
 if ($validator->fails()) {

    // get the error messages from the validator
    $messages = $validator->messages();

    // redirect our user back to the form with the errors from the validator
    return Redirect::to('/image'.$id)
        ->withErrors($validator);

 } else {
    // validation successful ---------------------------

    // report has passed all tests!
    // let him enter the database

    // create the data for report
    $imag= new Image;
    $imag->property_id = $id;

    $image = $request->file('file');
     $imageName = time().'.'.$request->file('file')->getClientOriginalExtension();
     $s3 = \Storage::disk('s3');
     $filePath = '/plx254/' . $imageName;
     $s3->put($filePath, file_get_contents($image), 'public');

     $imag->image     = $filePath;
     $imag->save();

    // save report


    // redirect ----------------------------------------
    // redirect our user back to the form so they can do it all over again
    return Redirect::to('/image'.$id);
  }

 }

  protected function delimage($id, $p_id) {

    $hit = Image::find($id);
    $hit->delete();
    return Redirect::to('/image'.$p_id);
  }


}
