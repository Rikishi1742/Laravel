<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bid;

class InfoController extends Controller
{
    public function index(Request $request, Bid $bid) { //Метод "Получить информацию о заказе"

        return view('bid', compact('bid'));

    }
}
