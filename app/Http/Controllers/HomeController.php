<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Atornies;
use App\BlogPost;
use App\Message;
use App\PracticeAreas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = BlogPost::all();
       $atornies = Atornies::all();
       $messages = Message::all();
       $practices = PracticeAreas::all();
       
        return view('dashboard')
        ->with('posts_count',$posts->count())
        ->with('atornies_count',$atornies->count())
         ->with('message_count',$messages->count())
        ->with('practices_count',$practices->count());
    }
}
