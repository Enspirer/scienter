<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\Milestone;


class MilestoneController extends Controller
{    
    public function index()
    {
        return view('backend.milestone.index');
    }
    public function create()
    {
        return view('backend.milestone.create');
    }

    public function getdetails(Request $request)
    {       
        $data = Milestone::get();

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
                ->addColumn('image', function($data){
                    $img = '<img src="'.uploaded_asset($data->image).'" style="width: 60%">';                 
                    return $img;
                })
                ->addColumn('action', function($data){
                    $button = '<a href="'.route('admin.milestone.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                    $button1 = '&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    return $button.$button1;
                })
                ->rawColumns(['action','status','image'])
                ->make(true);
        
        return back();
    }

    public function store(Request $request)
    {
        
        if($request->image == null){
            return back()->withErrors('Please Add An Image');
        }else{              
               
            $add = new Milestone;

            $add->year=$request->year;        
            $add->title=$request->title;        
            $add->sub_title=$request->sub_title;        
            $add->description=$request->description;       
            $add->image=$request->image;
            $add->order=$request->order;
            $add->status=$request->status;
            $add->save();

            return redirect()->route('admin.milestone.index')->withFlashSuccess('Added Successfully');              
            
        }
    }

    public function edit($id)
    {
        $milestone = Milestone::where('id',$id)->first(); 

        return view('backend.milestone.edit',[
            'milestone' => $milestone
        ]);
    }

    public function update(Request $request)
    {

        if($request->image == null){
            return back()->withErrors('Please Add An Image');
        }else{              
               
            $update = new Milestone;

            $update->year=$request->year;        
            $update->title=$request->title;        
            $update->sub_title=$request->sub_title;      
            $update->description=$request->description;       
            $update->image=$request->image;
            $update->order=$request->order;
            $update->status=$request->status;

            Milestone::whereId($request->hidden_id)->update($update->toArray());

            return redirect()->route('admin.milestone.index')->withFlashSuccess('Updated Successfully');              
            
        }
    }

    public function destroy($id)
    {
        Milestone::where('id', $id)->delete(); 
    }

}
