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

    public function listing()
    {
        return view('product.listing', ['product' => Product::get()]);
    }

    public function store(Request $request)
    {
        //Form Validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,png|max:24574',
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
    
    public function edit($id)
    {
        $product = Product::where('id',$id)->first();
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:24574',
        ]);

        $product = Product::where('id',$id)->first();
        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('product'), $imageName);
            $product->image = $imageName;
        }

        //Enteries Upload
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return back()->withSuccess('Product Updated Successfully');
    }

    public function destory($id)
    {
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted Successfully');
    }

    public function view($id)
    {
        $product = Product::where('id',$id)->first();
        return view('product.view', ['product' => $product]);
    }
}
