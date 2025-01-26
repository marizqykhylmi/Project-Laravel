<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    // Menampilkan semua program
    public function index()
    {
        $programs = Program::orderBy('title', 'desc')->get(); // Urutkan berdasarkan title
        return view('program', compact('programs'));
    }

    // Menampilkan halaman tambah program
    public function create()
    {
        return view('add-post-program');
    }

    // Menyimpan program baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan gambar
        $imageName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('images', $imageName, 'public');

        // Simpan data ke database
        Program::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('program')->with('success', 'Post created successfully!');
    }

    // Menampilkan halaman edit program
    public function edit($id)
    {
        $program = Program::findOrFail($id); // Cari program berdasarkan ID
        return view('edit-post-program', compact('program'));
    }

    // Update program yang sudah ada
    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post = Program::find($id);
        if ($post) {
            // Update title dan description
            $post->title = $validatedData['title'];
            $post->description = $validatedData['description'];

            // Kalau ada gambar baru, simpan gambar
            if ($request->hasFile('image')) {
                $post->image = $request->file('image')->store('images', 'public');
            }

            $post->save();

            return redirect()->route('program')->with('success', 'Post updated successfully');
        }

        return redirect()->back()->with('error', 'Post not found');
    }

    // Hapus program
    public function destroy($id)
    {
        $post = Program::findOrFail($id);

        // Hapus gambar kalau ada
        if ($post->image && file_exists(storage_path('app/public/images/' . $post->image))) {
            unlink(storage_path('app/public/images/' . $post->image)); // Hapus file gambar
        }

        // Hapus data program
        $post->delete();

        return redirect()->route('program')->with('success', 'Post deleted successfully!');
    }
}
