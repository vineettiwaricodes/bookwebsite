<?php

namespace App\Http\Controllers;
use App\Model\blog;

use DataTables;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{


    public function index(){

         $blog = DB::table('blogs')->orderBy('id', 'DESC')->get();
        return view("admin.blog",['blog'=>$blog]);
    }

    // public function blog_add(Request $ld ){

    //     ///  echo "Hi..."; die;
     
    //      $rules = [
    //          'title'  => 'required',
    //          'description' => 'required',
    //          'photo' => 'required',
             
    //        ];
     
           
    //         $this->validate($ld, $rules);
    //         // echo $val;
    //          $upload    =  $file = $ld->file('photo');

    //          $file->getClientOriginalExtension();

    //          $destination = public_path('upload\blog\image');

    //          $new_name = rand().'.'.$file->getClientOriginalExtension();
    //           $file->move( $destination, $new_name );
                 
    //            $data = blog::create([
    //             'title' =>$ld->input('title'),
    //             'description'=>$ld->input('description'),
    //             'photo'=>$ld->input($upload)  , 
                
    //            ]);

    //         //  $tabel = new blog();
    //         //  $tabel->title = $ld->title;

    //         //  $tabel->description = $ld->description;
            
    //         //  $tabel->photo = $ld->photo;
             
    //          //print_r( $tabel); die;
    //           /// echo $tabel;
           
    //        if ($data ->save()) {
            
    //          Session::flash('message', "Blog Added Successfully !");
    //          return redirect('/admin/blog');
    //        }
    //     }


      public  function blog_add(Request $request){
          $rules = [
            'title'  => 'required|max:50|',
            'description' => 'required|max:250|',
             'photo' => 'required',
      
          ];
            $file = $request->photo;
            $this->validate($request, $rules);
             $ext = $file->getClientOriginalExtension();
             $fnn = rand() . '.' . $ext;
            $destinationpath = public_path('upload/img/blog/');
      
           if ($file->move($destinationpath, $fnn)) {
      
            $data = new blog ();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->photo =  $fnn;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keyword = $request->meta_keyword;
            $data->save();
              /// echo $data;
             if ($data->save()) {
              Session::flash('message', "Blog Added Successfully !");
             return redirect('/admin/blog');
               }
          }
        }

         
        public  function blogdelete($id)
        {
          DB::delete('delete from blogs where id = ?', [$id]);
          Session::flash('message', " Deleted Successfully !");
      
          return redirect('/admin/blog');
        }



        public function editblog($id){
            $data=blog::find($id);

           
             return json_encode($data);
         }
        
          public function updateblog(Request $request){
        
          //   $file = $request->photo;
            
          //    $ext = $file->getClientOriginalExtension();
          //    $fnn = rand() . '.' . $ext;
          //   $destinationpath = public_path('upload/img/blog/');
      
          //  if ($file->move($destinationpath, $fnn)) {
        
            $data=blog::find($request->id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->photo =  $request->photo;
           
          
            $data->save();
            Session::flash('message','Updated Successfully !'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/blog');
          }
        // }

      public function viewblog($id){   
        $data = blog::find($id);
        Session::put('blog',$data);
        return json_encode($data);
         //return json_encode($data);
      }

      

  public function blogdatatable(){
    // $user =Vender::get();
     $user = blog::orderBy('id','DESC')->get();
      //  print_r($user); die;

    return DataTables::of($user)
       ->editColumn('id', function ($user) {
           return $user->id;
       })
       ->editColumn('title', function ($user) {
           return $user->title;
       })
       ->editColumn('description', function ($user) {
           return $user->description;
       })
       ->editColumn('photo', function ($user) {
        return  asset('public/upload/img/blog')."/".$user->photo;
           
        
       })
       
    ->editColumn('action', function ($user) {
        $changestatus=url('admin/changevenderstatus',array('id'=>$user->id,'status'=>$user->is_active));
         $deleteblog=url('admin/blogdelete',array('id'=>$user->id));
        if($user->is_active=='ACTIVE'){
             $color="green";
          }
          else{
             $color="red";
          } 
          $return = '<a onclick="editblog('.$user->id.')"  rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#editblog"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a onclick="delete_record(' . "'" . $deleteblog. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>
          <a onclick="viewblog('.$user->id.')"  rel="tooltip" class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#viewblog"><i class="fa fa-eye f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a>';
          return $return;              
     })          
       ->make(true);
 }
}



