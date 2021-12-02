<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\OurClient;
use App\Models\OurClientCategory;

class OurClientController extends Controller
{
    public function index()
    {
        return view('backend.our_client.index');
    }
    public function create()
    {
        $our_client_category = OurClientCategory::where('status','Enabled')->get(); 

        return view('backend.our_client.create',[
            'our_client_category' => $our_client_category
        ]);
    }

    public function getdetails(Request $request)
    {       
        $data = OurClient::get();

            return DataTables::of($data)
                ->editColumn('status', function($data){
                    if($data->status == 'Enabled'){
                        $status = '<span class="badge badge-success">Enabled</span>';
                    }
                    else{
                        $status = '<span class="badge badge-danger">Disabled</span>';
                    }   
                    return $status;
                })
                ->addColumn('category', function($data){                        
                    
                    $category = OurClientCategory::where('id',$data->category)->first();

                    if($category == null){
                        $details = '<span class="badge badge-danger">Not Set</span>';
                    }elseif($category->status != 'Enabled'){
                        $details = '<span class="badge badge-warning">Category Disabled</span>';
                    }else{
                        $details = $category->title;
                    }
                    
                    return $details;
                    
                })
                ->addColumn('image', function($data){
                    $img = '<img src="'.uploaded_asset($data->image).'" style="width: 60%">';                 
                    return $img;
                })
                ->addColumn('action', function($data){
                    $button = '<a href="'.route('admin.our_client.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                    $button1 = '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button.$button1;
                })
                ->rawColumns(['action','status','image','category'])
                ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {
        
        if($request->image == null){
            return back()->withErrors('Please Add An Image');
        }else{              
               
            $add = new OurClient;

            $add->description=$request->description;        
            $add->category=$request->category;        
            $add->image=$request->image;
            $add->order=$request->order;
            $add->status=$request->status;
            $add->save();

            return redirect()->route('admin.our_client.index')->withFlashSuccess('Added Successfully');              
            
        }
    }

    public function edit($id)
    {
        $our_client = OurClient::where('id',$id)->first(); 
        $our_client_category = OurClientCategory::where('status','Enabled')->get(); 

        return view('backend.our_client.edit',[
            'our_client' => $our_client,
            'our_client_category' => $our_client_category
        ]);
    }

    public function update(Request $request)
    {

        if($request->image == null){
            return back()->withErrors('Please Add An Image');
        }else{              
               
            $update = new OurClient;

            $update->description=$request->description;        
            $update->category=$request->category;        
            $update->image=$request->image;
            $update->order=$request->order;
            $update->status=$request->status;

            OurClient::whereId($request->hidden_id)->update($update->toArray());

            return redirect()->route('admin.our_client.index')->withFlashSuccess('Updated Successfully');              
            
        }
    }

    public function destroy($id)
    {
        OurClient::where('id', $id)->delete(); 
    }


}
