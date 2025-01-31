<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();  // Ambil semua data content dari database
        return view('about-us', compact('contents'));  // Kirimkan $contents ke view
    }    


    public function create($type)
    {
        // Menampilkan form untuk membuat content baru berdasarkan tipe (team atau lainnya)
        return view('add-about-us', compact('type'));
    }

    public function store(Request $request, $type)
    {
        // Validasi input sebelum menyimpan data content baru
        $request->validate([
            'content' => 'required|string|max:255',
            'name' => $type === 'team' ? 'required|string|max:255' : 'nullable',
            'image' => $type === 'team' && $request->hasFile('image') ? 'image|mimes:jpg,jpeg,png|max:2048' : 'nullable',
        ]);

        // Jika ada gambar, simpan gambar ke folder 'contents'
        $imagePath = null;
        if ($type === 'team' && $request->hasFile('image')) {
            $imagePath = $request->file('image')->store('contents', 'public');
        }

        // Simpan data content ke database
        Content::create([
            'type' => $type,
            'name' => $type === 'team' ? $request->name : null,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        return redirect()->route('about-us')->with('success', ucfirst($type) . ' created successfully!');
    }

    public function edit($type, $id)
    {
        // Ambil data content berdasarkan ID untuk diedit
        $content = Content::findOrFail($id);
        return view('edit-about-us', compact('type', 'content'));
    }

    public function update(Request $request, $type, $id)
    {
        // Validasi input sebelum memperbarui data content
        $request->validate([
            'content' => 'required|string|max:255',
            'name' => $type === 'team' ? 'required|string|max:255' : 'nullable',
            'image' => $type === 'team' && $request->hasFile('image') ? 'image|mimes:jpg,jpeg,png|max:2048' : 'nullable',
        ]);

        // Ambil data content berdasarkan ID
        $content = Content::findOrFail($id);
        $data = $request->only(['content']);

        // Jika tipe 'team', tambahkan nama ke data
        if ($type === 'team') {
            $data['name'] = $request->name;
        }

        // Jika ada gambar baru, hapus gambar lama dan simpan gambar baru
        if ($type === 'team' && $request->hasFile('image')) {
            if ($content->image) {
                Storage::disk('public')->delete($content->image);
            }
            $data['image'] = $request->file('image')->store('contents', 'public');
        }

        // Perbarui data content
        $content->update($data);

        return redirect()->route('about-us')->with('success', ucfirst($type) . ' updated successfully!');
    }
}
