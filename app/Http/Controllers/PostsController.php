<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequests;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::lists('name', 'id')->all();

        return view('admin.posts.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequests $request)
    {
        //
        $post = $request->all();

        $user = Auth::user();

        if($file = $request->file('photo_id'))
        {
            $name = time() . $file->getClientOriginalName();

            $size = $file->getClientSize();

            $file->move('images', $name);

            $photo = Photo::create(['path'=>$name, 'size'=>$size]);

            $post['photo_id'] = $photo->id;
        }

        $user->posts()->create($post);

        Session::flash('success-msg', 'Post has been created.');


        return redirect('/admin/posts');
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
        //
        $post = Post::findOrFail($id);

        $categories = Category::lists('name', 'id')->all();

         return view('admin.posts.edit', compact('post',  'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequests $request, $id)
    {
        //
        $post = Post::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id'))
        {
            $name = time() . $file->getClientOriginalName();

            $size = $file->getClientSize();

            $file->move('images', $name);

            $photo = Photo::create(['path'=>$name, 'size' => $size]);

            $input['photo_id'] = $photo->id;
        }

        $post->update($input);

        Session::flash('success-msg', 'Post has been updated.');


        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);

        if($post->photo)
        {
            unlink(public_path() . $post->photo->path);
        }

        $post->delete();

        Session::flash('msg', 'Post has been deleted.');

        return redirect('/admin/posts');
    }
}
