<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Selva Oktaviani',
            'nim' => '2257401068',
            'class' => 'MI22A',
        ];

        return view('home', $data);
    }
    public function logout()
    {
        auth()->logout(); // Logout user
        return redirect('/welcome'); // Arahkan ke halaman welcome setelah logout
    }
}