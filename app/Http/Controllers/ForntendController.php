<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PracticeAreas;
use App\Atornies;
use App\BlogPost;


class ForntendController extends Controller
{
    
    public function index(){
        $practiceArea = PracticeAreas:: all();
        $attorneys = Atornies::all();
        $posts = BlogPost::all();
        return view('welcome')
        ->with('practices',$practiceArea)
        ->with('attorneys',$attorneys)
        ->with('posts',$posts);
    }
    public function about(){
        return view('about');
    }
    public function practice(){
        $practiceArea = PracticeAreas:: all();
        return view('practiceArea')->with('practices',$practiceArea);
    }
    public function attorneys(){
        $attorneys = Atornies::all();

        return view('attorneys')->with('attorneys',$attorneys);
    }
    public function blog(){
        $posts = BlogPost::all();

        return view('blog')->with('posts',$posts);
    }

     public function user(){

         $users= User::all();
         return view('UserIndex')->with('users',$users);
     }

     public function singlePost($slug){
         $post = BlogPost::where('slug',$slug)->first();
         $practiceArea = PracticeAreas:: all();
         return view('postSingle')
         ->with('post',$post)
         ->with('practices',$practiceArea);
     }
     public function singleCategory($id){

        $practice = PracticeAreas::find($id);
         return view('categorySingle')
         ->with('practice',$practice);
     }
     public function singlePractice($slug){
        $practices = PracticeAreas:: all(); 
        $practice = PracticeAreas::where('slug',$slug)->first();
        return view('practiceSingle')
        ->with('practice',$practice)
        ->with('practices',$practices);
    }


}
