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

    public function edit($id)
{
    $post = Post::findOrFail($id); // Temukan data berdasarkan ID
    return view('edit-post-program', compact('post')); // Tampilkan view edit dengan data
}

public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'title' => 'required|string|max:255', // Pastikan 'title' tidak kosong
        'description' => 'required|string',
    ]);

    // Temukan post berdasarkan ID
    $post = Post::find($id);
    if ($post) {
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];

        // Cek jika ada gambar baru
        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    return redirect()->back()->with('error', 'Post not found');
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
