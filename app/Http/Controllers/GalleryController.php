<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Menampilkan semua data gallery
    public function index()
    {
        // Ambil semua data gallery dengan urutan terbaru berdasarkan publish_date
        $galleries = Gallery::orderBy('publish_date', 'desc')->get();
        return view('gallery', compact('galleries'));
    }

    // Menampilkan halaman tambah gallery
    public function create()
    {
        return view('add-post-gallery');
    }

    // Menyimpan data gallery baru ke database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'publish_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan gambar dengan nama unik berdasarkan timestamp
        $imageName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('images', $imageName, 'public');

        // Simpan data ke database
        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'publish_date' => $request->publish_date,
            'image' => $imageName,
        ]);

        return redirect()->route('gallery')->with('success', 'Post created successfully!');
    }

    // Menampilkan halaman edit gallery berdasarkan ID
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('edit-post-gallery', compact('gallery'));
    }

    // Memperbarui data gallery
    public function update(Request $request, $id)
    {
        // Validasi input yang dikirim dari form
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Gambar opsional
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($gallery) {
            // Update data gallery
            $gallery->title = $validatedData['title'];
            $gallery->description = $validatedData['description'];

            // Cek apakah ada gambar baru yang diunggah
            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if ($gallery->image && file_exists(storage_path('app/public/images/' . $gallery->image))) {
                    unlink(storage_path('app/public/images/' . $gallery->image));
                }

                // Simpan gambar baru
                $imageName = time() . '.' . $request->image->extension();
                $request->file('image')->storeAs('images', $imageName, 'public');
                $gallery->image = $imageName;
            }

            // Simpan perubahan
            $gallery->save();

            return redirect()->route('gallery')->with('success', 'Post updated successfully!');
        }

        return redirect()->back()->with('error', 'Post not found.');
    }

    // Menghapus data gallery
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($gallery->image && file_exists(storage_path('app/public/images/' . $gallery->image))) {
            unlink(storage_path('app/public/images/' . $gallery->image));
        }

        // Hapus data dari database
        $gallery->delete();

        return redirect()->route('gallery')->with('success', 'Post deleted successfully!');
    }
}
