<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class updatecontroller extends Controller
{
    public function update(Request $request, $id)
{
    $post = Post::find($id);

    if ($post) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post->title = $request->title;
        $post->description = $request->description;

        if ($request->hasFile('image')) {
            // Hapus file lama
            $oldImagePath = public_path('storage/images/' . $post->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Simpan file baru
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/images'), $fileName);
            $post->image = $fileName;
        }

        $post->save();
        return response()->json(['message' => 'Post updated successfully!'], 200);
    }

    return response()->json(['message' => 'Post not found.'], 404);
}


}
