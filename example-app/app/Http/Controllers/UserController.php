<?php

namespace App\Http\Controllers;

use App\Models\Post;

class UserController extends Controller
{
    public function index() { //Метод "Получить список заказов"

        return view('create');

    }

    public function create() {
        
        $data=request()->validate([
            'product_name' => 'string',
            'delivery_address' => 'string'
        ]);

        Post::create($data);

    }

    
}
