<?php

namespace App\Http\Controllers;
use App\Model\Author;
use App\Model\Product;
use App\Model\Publisher;

use DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class PublisherController extends Controller
{

    public function index(){

        $data = DB::table('publisher')->orderBy('id', 'DESC')->get();
       return view("admin.AddPublisher",['data'=>$data]);
   }

    public function addpublisher(Request $request){
        // $data = new Author();
        // $data->name = $request->get('name');
       if($files = $request->file('image')){
           $destinationPath = public_path('/upload/publisher');
           $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $image);
           $insert['image'] = "$image";
           $imagemodel= new Publisher();
 $imagemodel->image="$image";
 $imagemodel->name = $request->get('name');
 $imagemodel->save();
       }
        return view('admin.AddPublisher');
    }

    public  function deletepublisher($id)
    {
      $data = Publisher::find($id);
      $ret = $data->delete();
      Session::flash('message', " Deleted Successfully !");
  
      return redirect('/admin/publisher');
    }

    public function editpublisher($id){
        $data=Publisher::find($id);

       
         return json_encode($data);
     }

    public function publisherdatatable(){
        
        $user = Publisher::orderBy('id','DESC')->get();
        

        return DataTables::of($user)
        ->editColumn('id',function($user){
            return $user->id;
        })
        ->editColumn('name',function($user){
            return $user->name;
        })
        ->editColumn('image',function($user){
            return asset('public/upload/publisher')."/".$user->image;
        })
        ->editColumn('action',function($user){
            $deletepublisher=url('admin/deletepublisher',array('id'=>$user->id));
    
              $return = '<a onclick = "delete_record(' . "'" . $deletepublisher. "'" . ')"><i class="fa fa-trash f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a>
              <a onclick="editpublisher('.$user->id.')"  rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#editpublisher"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a>
              <a rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove"><i class="fa fa-eye f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a>';

              return $return;
           })
       
        ->make(true);
    }

    public function bookByPublisher($id){
        $productData = Product::all();
          $publisherData = Publisher::find($id);
          $publisherName = $publisherData->name;

          $findPublisher = Product::where('publisher',$publisherName)->get();
          
         dd($findPublisher->toArray());
    }

    public function updatepublisher(Request $request){
      
          $data=Publisher::find($request->id);
          $data->name = $request->title;
          $data->image = $request->description;
          $data->save();
          Session::flash('message','Updated Successfully !'); 
          Session::flash('alert-class', 'alert-success');
          return redirect('/admin/AdddPublisher');
        }
}