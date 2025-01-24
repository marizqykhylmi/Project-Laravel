<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function indexSponsor()
    {
        $posts = Sponsor::orderBy('title', 'desc')->get();
        return view('sponsor', compact('posts'));
    }

    public function create()
    {
        return view('add-post-sponsor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('images', $imageName, 'public');

        Sponsor::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('sponsor')->with('success', 'Post created successfully!');
    }


    public function destroy($id)
{
    $post = Sponsor::findOrFail($id);

    // Hapus file gambar dari storage
    if ($post->image && file_exists(storage_path('app/public/images/' . $post->image))) {
        unlink(storage_path('app/public/images/' . $post->image));
    }

    // Hapus data dari database
    $post->delete();

    // Mengirimkan response JSON
    return response()->json(['success' => true], 200);
}

}
