<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(20);

        return view('internal.post.index', compact('posts'));
    }

    public function create()
    {

        return view('internal.post.new');
    }

    public function store(PostRequest $request)
    {
        $request->validated();
        $post = $request->all();

        Post::create($post);

        return redirect()->route('post.index')
            ->with('flash', 'Berhasil menambahkan entry baru');
    }


    public function edit(Post $post)
    {

        return view('post.edit', compact('post'));
    }


    public function update(PostRequest $request, Post $post)
    {
        $body = $request->all();
        $post->update($body);

        return redirect()->route('post.index')
            ->with('flash', 'Berhasil mengubah entry');
    }


    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()
            ->route('post.index')
            ->with('flash', 'Berhasil menghapus entry kegiatan');
    }


}

