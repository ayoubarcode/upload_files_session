<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProudctController extends Controller
{
    public function all_products() {
        $products = Produit::all();
        return view('products', compact('products'));
    }
}

// controllers & Model 


/*
    class Produit {
        $title;
        $price;
        $description;
    }


*/