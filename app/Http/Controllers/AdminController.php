<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Sepatu;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('customer.shop',[
        'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sepatu',[
            'title'     => 'tambahsepatu',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        $products = new Product;
        $products->name = $request->name;
        $products->price = $request->price;

        $imagePath = $request->file('image')->store('products', 'public');
        $products->image = $imagePath;

        $products->save();

        return redirect()->route('admin.create',)->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::all();
        return view('customer.shop', [
            'products' => $products,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function shop()
    {
        $products = Product::all();
        return view('customer.shop',[
            'products' => $products,
        ]);
    }

    public function home()
    {
        return view('customer.home',[
            'title'     => 'Home',
        ]);
    }
}
