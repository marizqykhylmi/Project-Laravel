<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('list-products', compact('products'));
    }

    // Menampilkan halaman tambah produk
    public function create()
    {
        return view('add-list-product');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'nullable|string',
            'category_id' => 'required|integer',
            'system' => 'nullable|string',
            'status' => 'required|string',
            'front_port' => 'nullable|string',
            'display_size' => 'nullable|string',
            'product_size' => 'nullable|string',
            'package_size' => 'nullable|string',
            'net_weight' => 'nullable|numeric',
            'gross_weight' => 'nullable|numeric',
            'quantity' => 'required|integer',
            'rating' => 'nullable|integer|min:0|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        // Kalau ada gambar yang di-upload
        if ($request->hasFile('image')) {
            if (!file_exists(storage_path('app/public/uploads'))) {
                mkdir(storage_path('app/public/uploads'), 0755, true); // Buat folder kalau belum ada
            }
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath; // Simpan path gambar
        }

        // Simpan produk ke database
        Product::create([
            'name' => $validatedData['name'],
            'color' => $validatedData['color'] ?? 'Unknown',
            'category_id' => $validatedData['category_id'], // Ubah dari 'category' ke 'category_id'
            'system' => $validatedData['system'],
            'status' => $validatedData['status'],
            'front_port' => $validatedData['front_port'],
            'display_size' => $validatedData['display_size'],
            'product_size' => $validatedData['product_size'],
            'package_size' => $validatedData['package_size'],
            'net_weight' => $validatedData['net_weight'],
            'gross_weight' => $validatedData['gross_weight'],
            'quantity' => $validatedData['quantity'],
            'rating' => $validatedData['rating'],
            'image' => $validatedData['image'] ?? null,
        ]);
        

        return redirect()->route('list-products')->with('success', 'Product created successfully.');
    }

    // Menampilkan halaman edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Cari produk berdasarkan ID
        return view('edit-list-product', compact('product'));
    }

    // Update produk yang sudah ada
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'nullable|string',
            'category' => 'required|integer',
            'system' => 'nullable|string',
            'status' => 'required|string',
            'front_port' => 'nullable|string',
            'display_size' => 'nullable|string',
            'product_size' => 'nullable|string',
            'package_size' => 'nullable|string',
            'net_weight' => 'nullable|numeric',
            'gross_weight' => 'nullable|numeric',
            'quantity' => 'required|integer',
            'rating' => 'nullable|integer|min:0|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        // Kalau ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            if (!file_exists(storage_path('app/public/uploads'))) {
                mkdir(storage_path('app/public/uploads'), 0755, true); // Buat folder kalau belum ada
            }
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath; // Simpan path gambar
        }

        // Update produk
        $product->update([
            'name' => $validatedData['name'],
            'color' => $validatedData['color'],
            'category_id' => $validatedData['category_id'],
            'system' => $validatedData['system'],
            'status' => $validatedData['status'],
            'front_port' => $validatedData['front_port'],
            'display_size' => $validatedData['display_size'],
            'product_size' => $validatedData['product_size'],
            'package_size' => $validatedData['package_size'],
            'net_weight' => $validatedData['net_weight'],
            'gross_weight' => $validatedData['gross_weight'],
            'quantity' => $validatedData['quantity'],
            'rating' => $validatedData['rating'],
            'image' => $validatedData['image'] ?? $product->image, // Gunakan gambar lama kalau nggak ada gambar baru
        ]);

        return redirect()->route('list-products')->with('success', 'Product updated successfully.');
    }

    // Hapus produk dari database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar kalau ada
        if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
            unlink(storage_path('app/public/' . $product->image)); // Hapus file gambar
        }

        // Hapus produk dari database
        $product->delete();

        return redirect()->route('list-products')->with('success', 'Product deleted successfully.');
    }
}
