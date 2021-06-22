@extends('admin.index')
@section('content')


<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1>{{__('messages.request_details')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active">{{__('messages.request_details')}}</li>
            </ol>
         </div>
      </div>
   </div>
</div>

<div class="content mt-3">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            @if(Session::has('message'))
            <div class="col-sm-12">
               <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('request') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            </div>
            @endif

            @if (session('request'))
           <div class="alert alert-success">
             {{ session('request') }}
             </div>
              @endif
            
            <div class="table-responsive dtdiv">
               <table  class="table table-striped table-bordered dttablewidth">
                  <thead>
                     <tr>
                        <th>Sr.No.</th>
                        <th>ISBN13</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Quantity</th>
                        <th>Email Id </th>
                        <th>Phone / Mobile no.</th>
                        <th>Date</th>
                        <th>action</th> 
                     </tr>
                     @foreach( $book as $b)
                     <tr>
                     <td>{{$b->id}}</td>
                     <td>{{$b->book_name}}</td>
                     <td>{{$b->title}}</td>
                     <td>{{$b->auther}}</td>
                     <td>{{$b->quantity}}</td>
                     <td>{{$b->email}}</td>
                     <td>{{$b->phone}}</td>
                     <td>{{$b->created_at}}</td>
                     <td><a href="{{url('admin/bookdelete')}}/{{$b->id}}" onclick="return confirm('Are You Sure ? ');"   rel="tooltip"  class="m-b-10 m-l-5" data-original-title="Remove" style="margin-right: 10px;" > <i class="fa fa-trash f-s-25" style="font-size: x-large;"></i> </a></td>
                     @endforeach
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
      </div>
   </div>


@stop