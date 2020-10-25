<?php

namespace App\Http\Controllers;
use App\Atornies;
use Session;
use File;

use Illuminate\Http\Request;

class AtorniiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atornies = Atornies ::all();
		
		return view('admin.Atornies.index')->with('atornies',$atornies);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Atornies.create');
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
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'education' => 'required',
            'img' => 'required|image',
        ]);
        $img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/atornies', $img_new_name);

        $post = Atornies::create([
			
            'title' => $request->title,
            'name' => $request->name,
            'description' => $request->description,
            'education' => $request->education,
            'img' => 'uploads/atornies/'.$img_new_name,
        ]);

        Session::flash('success','Arotny Profile successfully');

        return redirect()->route('atornies');
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
        $atorny = Atornies::find($id);
		
        return view('admin.Atornies.edit')->with('atorny', $atorny);
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
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'education' => 'required',
        ]);

        $atorny = Atornies::find($id);
		
		if($request->hasFile('img')){
			
		$img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/atornies', $img_new_name);
		
		$atorny->img = 'uploads/atornies/'.$img_new_name;	
					
		}
		
         $atorny->name = $request->name;

         $atorny->title = $request->title;

         $atorny->education = $request->education;

         $atorny->description = $request->description;
		
		 $atorny->save();
		
		Session::flash('success','Atorny updated Succesfully');
		
		return redirect()->route('atornies');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atorny = Atornies::find($id);
		
		$imagepath = $atorny->image;
		
		if(file_exists($imagepath)){
			
			 File::delete($imagepath);
		}
		 $atorny->delete();
		
		Session::flash('success', 'Atorny Deleted successfully.');

        return redirect()->route('atornies');
    }
}
