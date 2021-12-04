@extends('backend.layouts.app')

@section('title', __('Status'))

@section('content')
    
    <form action="{{route('admin.s_inquire.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-12 p-1">
                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">

                            <div class="row">
                                        
                                <div class="row pe-0">
                                    <div class="col-12">
                                        <table class="table table-hover table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td width="15%" style="font-weight: 600; font-size:16px;">Name:</td>
                                                    <td style="font-size:16px;">{{ $s_inquire->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Email:</td>
                                                    <td style="font-size:16px;">{{ $s_inquire->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Solution:</td>
                                                    <td style="font-size:16px;">{{ $s_inquire->solution }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Contact Number:</td>
                                                    <td style="font-size:16px;">{{ $s_inquire->contact_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: 600; font-size:16px;">Message:</td>
                                                    <td style="font-size:16px;">{{ $s_inquire->message }}</td>
                                                </tr>
                                            </tbody>                                            
                                        </table>
                                    </div>                                            
                                            
                                </div>
                            </div>                            

                            <div class="mt-5 text-right">
                                <input type="hidden" name="hidden_id" value="{{ $s_inquire->id }}"/>
                                <a href="{{route('admin.s_inquire.index')}}" type="button" class="btn rounded-pill text-light px-4 py-2 me-2 btn-primary">Back</a>
                                @if($s_inquire->status == 'Seen')
                                @else
                                <input type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success" value="Seen" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>






<br><br>
@endsection
