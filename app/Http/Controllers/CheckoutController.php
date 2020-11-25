<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout() {
        // $index = IndexController::all();
        return view('users/pages/chechkout');
    }
}
