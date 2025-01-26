<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        // Mengambil semua sponsor dan mengurutkannya berdasarkan judul secara descending
        $sponsors = Sponsor::orderBy('title', 'desc')->get();
        return view('sponsor', compact('sponsors'));
    }

    public function create()
    {
        // Menampilkan form untuk menambahkan sponsor baru
        return view('add-post-sponsor');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan gambar ke folder 'images' di penyimpanan publik
        $imageName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('images', $imageName, 'public');

        // Simpan data sponsor ke database
        Sponsor::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('sponsor')->with('success', 'Sponsor created successfully!');
    }

    public function edit($id)
    {
        // Cari sponsor berdasarkan ID
        $sponsor = Sponsor::findOrFail($id);

        return view('edit-post-sponsor', compact('sponsor'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cari sponsor berdasarkan ID
        $sponsor = Sponsor::findOrFail($id);

        // Jika ada gambar baru, hapus gambar lama dan simpan gambar baru
        if ($request->hasFile('image')) {
            if ($sponsor->image && file_exists(storage_path('app/public/images/' . $sponsor->image))) {
                unlink(storage_path('app/public/images/' . $sponsor->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('images', $imageName, 'public');
            $sponsor->image = $imageName;
        }

        // Perbarui data sponsor
        $sponsor->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('sponsor')->with('success', 'Sponsor updated successfully!');
    }

    public function destroy($id)
    {
        // Cari sponsor berdasarkan ID
        $sponsor = Sponsor::findOrFail($id);

        // Hapus gambar dari penyimpanan
        if ($sponsor->image && file_exists(storage_path('app/public/images/' . $sponsor->image))) {
            unlink(storage_path('app/public/images/' . $sponsor->image));
        }

        // Hapus data sponsor dari database
        $sponsor->delete();

        return redirect()->route('sponsor')->with('success', 'Sponsor deleted successfully!');
    }
}
