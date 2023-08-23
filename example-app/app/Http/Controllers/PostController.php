<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {
        
        $data=request()->validate([
            'product_name' => 'string',
            'delivery_address' => 'string'
        ]);

        Post::create($data);

    }
}
