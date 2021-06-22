@extends('admin.index') @section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="breadcrumbs">
    <div class="col-sm-4 float-right-1">
        <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1>{{__('messages.Slider')}}
                </h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8 float-left-1">
        <div class="page-header float-right float-left-1">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">{{__('messages.Slider')}}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 ban col-md-12">
                    @if (session('slider'))
                    <div class="alert alert-success">
                        {{ session('slider') }}
                    </div>
                    @endif

                    @if (session('delete'))
                    <div class="alert alert-success">
                        {{ session('delete') }}
                    </div>
                    @endif

                    @if (session('update'))
                    <div class="alert alert-success">
                        {{ session('update') }}
                    </div>
                    @endif
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                {{__('messages.sli_edit_sec')}}
                            </div>
                            <form id="imageUploadForm" action="{{url('admin/left_data')}}" enctype="multipart/form-data" method="post">
                                {{csrf_field()}}
                                <input type="hidden" class="form-control" name="id" value='{{$editslider[0]->id}}' >
                                <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.Slider_1')}}:-
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.title')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" name="title" id="title" value="{{$editslider[0]->title}}" class="form-control" required placeholder="Title ">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.sub_title')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" name="subtitle" id="subtitle" value="{{$editslider[0]->subtitle}}" class="form-control" required placeholder="Be the first to get what’s new">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.url_link')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" name="urllink" id="subtitle" value="{{$editslider[0]->urllink}}" class="form-control" required placeholder="Url link">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.Slider')}} (542X708)
                                            </label>
                                        </div>
                                        </div>
                                        
                                        <img src="{{$editslider[0]->photo}}" alt="Photo" width="200px" height="200px">
                                        
                                        <div class="col-12 col-md-8">
                                            <input type="file" accept="image/*" value="{{$editslider[0]->photo}}" name="photo" id="upload_image1" class="form-control-file">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.Slider_2')}}:-
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.title')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="title2" id="title2" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.sub_title')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="subtitle2" id="subtitle2" class="form-control" placeholder="Be the first to get what’s new">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.url_link')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="urllink2" id="subtitle2" class="form-control" placeholder="Url link">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.Slider')}} (542X708)
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="file" accept="image/*" name="photo2" id="upload_image2" class="form-control-file">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="card-body">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.Slider_3')}}:-
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.title')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="title3" id="title3" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.sub_title')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="subtitle3" id="subtitle3" class="form-control" placeholder="Be the first to get what’s new">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.url_link')}}
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="text" required name="url" id="urllink3" class="form-control" placeholder="Url link">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="file-input" class=" form-control-label">{{__('messages.Slider')}} (542X708)
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <input type="file" accept="image/*" name="photo3" id="upload_image3" class="form-control-file">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row form-group btncenter">

                                    @if(Session::get("is_demo")=='1')
                                    <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-secondary d-flex justify-content-center mt-3 righttag">
                                        {{__('messages.update')}}
                                    </button>
                                    @else
                                    <button type="submit" class="btn btn-primary d-flex justify-content-center mt-3 righttag">
                                        {{__('messages.update')}}
                                    </button>
                                    @endif

                                    <button type="reset" class="btn btn-danger d-flex justify-content-center mt-3">
                                        {{__('messages.cancel')}}
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive dtdiv">
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop