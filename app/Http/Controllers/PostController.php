<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;   

class PostController extends Controller
{
    public function home(): View
    {
        $posts = Post::where('status', 10)->paginate(12);
        return view('home', ['posts' => $posts]);
    }

    public function showDetail($id): View
    {
        $post = Post::all()->find($id);
        return view('detail', ['post' => $post]);
    }

    public function index(): View
    {
        $post = Post::all();
        return view('panel.post.index', ['posts' => $post]);
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('panel.post.create', ['categories' => $categories]);
    }

    public function store(Request $request): RedirectResponse
    {
            $title = $request->input('title');
            $body = $request->input('body');
            $category = $request->input('cat_id');

            $post = new Post();
            $post->title = $title;
            $post->body = $body;
    
            $path = $request->file('image')->store('image', 'public');
            $post->image = $path;
    
            // $category = Category::find($request->input('cat_id'));
            // $post->category()->associate($category);
            $post->cat_id = $category;
            $post->save();

            return redirect()->route('postindex');
    }

    public function change_status($id): RedirectResponse
    {
        $post = Post::all()->find($id);
        if($post->status == 10)
        {
            $post->status = 5;
            $post->save();
        }
        else
        {
            $post->status = 10;
            $post->save();
        }
        return redirect()->route('postindex');
    }

    public function edit($id):View
    {   
        $post = Post::all()->find($id);
        $categories = Category::all();
        return view('panel.post.edit', ['post' => $post, 'categories'=> $categories]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $title = $request->input('title');
        $body = $request->input('body');
        $category = $request->input('cat_id');

        $name = $request->input('name');
        $post = Post::all()->find($id);
        $post->title = $title;
        $post->body = $body;

        $path = $request->file('image')->store('image', 'public');
        $post->image = $path;

        $post->cat_id = $category;
        $post->save();

        return redirect()->route('postindex');
    }

    public function destroy($id):RedirectResponse
    {
        $post = Post::all()->find($id);
        $post->delete();
        return redirect()->route('postindex');
    }
}