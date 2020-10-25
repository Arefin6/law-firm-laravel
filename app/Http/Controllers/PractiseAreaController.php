<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PracticeAreas;
use Session;
use File;

class PractiseAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.practice.index')->with('practices',PracticeAreas::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.practice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'img' => 'required|image',
        ]);
        $img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/practice', $img_new_name);

        $post = PracticeAreas::create([
			
            'name' => $request->name,
            'description' => $request->description,
            'slug' => str_slug($request->name),
            'img' => 'uploads/practice/'.$img_new_name,
        ]);

        Session::flash('success','Practice Area Added successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $practice = PracticeAreas::find($id);
		return view('admin.practice.edit')->with('practice',$practice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		 $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'img' => 'required|image',
        ]);
		$practice = PracticeAreas::find($id);
		
		if($request->hasFile('img')){
			
		$img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/practice', $img_new_name);
		
		$practice->img = 'uploads/practice/'.$img_new_name;	
					
		}
		
		 $practice->name = $request->name;
		
         $practice->description = $request->description;
		
		 $practice->save();
		
		Session::flash('success','Practice Area updated Succesfully');
		
		return redirect()->route('practice');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $practice = PracticeAreas::find($id);
		
		$imagepath = $practice->image;
		
		if(file_exists($imagepath)){
			
			 File::delete($imagepath);
		}
		 $practice->delete();
		
		Session::flash('success', 'Practice Deleted successfully.');

        return redirect()->route('practice');
    }
}
