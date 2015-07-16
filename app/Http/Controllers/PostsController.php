<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostRequest;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = $user->posts;
        $count = 1;
        //$posts = Post::all();

        return view('posts.index', compact('posts', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;
        
        return view('posts.create', compact('user_id'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostRequest $request)
    {
    
        $input = $request->all();

        Auth::user()->posts()->save(new Post($input));

            return redirect()
                ->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $post = Posts::find($id);
        $this->validate($request->all(), Post::updateRules());
        $post->update($request->all());

        return redirect('posts');
    }

    /**
     *  Show the form for deleting the specified resource.
     *  @param int $id
     *  @return Response
     */
    public function delete($id)
    {
        $post = Post::find($id);

        return view('posts.delete', compact('post'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if($rquest->get('agree')==1)
        {
            $post->delete();

            return redirect()
                ->route('posts.index')
                ->with('message', '<p class="alert alert-success">Student Deleted</p>');
        }

        return redirect('posts');
    }
}
