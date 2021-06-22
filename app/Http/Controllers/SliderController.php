<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Sentinel;

use DataTables;
use App\Model\Slider;
use App\Model\Slider_left;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Model\Categories;
use Image;
use Hash;

class SliderController extends Controller
{
  public function __construct()
  {
    parent::callschedule();
  }



  function showslider()
  {
    $slider = Slider::orderBy('id', 'DESC')->get();

    //echo   $slider;
    return view("admin/slider/slider", ['Slider' => $slider]);
  }

  public function addslider(Request $request)
  {


    $rules = [
      'title' => 'required',
      'subtitle' => 'required',
      'urllink' => 'required',
      'photo' => 'required',

      // 'title2' => 'required',
      // 'subtitle2' => 'required',
      // 'urllink2' => 'required',
      // 'photo2' => 'required',

      // 'title3' => 'required',
      // 'subtitle3' => 'required',
      // 'urllink3' => 'required',
      // 'photo3' => 'required',

    ];
    $file = $request->photo;
    $this->validate($request, $rules);
    $ext = $file->getClientOriginalExtension();
    $fnn = rand() . '.' . $ext;
    $destinationpath = public_path('upload/slider/image/');




    // $file = $request->photo2;
    // $this->validate($request, $rules);
    //  $ext = $file->getClientOriginalExtension();
    //  $fnn = rand() . '.' . $ext;
    // $destinationpath = public_path('assets/img/slider/');



    // $file = $request->photo3;
    // $this->validate($request, $rules);
    //  $ext = $file->getClientOriginalExtension();
    //  $fnn = rand() . '.' . $ext;
    // $destinationpath = public_path('assets/img/slider/');



    if ($file->move($destinationpath, $fnn)) {

      $data = new Slider();
      $data->title = $request->title;
      $data->subtitle = $request->subtitle;
      $data->urllink = $request->urllink;
      $data->photo = $request->photo;

      // $data->title2 = $request->title2;
      // $data->subtitle2 = $request->subtitle2;
      // $data->urllink2 = $request->urllink2;
      // $data->photo2 = $request->photo2;

      // $data->title3 = $request->title3;
      // $data->subtitle3 = $request->subtitle3;
      // $data->urllink3 = $request->urllink3;
      // $data->photo3 = $request->photo3;



      $data->photo = asset('public/upload/slider/image') . '/' . $fnn;
      // $data->photo2 = asset('assets/img/client') . '/' . $fnn;
      // $data->photo3 = asset('assets/img/client') . '/' . $fnn;
      // echo $data; die;
      if ($data->save()) {
        Session::flash('slider', 'Added  Successfully !');
        return redirect('/admin/showslider');
      }
    }
  }


  public  function delete($id)
  {
    DB::delete('delete from sliders where id = ?', [$id]);
    Session::flash('delete', "Deleted Successfully !");

    return redirect('/admin/showslider');
  }


  public function edit_right($id){

    $editslider = DB::select('select * from sliders where id = ?', [$id]);

     
    return view("admin/slider/edit_slider_right",['editslider'=>$editslider]);
  }

  public function right_data( Request $request){
    
    $input = $request->all();
    //print_r($input);exit;

    $rules = [
      'title' => 'required',
      'subtitle' => 'required',
      'urllink' => 'required',
      'photo' => 'required',
    ];
    $this->validate($request, $rules);
   
    $data = Slider::find($request->id);

    $data->title = $request->title;
    $data->subtitle = $request->subtitle;
    $data->urllink = $request->urllink;
    $data->photo = $request->photo;
    
    $file = $request->photo;
    $ext = $file->getClientOriginalExtension();
    $fnn = rand() . '.' . $ext;
    $destinationpath = public_path('upload/slider/image/');
   

    if($request->has('photo')) {
      $image = $request->file('photo');
      $filename = $image->getClientOriginalName();
      
      $image-> move($destinationpath, $filename);
      //$data->photo = $request->file('photo')->getClientOriginalName();
      $data->photo = asset('public/upload/slider/image') . '/' . $fnn;

      }
    $data->update();
    Session::flash('update', "Updated Successfully !");
    return redirect('/admin/showslider');
  }




////-----------left Slider-----------

  function showslider2()
  {
    $slider = Slider_left::orderBy('id', 'DESC')->get();

    //echo   $slider;
    return view("admin/slider/slider2", ['Slider' => $slider]);
  }

  public function addsliderleft(Request $request)
  {


    $rules = [
      'title' => 'required',
      'subtitle' => 'required',
      'urllink' => 'required',
      'photo' => 'required',

      

    ];
    $file = $request->photo;
    $this->validate($request, $rules);
    $ext = $file->getClientOriginalExtension();
    $fnn = rand() . '.' . $ext;
    $destinationpath = public_path('upload/slider/image/');

    if ($file->move($destinationpath, $fnn)) {

      $data = new Slider_left();
      $data->title = $request->title;
      $data->subtitle = $request->subtitle;
      $data->urllink = $request->urllink;
      $data->photo = $request->photo;

      $data->photo = asset('public/upload/slider/image') . '/' . $fnn;
      // $data->photo2 = asset('assets/img/client') . '/' . $fnn;
      // $data->photo3 = asset('assets/img/client') . '/' . $fnn;
      // echo $data; die;
      if ($data->save()) {
        Session::flash('slider', 'Added  Successfully !');
        return redirect('/admin/showslider2');
      }
    }
  }

  public  function delete_left($id)
  {
    
    DB::delete('delete from slider_lefts where id = ?', [$id]);
    Session::flash('delete', "Deleted Successfully !");

    return redirect('/admin/showslider2');
  }


  public function edit_left($id){

    $editslider = DB::select('select * from slider_lefts where id = ?', [$id]);

     
    return view("admin/slider/edit_slider_left",['editslider'=>$editslider]);
  }
    
  public function left_data( Request $request){


    $rules = [
      'title' => 'required',
      'subtitle' => 'required',
      'urllink' => 'required',
      'photo' => 'required',
    ];
    $this->validate($request, $rules);

    $data = Slider_left::find($request->id);

    $data->title = $request->title;
    $data->subtitle = $request->subtitle;
    $data->urllink = $request->urllink;
    $data->photo = $request->photo;

    if($request->has('photo')) {
      $image = $request->file('photo');
      $filename = $image->getClientOriginalName();
      
      $filename = uniqid().'.'.$filename;
   

      $image-> move(public_path('upload/slider/image/'), $filename);
      $data->photo = $request->file('photo')->getClientOriginalName();
      

      }
    $data->update();
    Session::flash('update', "Updated Successfully !");
    return redirect('/admin/showslider2');
  }


  

}
