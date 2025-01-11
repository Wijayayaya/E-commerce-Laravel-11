<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;

class CustomerProductController extends Controller
{
    // Menampilkan daftar produk ke user
    public function index()
    {
        $product = Product::with('images', 'primaryImage')->findOrFail;

    }

    // // Menampilkan detail produk ke user berdasarkan slug
    // public function show($slug)
    // {
    //     // Mengambil detail produk
    //     $product = Product::with(['primaryImage', 'images', 'category', 'subcategory'])
    //                       ->where('slug', $slug)
    //                       ->firstOrFail();

    //     return view('customer.product.show', compact('product'));
    // }

    // public function showproduct($id)
    // {
    //     // $authuserid = Auth::id();
    //     $product = Product::with('images', 'primaryImage')->findOrFail($id);
    //     $product_info = Product::findOrFail($id); // Gunakan findOrFail untuk memastikan produk ditemukan
    //     $stores = Store::with('store_name', 'store_id')->findOrFail($id);
    //     return view('components.layouts.app', compact('product_info', 'stores')); // Kirim $stores ke view
    // }
}
