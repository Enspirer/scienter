@extends('backend.layouts.app')

@section('title', __('Edit Our Client Category'))

@section('content')

    <form action="{{route('admin.our_client_category.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $our_client_category->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="2">{{ $our_client_category->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="order" value="{{ $our_client_category->order }}" required>
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control custom-select" name="status" required>
                                <option value="Enabled" {{ $our_client_category->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $our_client_category->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                                                
                    </div>
                </div>
                <div class="text-right">
                    <input type="hidden" name="hidden_id" value="{{ $our_client_category->id }}"/>
                    <a href="{{route('admin.our_client_category.index')}}" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-primary ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn rounded-pill text-light px-4 py-2 ml-2 ms-2 btn-success">Update</button><br>
                </div>

            </div><br>
            

        </div>

    </form>


<br><br>
@endsection
