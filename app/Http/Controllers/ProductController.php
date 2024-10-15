<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate(12);

        return view('products.index', compact('products'));
    }

    public function create() {

        return view('products.create');
    }

    use ValidatesRequests;
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable', // Allow nullable for optional description
            'foto' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        $foto = $request->file('foto');
        $uniqueFilename = $foto->hashName() . time() . '.' . $foto->extension(); // Add timestamp for better uniqueness
        $foto->storeAs('public', $uniqueFilename);

        $validatedData['foto'] = $uniqueFilename;

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Add Product Success');
    }
}