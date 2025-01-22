<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Post;

class GalleryController extends Controller
{
    public function index()
    {
        $posts = Gallery::orderBy('publish_date', 'desc')->get();
        return view('gallery', compact('posts'));
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

        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'publish_date' => $request->publish_date,
            'image' => $imageName,
        ]);

        return redirect()->route('gallery')->with('success', 'Post created successfully!');
    }


    public function destroy($id)
{
    $post = Post::find($id);
    if ($post) {
        $filePath = public_path('storage/images/' . $post->image);
        if (file_exists($filePath)) {
            unlink($filePath); // Menghapus file
        }
        $post->delete();
        return response()->json(['message' => 'Gambar berhasil dihapus.'], 200);
    }
    return response()->json(['message' => 'Gagal menghapus gambar.'], 400);
}

}
