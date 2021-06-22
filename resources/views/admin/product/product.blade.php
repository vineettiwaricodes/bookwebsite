@extends('admin.index')
@section('content')
<div class="breadcrumbs">
   <div class="col-sm-4  float-right-1">
      <div class="page-header float-left float-right-1">
         <div class="page-title">
            <h1>{{__('messages.catalog')}}</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8 float-left-1">
      <div class="page-header float-right float-left-1">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="#">{{__('messages.product')}}</a></li>
               <li class="active">{{__('messages.catalog')}}</li>
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
                  <div class="alert  {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{{ Session::get('message') }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               </div>
               @endif
               <button  class="btn btn-primary btn-flat m-b-30 m-t-30" onclick="addcatlog()" >{{__('messages.add')}} {{__('messages.catalog')}}</button>
<!-- import -->
               <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="file" class="form-control">
                <br>
                <button type="submit" class="btn btn-success">Import Bulk Data</button>
                <a class="btn btn-warning" href="{{route('export')}}">Export Bulk Data</a>
              
            </form>
        </div>

               <div class="table-responsive cmr1">
                  <table id="productdataTable" class="table table-striped table-bordered dttablewidth" >
                     <thead>
                        <tr>
                           <th>{{__('messages.id')}}</th>
                           <th>{{__('messages.thumbnail')}}</th>
                           <th>{{__('messages.name')}}</th>
                           <th>{{__('messages.price')}}</th>
                           <th>{{__('messages.action')}}</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
      </div>

</div>

<!-- modal for preview -->
<div class="modal fade" id="previewproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body message-modal">
         <table class="table table-striped">
         <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Author</th>
        <th>Language</th>
        <th>Publisher</th>
        <th>ISBN</th>
        <th>Binding</th>
        <th>Print</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
            <tr>
               <td id="name"></td>
               <td id="vender_name"></td>
               <td id="author"></td>
               <td id="language"></td>
               <td id="publisher"></td>
               <td id="isbn"></td>
               <td id="binding"></td>
               <td id="print"></td>
            </tr>
            <tr>
            
            </tr>
</tbody>
         </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@stop