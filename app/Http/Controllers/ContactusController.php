<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ContactUs;
use App\Model\request_book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Psy\CodeCleaner\FunctionContextPass;

class ContactusController extends Controller
{
    public function contactlist(){

       // $contact  = ContactUs::all();
    
    ///    print_r($contact);

         return view('admin/contact');

    
       }



       public function requestlist(){

         $book  = request_book::all();
        
        // echo $book;

       return view('admin/request_list',['book'=>$book]);

       }

       public Function bookdelete($id){

        $data = DB::delete('delete from request_books where id =?' ,[$id]);

       // echo $data;
         
       Session::flash('request', "Request Book Delete Successfully");
       return redirect("admin/requestlist");




       }
}
