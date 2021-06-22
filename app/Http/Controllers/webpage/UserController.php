<?php

namespace App\Http\Controllers\webpage;

use Illuminate\Http\Request;
use App\Model\Banner;
use App\Model\PromoBanner;
use App\Model\Brand;
use App\Model\blog;
use App\Model\Categories;
use App\Model\Product;
use App\Model\ContactUs;
use App\Model\request_book;
use App\Model\Offer;
use App\User;
use App\Model\Setting;
use App\Model\Deal;
use App\Model\Seasonaloffer;
use App\Model\ProductAttributes;
use App\Model\Author;
use App\Model\Publisher;
use App\Model\Review;
use App\Model\DealofDay;
use App\Model\Wishlist;
use App\Model\BestSeller;
use App\Model\FeatureProduct;
Use Mail;
use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
         $banner  = Banner::all();
         $Brand = Brand::all();

        $category  = Categories::all();
        $promobanner = PromoBanner::all();
        $author = Author::all();
        $publisher = Publisher::all();
        $Product  = Product::all();
        $bestseller = BestSeller::with('productdata')->get();
        $bigOffer = Offer::where('offer_type','1')->orderBy('id','DESC')->first();
        $normalOffer = Offer::where('offer_type','2')->orderBy('id','DESC')->first();
        $seasonalOffer = Seasonaloffer::orderBy('id','DESC')->first();
        $currentOffer = Deal::orderBy('id','DESC')->with('offer')->first();
        $childrenbook = Product::where('category',7)->get();
        $artbooks = Product::where('category',2)->get();
        $blogData = blog::get();
        $catmenu = Categories::where('parent_category',0)->get();
        $parentcat = $catmenu->where('is_delete',0);
        $dealofday = DealofDay::with('productdata')->get();
        $featureproduct = FeatureProduct::with('productdata')->get();
       
        Session::put('parent_category',$parentcat);
       

       
       
        // $authuser = Auth::user()->id;
        // dd($authuser);
        // $wish = Wishlist::where('user_id',$authuser)->get();
        // $count = $wish->count();

         return view('webpages/index',['Brand'=>$Brand,'banner'=>$banner,'category'=>$category,'product'=>$Product,
        'bigOffer'=>$bigOffer, 'normalOffer'=>$normalOffer,'seasonalOffer'=>$seasonalOffer, 'currentOffer'=>$currentOffer,
        'author'=>$author,'publisher'=>$publisher,'childrenbook'=>$childrenbook,'artbooks'=>$artbooks,'blogdata'=>$blogData,
        'parentcat'=>$parentcat, 'bestseller'=>$bestseller,'promobanner'=>$promobanner,'dealofday'=>$dealofday,
        'featureproduct'=>$featureproduct]);
        // echo'hello';
    }

    public function productdetails($id){
        $productdetail = DB::select('select * from products where id = ?', [$id]);
        $productattributes = ProductAttributes::where('product_id',$id)->get();
        $review = Review::with(['product','userdata'])->get();
         
       // print_r($productdetail) ;
        return view('webpages/product-details',['productdetail'=>$productdetail, 'productattributes'=>$productattributes,
        'review'=>$review]);
       
    }


    public function cart($id){

        $product = DB::Select('Select * from products where id = ?', [$id]);
        Session::put('cart',$product);
          return view('webpages/cart',['product'=>$product]);
    }

   public function check_out(){
          $product  = Product::all();
    return view("webpages/checkout",['product'=>$product]);

   }



    public function checkout($id){

        $product = DB::Select('Select * from products where id = ?', [$id]);

        return view("webpages/checkout",['product'=>$product]);
    }

    public function order($id){

        $product = DB::Select('Select * from products where id = ?', [$id]);

        return view("webpages/order-complete",['product'=>$product]);
    }


    public function contact(){

        return view('webpages/contact');
    }


    public function storecontact(Request $request){

        $rules = [
            'name'  => 'required',
            'email'  => 'required|email',
            'subject'  => 'required',
            'phone'  => 'required',
            'message' => 'required'
          ];

          $custommessage = [
            'name.required' => 'Enter Your Name',
            'email.required' => 'Enter Your Email',
            'subject.required' => 'Enter Your Subject',
            'phone.required' => 'Enter Your Phone',
            'message.required' => 'Enter Your Message'
          ];
          $this->validate($request, $rules, $custommessage);
      

        $store=new ContactUs();
        $store->name=$request->get("name");
        $store->email=$request->get("email");
        $store->subject=$request->get("subject");
        $store->phone=$request->get("phone");
        $store->message=$request->get("message");
        //echo $store;
         $store->save();
       // Session::flash('message',__('messages.contact_success')); 
       /// Session::flash('alert-class', 'alert-success');
       /// return redirect()->back();
     
       Session::flash('message', "Your Message has been sent successfully !");
          return redirect('contact');
       ///echo ' Your message has been sent successfully !';
    }

    public function login_register(){

    return view('webpages/login-register');


    }



    public function search( Request $request){

        $search = $request->input('search_product');

         //$data['result']= DB::table('products')->WHERE('name', 'LIKE', '%' .$search . '%')->get();
        
         $result = Product::where('name', 'LIKE', '%' . $search .'%')->get();

        //print_r($data) ;
        ///echo $search;

        if  (count($result) > 0){

            return view('webpages/result',['result'=>$result]);
            //print_r($data) ;
           }else{

            return view('webpages/result_not_found');
            //echo "Result Not Found ! try again !!";
   
        }
       

    }


    public function request_a_book(){

         return view('webpages/request-a-book');

    }


    public function book_request(Request $request){

        $rules = [
            'book_name'  => 'required',
            'title'  => 'required',
            'auther'  => 'required',
            'quantity'  => 'required',
            'email' => 'required',
            'phone' => 'required'
            
          ];

          $custommessage = [
            'book_name.required' => 'Enter Your ISBN Name',
            'title.required' => 'Enter Your Book Title',
            'auther.required' => 'Enter Your Author Name',
            'quantity.required' => 'Enter Your Quantity',
            'email.required' => 'Enter Your Email ID',
            'phone.required' => 'Enter Your  Mobile Number'
          ];
          $this->validate($request, $rules, $custommessage);


          $store=new request_book();
          $store->book_name=$request->get("book_name");
          $store->title=$request->get("title");
          $store->auther=$request->get("auther");
          $store->quantity=$request->get("quantity");
          $store->email=$request->get("email");
          $store->phone=$request->get("phone");
          

          /// echo $store;

           $store->save();
               
           Session::flash('request', "Your Request has been sent successfully !");
           return redirect("request_a_book");
        //// echo ' Your Request has been sent successfully !';
    }



     public function blogdetail(){


      return view("webpages/blog-details");

     }


     public function bloglist(){


        return view('webpages/blog-list');
     }



     public function productlist(){

        $banner  = Banner::all();
        $Brand = Brand::all();

       $category  = Categories::all();
       $Product  = Product::all();

        return view('webpages/product-list',['Brand'=>$Brand,'banner'=>$banner,'category'=>$category,'product'=>$Product]);

     }


    public function userregister(Request $request){
        $setting=Setting::find(1);    
        $checkemail=User::where("email",$request->get("email"))->first();
        if(empty($checkemail)){
           DB::beginTransaction();
              try {
                    $user=new User();
                    $user->first_name=$request->get("first_name");
                    $user->email=$request->get("email");
                    $user->password=$request->get("password");
                    $user->is_email_verified='1';
                    $user->address=$request->get("address");
                    $user->phone=$request->get("phone");
                    $user->login_type=1;
                    $user->user_type='1';                                    
                    $user->save();
                    try {
                        if($setting->customer_reg_email=='1'){
                            Mail::send('email.register_confirmation', ['user' => $user], function($message) use ($user){
                                                     $message->to($user->email,$user->first_name)->subject('shop on');
                                    });
                        }
                    } catch (\Exception $e) {
                    }
                    DB::commit();
                    return "done";
              }
              catch (\Exception $e) {
                   DB::rollback();
                   return __('messages_error_success.error_code');      
              }          
        }
        else{
            return __('messages_error_success.email_already_error');
        }
    }


    public function userlogin(Request $request){
        $setting=Setting::find(1);
        $checkuser=User::where("email",$request->get("email"))->where("password",$request->get("password"))->first();
        if($checkuser){
             
              Auth::login($checkuser, true);
              $data=Auth::user();
              if($request->get("rem_me")==1){
                  setcookie('user_email', $request->get("email"), time() + (86400 * 30), "/");
                  setcookie('password',$request->get("password"), time() + (86400 * 30), "/");
                 setcookie('rem_me',1, time() + (86400 * 30), "/");
             } 
              return "done";
        }
      else{
          return __('messages_error_success.login_error');
      } 
  }

  public function wishlistall(){
      $authuser = Auth::user()->id;

      $data = Wishlist::where('user_id',$authuser)->with('product')->get();
      $count = $data->count();
      Session::put('count',$count);
      return view('webpages.wishlist',['data'=>$data,'count'=>$count]);
  }

  public function addtowishlist(Request $request,$id){
      $data = Product::find($id);
      $getid = $data->id;
      $userid = Auth::user()->id;
      
      $checkexist = Wishlist::where('product_id',$getid);

      $store = new wishlist();
      $store->product_id = $getid;
      $store->user_id = $userid;
      $store->save();
      return redirect("/index");

  }
  public function deletewishlist($id){
      $data = Wishlist::find($id);
      $del = $data->delete();
      return redirect("/wishlist");
  }

  public function myaccount(){
    return view('webpages.my-account');
  }

  public function viewallfeature(){
      $data = Product::get();
      return view('webpages.viewallfeature',['data'=>$data]);
  }

  public function viewallchildren(){
      $data = Product::where('category',7)->get();
      return view('webpages.viewallchildren',['data'=>$data]);
  }
  public function viewallart(){
      $data = Product::where('category',2)->get();
      return view('webpages.viewallart',['data'=>$data]);
  }
  public function viewallbookbyauthor(){
    $data = DB::table('author')->orderBy('id', 'DESC')->get();
    return view('webpages.viewallbookbyauthor',['data'=>$data]);
  }
  public function viewallbookbypublisher(){
    $data = DB::table('publisher')->orderBy('id', 'DESC')->get();
    return view('webpages.viewallbooksbypublisher',['data'=>$data]);
  }

  public function viewbookbyauthor($id){
    $productData = Product::all();
    $authorData = Author::find($id);
    $authorName = $authorData->name;

    $data = Product::where('author',$authorName)->get();
    return view('webpages.viewbookbyauthor',['data'=>$data]);
  }

  public function viewbookbypublisher($id){
    $productData = Product::all();
    $publisherData = Publisher::find($id);
    $publisherName = $publisherData->name;

    $data = Product::where('publisher',$publisherName)->get();
    return view('webpages.viewbookbypublisher',['data'=>$data]);
  }


  public function productview($id){
    $view = Product::find($id);
    return  "<table class='table table-hover'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{$view->id}</td>
            <td>{$view->name}</td>
            <td>{$view->description}</td>
        </tr>
    </tbody>
</table>
";    
}

  
}
