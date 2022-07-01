<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'pictureUrl' => 'required|mimes:png,jpg|max:12000'
        ]);

        $body = $request->all();

        $file = $request->file('pictureUrl');
        $path = $file->store('img/post', ['disk' => 'public']);

        Post::create(array_merge($body, [
            'slug' => Str::of($request->title)->slug(),
            'pictureUrl' => $path
        ]));

        return redirect()->route('post.index')->with('flash', 'Berhasil menambahkan entry baru');
    }


    public function edit( int $id)
    {

        $post = Post::findOrFail($id);

        return view('internal.post.edit', compact('post'));
    }


    public function update(PostRequest $request, int $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'pictureUrl' => 'required|mimes:png,jpg|max:12000'
        ]);

        $body = $request->all();
        $post = Post::findOrFail($id);

        if ($request->hasFile('pictureUrl')) {
            $file = $request->file('pictureUrl');
            $path = $file->storePublicly('post');

            $body['pictureUrl'] = $path;

        }
        $post->update(array_merge($body, [
            'slug' => Str::of($request->title)->slug(),

        ]));

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

