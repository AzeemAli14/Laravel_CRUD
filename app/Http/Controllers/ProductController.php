<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        //Form Validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:24574',
        ]);

        //Enteries Upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('product'), $imageName);
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->save();
        // return redirect()->route('product.index');
        return back()->withSuccess('Product Added Successfully');
    }
}
