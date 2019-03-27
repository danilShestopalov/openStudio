<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function topPosts()
    {
        $posts = Post::take(4)->get();

        return response()->json($posts,201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('post.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required|max:30',
            'body' => 'required|max:1000',
            'image' => 'required',
        ]);

        $imageName = '';

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads/posts/'), $imageName);
        }


        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->creator_id = Auth::id();
        $post->image = $imageName;
        $post->save();
        $post->tags()->attach($request->tags);
//        $post->tags()->detach($request->tags);

        return redirect(route('blog.show', $post->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $comments = $post->comments;
//        dd($comments);
        return view('post.show', compact('post', 'comments'));
    }
}
