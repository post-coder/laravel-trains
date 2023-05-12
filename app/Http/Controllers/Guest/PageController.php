<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {
        // prendere il controller
        // accedere a tutti i dati
        // salvarli in una variabile
        // dd(now());
        // $trains = Train::where('departure_time', '>=', now()->format('Y-m-d'))->get();
        $trains = Train::all();

        // dd($trains);

        return view('home', compact('trains'));
    }

}
