<?php

namespace App\Http\Controllers;
use App\Model\Author;
use App\Model\Product;

use DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{

    public function index(){

        $data = DB::table('author')->orderBy('id', 'DESC')->get();
       return view("admin.Addauthor",['data'=>$data]);
   }

    public function addauthor(Request $request){
        // $data = new Author();
        // $data->name = $request->get('name');
       if($files = $request->file('image')){
           $destinationPath = public_path('/upload/author');
           $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $image);
           $insert['image'] = "$image";
           $imagemodel= new Author();
 $imagemodel->image="$image";
 $imagemodel->name = $request->get('name');
 $imagemodel->save();
       }
        return view('admin.Addauthor');
    }

    public  function authordelete($id)
    {
      $data = Author::find($id);
      $ret = $data->delete();
      Session::flash('message', " Deleted Successfully !");
  
      return redirect('/admin/author');
    }

    public function authordatatable(){
        
        $user = Author::orderBy('id','DESC')->get();
        

        return DataTables::of($user)
        ->editColumn('id',function($user){
            return $user->id;
        })
        ->editColumn('name',function($user){
            return $user->name;
        })
        ->editColumn('image',function($user){
            return asset('public/upload/author')."/".$user->image;
        })
       ->editColumn('action',function($user){
        $deleteauthor=url('admin/deleteauthor',array('id'=>$user->id));

          return '<a onclick = "delete_record(' . "'" . $deleteauthor. "'" . ')"><i class="fa fa-trash f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a>
          <a onclick="editauthor('.$user->id.')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#editauth"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a>
          <a rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove"><i class="fa fa-eye f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a>';
       })
        ->make(true);
    }

    public function editauthor($id){
        $data=Author::find($id);
        return json_encode($data);
    }

    public function updateauthor(Request $request){

        $data=Author::find($request->get("id"));
        $data->name=$request->get("name");
        $data->image=$request->get("image");
        $data->save();
        Session::flash('message',__('messages_error_success.user_update_success')); 
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
      }

      public function bookByAuthor($id){
          $productData = Product::all();
          $authorData = Author::find($id);
          $authorName = $authorData->name;

          $findAuthor = Product::where('author',$authorName)->get();
          
         dd($findAuthor->toArray());
          
      }
}