<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\Solution;

class SolutionsController extends Controller
{
    public function index()
    {
        return view('backend.solutions.index');
    }
    public function create()
    {
        return view('backend.solutions.create');
    }

    public function getdetails(Request $request)
    {       
        $data = Solution::get();

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
                    $button = '<a href="'.route('admin.solutions.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
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
               
            $add = new Solution;

            $add->title_one=$request->title_one;        
            $add->title_two=$request->title_two;        
            $add->description=$request->description;       
            $add->image=$request->image;
            $add->order=$request->order;
            $add->status=$request->status;
            $add->save();

            return redirect()->route('admin.solutions.index')->withFlashSuccess('Added Successfully');              
            
        }
    }

    public function edit($id)
    {
        $solutions = Solution::where('id',$id)->first(); 

        return view('backend.solutions.edit',[
            'solutions' => $solutions
        ]);
    }

    public function update(Request $request)
    {

        if($request->image == null){
            return back()->withErrors('Please Add An Image');
        }else{              
               
            $update = new Solution;

            $update->title_one=$request->title_one;        
            $update->title_two=$request->title_two;        
            $update->description=$request->description;       
            $update->image=$request->image;
            $update->order=$request->order;
            $update->status=$request->status;

            Solution::whereId($request->hidden_id)->update($update->toArray());

            return redirect()->route('admin.solutions.index')->withFlashSuccess('Updated Successfully');              
            
        }
    }

    public function destroy($id)
    {
        Solution::where('id', $id)->delete(); 
    }


}
