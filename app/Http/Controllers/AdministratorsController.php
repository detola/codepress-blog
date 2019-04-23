<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Comment;

use Illuminate\Support\Facades\Cache;
use Log;

class AdministratorsController extends Controller
{
    //

    public function index()
    {

        $users = User::all();
        $posts = Post::all();
        $categories = Category::all();
        $comments = Comment::all();

        return view('admin.index', compact('users', 'posts', 'categories', 'comments'));
       
    }
}
