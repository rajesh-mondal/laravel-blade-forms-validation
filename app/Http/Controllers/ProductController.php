<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller {
    function create( Request $request ) {
        return view( 'product.store' );
    }
}
