<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $data = [
            'nama' => 'Muhammad Hildan Alfaris',
            'kelas' => 'D',
            'npm' => '2217051077'
        ];
        return view('profile', $data);
    }
}
