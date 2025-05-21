<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'imagePath' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('imagePath')) {
            $imagePath = $request->file('imagePath')->store('images', 'public');
        }

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'imagePath' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'imagePath' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('imagePath')) {
            $post->imagePath = $request->file('imagePath')->store('images', 'public');
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post berhasil diupdate!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus!');
    }
}
