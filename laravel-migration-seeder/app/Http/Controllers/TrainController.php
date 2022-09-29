<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function list() {
        $trains = Train::all();
        return view('train-list', compact('trains'));
    }
}
