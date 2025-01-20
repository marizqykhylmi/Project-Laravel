<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
{
    $posts = Post::orderBy('publish_date', 'desc')->get();
    return view('gallery', compact('posts')); // atau ubah ke 'sponsor' jika ingin halaman sponsor
}

public function indexSponsor()
{
    $posts = Post::orderBy('publish_date', 'desc')->get(); // Sesuaikan query jika data berbeda
    return view('sponsor', compact('posts'));
}


    public function create()
    {
        return view('add-post-gallery');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'publish_date' => 'required|date',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time() . '.' . $request->image->extension();
    $request->file('image')->storeAs('images', $imageName, 'public');

    Post::create([
        'title' => $request->title,
        'description' => $request->description,
        'publish_date' => $request->publish_date,
        'image' => $imageName,
    ]);

    return redirect()->route('gallery')->with('success', 'Post created successfully!');
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

    return redirect()->route('gallery')->with('success', 'Post deleted successfully!');
}


}

