<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BungaController extends Controller
{
    public function index()
    {
        // Mengarahkan ke file resources/views/Bunga.blade.php
        return view('Bunga');
    }
}
