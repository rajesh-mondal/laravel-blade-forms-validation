<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    function create( Request $request ) {
        return view( 'product.store' );
    }

    function store( Request $request ) {
        $validated = $request->validate( [
            'name'        => 'required|string|min:5|max:50',
            'price'       => 'required|numeric|min:3.0|max:100.0',
            'description' => 'nullable|string',
            'stock'       => 'required|boolean',
        ], [
            'name.min' => 'পন্যের নাম সর্বনিন্ম পাঁচ অক্ষরের হতে হবে',
            'name.max' => 'পন্যের নাম সর্বোচ্চ পঞ্চাশ অক্ষরের হতে হবে',
            'name.required' => 'পন্যের মূল্য দিতেই হবে',
            'price.required' => 'মূল্য দিতেই হবে',
            'price.min' => 'একটা পন্যের সর্বনিন্ম মূল্য ৩ টাকা হতে হবে'
        ] );

        Product::create( $validated );
        return redirect()->back()->with( 'success', 'Product created successfully' );
    }
}
