<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahanController extends Controller
{
    public function profil() {
        return view('visitors/pages/profil');
    }
}
