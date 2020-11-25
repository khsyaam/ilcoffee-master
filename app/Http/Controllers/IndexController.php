<?php

namespace App\Http\Controllers;

use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // $index = IndexController::all();
        return view('users.pages.index');
    }
}
