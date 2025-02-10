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

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit-list-product', compact('product')); // Mengirim data produk ke view
    }


    // Menyimpan produk baru
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'color' => 'nullable|string',
        'category' => 'required|array', // Ubah jadi array
        'category.*' => 'string', // Pastikan setiap kategori adalah string
        'system' => 'nullable|string',
        'power_suply' => 'nullable|string',
        'status' => 'required|string',
        'front_port' => 'nullable|string',
        'display_size' => 'nullable|string',
        'product_size' => 'nullable|string',
        'package_size' => 'nullable|string',
        'net_weight' => 'nullable|numeric',
        'gross_weight' => 'nullable|numeric',
        'quantity' => 'required|integer',
        'rating' => 'nullable|integer|min:0|max:5',
        'price' => 'nullable|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Kalau ada gambar yang di-upload
    if ($request->hasFile('image')) {
        if (!file_exists(storage_path('app/public/uploads'))) {
            mkdir(storage_path('app/public/uploads'), 0755, true);
        }
        $imagePath = $request->file('image')->store('uploads', 'public');
        $validatedData['image'] = $imagePath;
    }

    // Simpan produk ke database
    Product::create([
        'name' => $validatedData['name'],
        'color' => $validatedData['color'],
        'category' => json_encode($validatedData['category']), // Simpan sebagai JSON
        'system' => $validatedData['system'],
        'power_suply' => $validatedData['power_suply'],
        'status' => $validatedData['status'],
        'front_port' => $validatedData['front_port'],
        'display_size' => $validatedData['display_size'],
        'product_size' => $validatedData['product_size'],
        'package_size' => $validatedData['package_size'],
        'net_weight' => $validatedData['net_weight'],
        'gross_weight' => $validatedData['gross_weight'],
        'quantity' => $validatedData['quantity'],
        'rating' => $validatedData['rating'],
        'price' => $validatedData['price'],
        'image' => $validatedData['image'] ?? null,
    ]);

    return redirect()->route('list-products')->with('success', 'Product created successfully.');
}

    
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        // Validasi input
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'color' => 'nullable|string',
        'category' => 'required|array', // Ubah jadi array
        'category.*' => 'string', // Pastikan setiap kategori adalah string
        'system' => 'nullable|string',
        'power_suply' => 'nullable|string',
        'status' => 'required|string',
        'front_port' => 'nullable|string',
        'display_size' => 'nullable|string',
        'product_size' => 'nullable|string',
        'package_size' => 'nullable|string',
        'net_weight' => 'nullable|numeric',
        'gross_weight' => 'nullable|numeric',
        'quantity' => 'required|integer',
        'rating' => 'nullable|integer|min:0|max:5',
        'price' => 'nullable|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Kalau ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            if (!file_exists(storage_path('app/public/uploads'))) {
                mkdir(storage_path('app/public/uploads'), 0755, true);
            }
            // Hapus gambar lama dari storage jika ada
            if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                unlink(storage_path('app/public/' . $product->image)); // Hapus file gambar lama
            }
        
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        } else {
            // Jika tidak ada gambar baru, simpan gambar lama
            $validatedData['image'] = $product->image;
        }
        
    
        // Update produk
        $product->update([
        'name' => $validatedData['name'],
        'color' => $validatedData['color'],
        'category' => json_encode($validatedData['category']), // Simpan sebagai JSON
        'system' => $validatedData['system'],
        'power_suply' => $validatedData['power_suply'],
        'status' => $validatedData['status'],
        'front_port' => $validatedData['front_port'],
        'display_size' => $validatedData['display_size'],
        'product_size' => $validatedData['product_size'],
        'package_size' => $validatedData['package_size'],
        'net_weight' => $validatedData['net_weight'],
        'gross_weight' => $validatedData['gross_weight'],
        'quantity' => $validatedData['quantity'],
        'rating' => $validatedData['rating'],
        'price' => $validatedData['price'],
        'image' => $validatedData['image'] ?? null,
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
