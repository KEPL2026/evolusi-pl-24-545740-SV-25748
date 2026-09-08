<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('profile', [
            'name'      => 'Muhammad Arief Andriansyah',
            'nim'       => '24/545740/SV25748',
            'program'   => 'Sarjana Terapan (Vokasi)',
            'university'=> 'Universitas Gadjah Mada',
        ]);
    }
}
