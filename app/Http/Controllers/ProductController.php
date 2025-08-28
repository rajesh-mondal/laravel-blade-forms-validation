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
        ] );

        Product::create( $validated );
        return redirect()->back();
    }
}
