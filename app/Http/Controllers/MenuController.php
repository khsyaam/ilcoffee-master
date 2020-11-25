<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        // $index = IndexController::all();
        return view('users.pages.menu');
    }
}
