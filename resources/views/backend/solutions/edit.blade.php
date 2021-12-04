@extends('backend.layouts.app')

@section('title', __('Edit Solutions'))

@section('content')

    <form action="{{route('admin.solutions.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Title One <span class="text-danger">*<span></label>
                            <input type="text" class="form-control" name="title_one" value="{{$solutions->title_one}}" required>
                        </div>

                        <div class="form-group">
                            <label>Title Two <span class="text-danger">*<span></label>
                            <input type="text" class="form-control" name="title_two" value="{{$solutions->title_two}}" required>
                        </div>                      

                        <div class="form-group">
                            <label>Description <span class="text-danger">*<span></label>
                            <textarea class="form-control" name="description" rows="3" required>{{$solutions->description}}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Image <span class="text-danger">*<span></label>
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                </div>
                                <div class="form-control file-amount">Choose File</div>
                                <input type="hidden" name="image" class="selected-files" value="{{$solutions->image}}">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div> 

                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $solutions->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $solutions->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span style="color:red">*<span></label>
                            <input type="number" class="form-control" name="order" value="{{$solutions->order}}" required>
                        </div>                     
                                               
                    </div>
                </div>

                <div class="text-right">
                    <input type="hidden" name="hidden_id" value="{{ $solutions->id }}"/>
                    <a href="{{route('admin.solutions.index')}}" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-primary ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success">Update</button><br>
                </div>

            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
