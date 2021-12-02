@extends('backend.layouts.app')

@section('title', __('Edit Our Client'))

@section('content')

<!-- <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script> -->

    <form action="{{route('admin.our_client.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Category <span style="color:red">*<span></label>
                            <select class="form-control" name="category" required>
                                @foreach($our_client_category as $key => $our_client_cat)
                                    <option value="{{ $our_client_cat->id }}" {{ $our_client_cat->id == $our_client->category ? "selected" : "" }}>{{ $our_client_cat->title }}</option>                    
                                @endforeach             
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="3">{{$our_client->description}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Image <span style="color:red">*<span></label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="image" class="selected-files" value="{{$our_client->image}}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $our_client->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $our_client->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span style="color:red">*<span></label>
                            <input type="number" class="form-control" name="order" value="{{$our_client->order}}" required>
                        </div>

                        
                    </div>
                </div>

                <div class="text-right">
                    <input type="hidden" name="hidden_id" value="{{ $our_client->id }}"/>
                    <a href="{{route('admin.our_client.index')}}" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-primary ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success">Update</button><br>
                </div>

            </div><br>
            
            

        </div>

    </form>



<br><br>
@endsection
