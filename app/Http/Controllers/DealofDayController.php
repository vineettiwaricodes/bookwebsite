<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\BestSeller;
use App\Model\DealofDay;
use Session;
use DataTables;

class DealofDayController extends Controller
{

    public function index(){
        
        $data=Product::where('status','1')->where('is_deleted','0')->get();
        return view("admin.product.dealofday")->with("productData",$data);
   }

   public function adddealofdayproduct(Request $request){
    $store=new DealofDay();
    $store->product_id=$request->get("product_id");
    $store->save();
    Session::flash('message',__('messages_error_success.feature_product_add')); 
    Session::flash('alert-class', 'alert-success');
    return redirect()->back();
}

    public function dealofdaydatatable(){
    $category = DealofDay::with('productdata')->get();
    return DataTables::of($category)
       ->editColumn('id', function ($category) {
           return $category->id;
       })
       ->editColumn('image', function ($category) {
             return asset('public/upload/product')."/".$category->productdata->basic_image;
       })
         ->editColumn('product', function ($category) {
           return $category->productdata->name;
       })                        
       ->editColumn('action', function ($category) {  
       $delete=url('admin/deletedealofday',array('id'=>$category->id));    
            $return = '<a onclick="delete_record(' . "'" . $delete. "'" . ')" rel="tooltip" title="Delete Category" class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;"><i class="fa fa-trash f-s-25" style="font-size: x-large;"></i></a>';

            return $return;              
       })           
       ->make(true);
}

    public function deletedealofday($id){
        $store=DealofDay::find($id);
        $store->delete();
        Session::flash('message',__('messages_error_success.feature_product_del')); 
        Session::flash('alert-class', 'alert-success');
        return redirect()->back();
}
}