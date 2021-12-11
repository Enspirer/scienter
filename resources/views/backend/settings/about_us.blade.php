@extends('backend.layouts.app')

@section('title', __('About Us'))

@section('content')

    
<div class="row">
    <div class="col-12">
        <form action="{{route('admin.about_us_update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label>Content One Title <span class="text-danger">*<span></label>
                        <input type="text" class="form-control" name="our_story_title" value="{{$our_story_title->value}}" required>
                    </div>  

                    <div class="form-group">
                        <label>Content One Description <span class="text-danger">*<span></label>
                        <textarea class="form-control" name="our_story_description" rows="4" required>{{$our_story_description->value}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Content One Image</label>
                        <input type="file" class="form-control" name="our_story_image">
                        <br>
                        <img src="{{ url('files/about_us',$our_story_image->value) }}" width="30%" />
                    </div>               
                        
                </div>
            </div>
            <div align="center">
                <button type="submit" class="btn rounded-pill text-light px-4 py-2 me-2 btn-success">Update</button><br><br><br>
            </div>
        </form>
    </div>  
    
    <div class="col-12">
        <form action="{{route('admin.excellence_update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label>Content Two Text <span class="text-danger">*<span></label>
                        <input type="text" class="form-control" name="excellence_text" value="{{$excellence_text->value}}" required>
                    </div> 

                    <div class="form-group">
                        <label>Content Two Title <span class="text-danger">*<span></label>
                        <input type="text" class="form-control" name="excellence_title" value="{{$excellence_title->value}}" required>
                    </div>  

                    <div class="form-group">
                        <label>Content Two Description <span class="text-danger">*<span></label>
                        <textarea class="form-control" name="excellence_description" rows="5" required>{{$excellence_description->value}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Content Two Image</label>
                        <input type="file" class="form-control" name="excellence_image">
                        <br>
                        <img src="{{ url('files/about_us',$excellence_image->value) }}" width="30%" />
                    </div>               
                        
                </div>
            </div>
            <div align="center">
                <button type="submit" class="btn rounded-pill text-light px-4 py-2 me-2 btn-success">Update</button><br><br><br>
            </div>
        </form>
    </div>  
            
</div>    


@endsection
