<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Log;
use Carbon\Carbon;

use App\User;
use App\Post;
use App\Category;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        $categories = Category::all();
        $comments = Comment::all();

        $recents = Post::orderBy('updated_at','desc')->take(1)->get();

        $banners = Post::orderBy('created_at', 'desc')->skip(1)->take(2)->get();

        //$hottest = Post::withCount('comments')->orderBy('post_id', 'desc')->get();



        return view('welcome', compact('users', 'posts', 'categories', 'comments', 'recents', 'banners'));

    }

    public function getPostsByCategory($category_id)
    {
        return view();
    }

    public function post($slug)
    {
        $post = Post::findBySlug($slug);

        return view('post', compact('post'));
    }
}
