<?php

namespace App\Http\Controllers;
use App\BlogPost;
use App\PracticeAreas;
use Session;
use File;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = BlogPost ::all();
		
		return view('admin.BlogPost.index')->with('posts',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $practices =PracticeAreas::all();

        return view('admin.BlogPost.create')
        ->with('practices',$practices);
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
            'description' => 'required',
            'img' => 'required|image',
            'practice_areas_id' => 'required',
            
        ]);

        $img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/post', $img_new_name);

        $post = BlogPost::create([
			
            'title' => $request->title,
            'description' => $request->description,
            'practice_areas_id' => $request->practice_areas_id,
            'slug' => str_slug($request->title),
            'img' => 'uploads/post/'.$img_new_name,
        ]);

        Session::flash('success','BlogPost created successfully');

        return redirect()->route('posts');

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
        $post = BlogPost::find($id);

        return view('admin.BlogPost.edit')->with('post', $post);
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
            'description' => 'required',
            'img' => 'required|image',
        ]);

        $post = BlogPost::find($id);
		
		if($request->hasFile('img')){
			
		$img = $request->img;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/post', $img_new_name);
		
		$post->img = 'uploads/post/'.$img_new_name;	
					
		}

         $post->title = $request->title;

         $post->description = $request->description;
		
		 $post->save();
		
		Session::flash('success','post updated Successfully');
		
		return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = BlogPost::find($id);
		
		$imagepath = $post->image;
		
		if(file_exists($imagepath)){
			
			 File::delete($imagepath);
		}
		 $post->delete();
		
		Session::flash('success', 'BlogPost Deleted successfully.');

        return redirect()->route('posts');
    }
}
