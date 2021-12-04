<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\OurClient;
use App\Models\OurClientCategory;


class OurClientCategoryController extends Controller
{
    public function index()
    {
        return view('backend.our_client_category.index');
    }

    public function getdetails(Request $request)
    {
       
            $data = OurClientCategory::get();
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
                ->addColumn('action', function($data){
                    $button = '<a href="'.route('admin.our_client_category.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                    $button1 = '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button.$button1;
                })
                ->rawColumns(['action','status'])
                ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);  

        $data = OurClientCategory::where('title',$request->title)->first(); 

        if( $data == null ){
       
            $add = new OurClientCategory;

            $add->title = $request->title;        
            $add->description = $request->description;
            $add->order = $request->order;
            $add->status = $request->status;

            $add->save();

            return redirect()->route('admin.our_client_category.index')->withFlashSuccess('Added Successfully');
            

        }else{
            return back()->withErrors('Already Added This Category');
        }              

    }

    public function edit($id)
    {
        $our_client_category = OurClientCategory::where('id',$id)->first(); 

        return view('backend.our_client_category.edit',[
            'our_client_category' => $our_client_category
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);        
        
        $update = new OurClientCategory;

        $update->title = $request->title;        
        $update->description = $request->description;
        $update->order = $request->order;
        $update->status = $request->status;

        OurClientCategory::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.our_client_category.index')->withFlashSuccess('Updated Successfully'); 
                       
    }

    public function destroy($id)
    {
        OurClientCategory::where('id', $id)->delete(); 
    }
}
