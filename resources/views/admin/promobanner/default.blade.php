@extends('admin.index') @section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="breadcrumbs">
    <div class="col-sm-4 float-right-1">
        <div class="page-header float-left float-right-1">
            <div class="page-title">
                <h1>{{__('Promotion Banner')}}
            </h1>
            </div>
        </div>
    </div>
   
<div class="content mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-6 ban col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 banner1 b2">
                            <?php 
                        if(empty($img1)){ ?>
                                <img id="thumbImg1" src="{{asset('demo.jpg')}}" class=" z-depth-1-half thumb-pic" alt="">
                                <?php  }else{?>
                                    <img id="thumbImg1" src="{{asset('public/upload/promobanner/image').'/'.$img1}}" class=" z-depth-1-half thumb-pic" alt="">
                                    <?php }  ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="banner2">
                                <?php 
                           if(empty($img1)){ ?>
                                    <img id="thumbImg2" src="{{asset('demo-1.jpg')}}" class=" z-depth-1-half thumb-pic" alt="">
                                    <?php  }else{?>
                                        <img id="thumbImg2" src="{{asset('public/upload/promobanner/image').'/'.$img2}}" class=" z-depth-1-half thumb-pic" alt="">
                                        <?php }  ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{__('messages.ban_upload_sec')}}
                        </div>
                        <form id="imageUploadForm" action="{{url('admin/updatepromobanner')}}" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="file-input" class=" form-control-label">{{__('messages.Banner_1')}}:-
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
                                        <input type="text" name="title1" id="title1" class="form-control" value="<?=isset($bannerdata[0]->title)?$bannerdata[0]->title:'0'; ?>" required placeholder="DESIGNER BAGS">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="file-input" class=" form-control-label">{{__('Description')}}
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" name="description1" id="subtitle1" class="form-control" required value="<?=isset($bannerdata[0]->subtitle)?$bannerdata[0]->title:'0'; ?>" placeholder="Be the first to get what’s new">
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="file-input" class=" form-control-label">{{__('messages.banner')}}
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="file" accept="image/*" name="photo1" id="upload_image1" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="file-input" class=" form-control-label">{{__('messages.Banner_2')}}:-
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
                                        <input type="text" required name="title2" id="title2" class="form-control" placeholder="DESIGNER BAGS" value="<?=isset($bannerdata[1]->title)?$bannerdata[1]->title:'0'; ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="file-input" class=" form-control-label">{{__('Description')}}
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" required name="description2" id="subtitle2" class="form-control" value="<?=isset($bannerdata[1]->subtitle)?$bannerdata[1]->title:'0'; ?>" placeholder="Be the first to get what’s new">
                                    </div>
                                </div>
                               
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="file-input" class=" form-control-label">{{__('messages.banner')}}
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="file" accept="image/*" name="photo2" id="upload_image2" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row form-group btncenter">

                                @if(Session::get("is_demo")=='1')
                                 <button type="button" onclick="return alert('This function is currently disable as it is only a demo website, in your admin it will work perfect')" class="btn btn-secondary d-flex justify-content-center mt-3 righttag">
                                    {{__('messages.save')}}
                                </button>
                                @else
                                  <button type="submit" class="btn btn-secondary d-flex justify-content-center mt-3 righttag">
                                    {{__('messages.save')}}
                                </button>
                                @endif
                              
                                <button type="button" class="btn btn-secondary d-flex justify-content-center mt-3">
                                    {{__('messages.cancel')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop