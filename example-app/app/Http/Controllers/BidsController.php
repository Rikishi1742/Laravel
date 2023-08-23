<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Bid;

class BidsController extends Controller
{
    public function index() { //Метод "Получить список заказов"

        $Bids = Bid::all();
        return view('Bids', compact('Bids'));

    }

    public function create() {
        $bidArr = [
            [
                
            ]  
        ];

        foreach ($bidArr as $item) {
            Bid::create($item);
        }
    }

    public function update() {

    }

    public function Delete(Request $request, Bid $bid) {

        $bid->Delete();

        return redirect('/');
    }

    public function HandOver(Request $request, Bid $bid) {


        $bid->update([
            'Status'=> "Передан"
        ]);

        return redirect('/');
    }
    
}
