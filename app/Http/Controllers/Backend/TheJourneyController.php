<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\TheJourney;

class TheJourneyController extends Controller
{
    public function index()
    {
        return view('backend.the_journey.index');
    }
    public function create()
    {
        return view('backend.the_journey.create');
    }

    public function getdetails(Request $request)
    {       
        $data = TheJourney::get();

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
                    $button = '<a href="'.route('admin.the_journey.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
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
               
            $add = new TheJourney;

            $add->year=$request->year;        
            $add->title=$request->title;               
            $add->description=$request->description;       
            $add->image=$request->image;
            $add->order=$request->order;
            $add->status=$request->status;
            $add->save();

            return redirect()->route('admin.the_journey.index')->withFlashSuccess('Added Successfully');              
            
        }
    }

    public function edit($id)
    {
        $the_journey = TheJourney::where('id',$id)->first(); 

        return view('backend.the_journey.edit',[
            'the_journey' => $the_journey
        ]);
    }

    public function update(Request $request)
    {

        if($request->image == null){
            return back()->withErrors('Please Add An Image');
        }else{              
               
            $update = new TheJourney;

            $update->year=$request->year;        
            $update->title=$request->title;             
            $update->description=$request->description;       
            $update->image=$request->image;
            $update->order=$request->order;
            $update->status=$request->status;

            TheJourney::whereId($request->hidden_id)->update($update->toArray());

            return redirect()->route('admin.the_journey.index')->withFlashSuccess('Updated Successfully');              
            
        }
    }

    public function destroy($id)
    {
        TheJourney::where('id', $id)->delete(); 
    }
}
