<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function kontak()
    {
        // $index = IndexController::all();
        return view('users/pages/contact');
    }
}
