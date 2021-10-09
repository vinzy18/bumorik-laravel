<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Kategorial;
use App\Models\PKB;
use Illuminate\Http\Request;

class PemilihanController
{

    public function index() {

        $pkb = PKB::get();
        $kategori = Kategorial::get();
        $kategorial =  $kategori->sortBy('id');
        $chunk = $kategorial->splice(5);

        return view('frontend.pemilihan', [
            "pkbs" => $pkb,
            "kategorials" => $kategorial
        ]);
    }


}
