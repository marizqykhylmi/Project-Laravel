<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function indexProgram()
    {
        $posts = Post::orderBy('title', 'desc')->get();
        return view('program', compact('posts'));
    }

    public function create()
    {
        return view('add-post-program');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('images', $imageName, 'public');

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('program')->with('success', 'Post created successfully!');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Hapus file gambar dari storage
        if ($post->image && file_exists(storage_path('app/public/images/' . $post->image))) {
            unlink(storage_path('app/public/images/' . $post->image));
        }

        // Hapus data dari database
        $post->delete();

        return redirect()->route('program')->with('success', 'Post deleted successfully!');
    }
}
