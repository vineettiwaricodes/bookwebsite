@extends('admin.index')
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4 float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1>{{__('Add Publisher')}}</h1>
         </div>
      </div>
   </div>
   <div class="content mt-3">
      <div class="col-12">
         <div class="card">
            <div class="card-body">
               @if(Session::has('message'))
               <div class="col-sm-12">
                  <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               </div>
               @endif
               <button  data-toggle="modal" data-target="#addpublisher" class="btn btn-primary btn-flat m-b-30 m-t-30" >{{__('Add Publisher')}}</button>
               <div class="table-responsive dtdiv">
                  <table id="publisherTable" class="table table-striped table-bordered dttablewidth">
                     <thead>
                        <tr>
                           <th>{{__('messages.id')}}</th>
                        
                           <th> {{__('messages.name')}}</th>
                           <th>Image</th>
                           <th>Action</th>
                           
                          
                           
                        </tr>
                       
                     </thead>    
               
                  </table>
               </div>
            </div>
         </div>
      </div>


      <div class="modal fade" id="addpublisher" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="smallmodalLabel">{{__('Add Publisher')}}</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="{{url('admin/add_publisher')}}" method="POST" enctype="multipart/form-data" >
               {{csrf_field()}}
               <input type="hidden" name="" value="2"/>
               <div class="modal-body">
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1">{{__('messages.name')}}<span class="reqfield">*</span></label>
                        <input id="title" name="name" type="text" class="form-control" required  placeholder="{{__('messages.title')}}">
                     </div>

                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1">{{__('Image')}}<span class="reqfield">*</span></label>
                        <input id="image" name="image" type="file" class="form-control" required  placeholder="{{__('image')}}">
                     </div>
                  </div>
                  
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.cancel')}}</button>
                  
                        <button type="submit" class="btn btn-primary">{{__('messages.submit')}}</button>
                     
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- edit publisher -->
   <div class="modal fade" id="editpublisher" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="smallmodalLabel">
                  {{__('Edit Publisher')}}
               </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="{{url('admin/updatepublisher')}}" method="post" enctype="multipart/form-data" >
               {{csrf_field()}}
               <input type="hidden" name="id" id="id" value='{{$data[0]->id}}'/>
               <div class="modal-body">
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1">{{__('messages.title')}}<span class="reqfield">*</span></label>
                        <input id="edit_name" name="name" type="text" class="form-control" value='{{$data[0]->name}}' required  placeholder="{{__('name')}}">
                     </div>
                     
                  </div>
                 
                  <div class="form-group col-md-12 paddiv">
                     <div class="col-md-12">
                        <label for="cc-payment" class="control-label mb-1">{{__('Image')}}<span class="reqfield">*</span></label>
                        <input id="edit_image" name="name" type="file" class="form-control"  required   >
                     </div>
                     
                  </div>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.cancel')}}</button>
                     @if(Session::get("is_demo")=='1')
                        <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-primary">
                                 {{__('messages.save')}}
                        </button>
                     @else
                         <button type="submit" class="btn btn-primary">{{__('messages.submit')}}</button>
                     @endif
               
                     </div>
            </form>
         </div>
      </div>
   </div>
  
@stop
