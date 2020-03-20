<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // creation methode
    public function testview() {
        return view('testcontroller');
    }

    public function postmethod(Request $request) {
        $request->validate([
            'nom'=>'required|max:20',
            "prenom"=>"required"
        ]);

        $nom = request('nom'); // $nom = $request->nom
        $prenom = request('prenom'); // $prenom = $request->prenom
        return view('testcontroller', ['nom'=>$nom, 'prenom'=>$prenom]);
    }


}
