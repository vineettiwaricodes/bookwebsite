<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Vender;
use Session;
use App\Model\Setting;
use Throwable;
use DataTables;
use DB;
class VenderController extends Controller
{
    
// function vender(){
//     $vender = DB::table('venders')->get();
//       //echo $vender;
//      return view('admin/vender/add_form',['vender'=>$vender]);
// }


public function index(){
    return view("admin.vender.add_form");
}
   public function vender_add(Request $ld ){

   ///  echo "Hi..."; die;

    $rules = [
        'name'  => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
         'city' =>  'required',
         'country'=> 'required',
         'state'=> 'required',
         'pin_code'=> 'required',
      ];

      
       $this->validate($ld, $rules);
       // echo $val;
        $tabel = new Vender();
        $tabel->name = $ld->name;
        $tabel->email = $ld->email;
        $tabel->phone = $ld->phone;
        $tabel->address = $ld->address;
        $tabel->city = $ld->city;
        $tabel->country = $ld->country;
        $tabel->state = $ld->state;
        $tabel->pin_code = $ld->pin_code;
        //print_r( $tabel); die;
         /// echo $tabel;
      
      if ($tabel->save()) {
       
        Session::flash('message', "Vender Added Successfully !");
        return redirect('/admin/vender');
      }
   }

 


//    public function userdelete($id){
//     $user= Vender ::find($id);
//     $user->delete();
//     $order=Order::where("user_id",$id)->get();
//     foreach ($order as $k) {
//         $order=OrderResponse::where("order_id",$k->id)->delete();
//         $order=OrderData::where("order_id",$k->id)->delete();
//         $k->delete();
//     }
//      $delreview=Review::where("user_id",$id)->delete();
//      Session::flash('message',__('messages_error_success.user_del')); 
//      Session::flash('alert-class', 'alert-success');
//      return redirect()->back();
// }
   public  function venderdelete($id)
  {     
     DB::delete('delete from venders where id = ?', [$id]);

     Session::flash('message',__('messages_error_success.vender_del')); 
     Session::flash('alert-class', 'alert-success');
     return redirect()->back();
  }

  public  function changevenderstatus($id, $status)
  {     

    $status = $status == 'ACTIVE' ? 'INACTIVE' : 'ACTIVE';
     DB::update('update venders set is_active = "' . $status . '" where id = ' . $id, []);

     Session::flash('message',__('messages_error_success.vender_active_msg')); 
     Session::flash('alert-class', 'alert-success');
     return redirect()->back();
  }

  



  public function editvender($id){
    $data=Vender::find($id);
    return json_encode($data);
 }

  public function updatevender(Request $request){

    
    $data=Vender::find($request->id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;
    $data->city = $request->city;
    $data->country = $request->country;
    $data->state = $request->state;
    $data->pin_code = $request->pin_code;
  
    $data->save();
    Session::flash('message',__('messages_error_success.vender_update_success')); 
    Session::flash('alert-class', 'alert-success');
    return redirect()->back();
  }


  


  public function vendordatatable(){
    // $user =Vender::get();
     $user = Vender::orderBy('id','DESC')->get();
     // print_r($user); die;
    return DataTables::of($user)
       ->editColumn('id', function ($user) {
           return $user->id;
       })
       ->editColumn('name', function ($user) {
           return $user->name;
       })
       ->editColumn('email', function ($user) {
           return $user->email;
       })
       ->editColumn('phone', function ($user) {
           return $user->phone;
       })
       ->editColumn('address', function ($user) {
         return $user->address;
     })
     ->editColumn('city', function ($user) {
         return $user->city;
     })
     ->editColumn('country', function ($user) {
         return $user->country;
     }) 
     ->editColumn('state', function ($user) {
         return $user->state;
     }) 
     ->editColumn('pin_code', function ($user) {
         return $user->pin_code;
     })  
    ->editColumn('action', function ($user) {
        $changestatus=url('admin/changevenderstatus',array('id'=>$user->id,'status'=>$user->is_active));
         $deletevender=url('admin/venderdelete',array('id'=>$user->id));
        if($user->is_active=='ACTIVE'){
             $color="green";
          }
          else{
             $color="red";
          } 
          $return = '<a onclick="editvender('.$user->id.')"  rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" data-toggle="modal" data-target="#editvender"><i class="fa fa-edit f-s-25" style="margin-right: 10px;font-size: x-large;"></i></a><a onclick="delete_record(' . "'" . $deletevender. "'" . ')" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a><a href="'.$changestatus.'" rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-ban f-s-25" style="font-size: x-large;color:'.$color.'"></i></a>';
          return $return;              
     })          
       ->make(true);
}

}
