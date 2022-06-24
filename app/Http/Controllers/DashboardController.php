<?php

namespace App\Http\Controllers;

use App\Models\Rekruitment;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $rekruitment = Rekruitment::all()->count();
        $user  = User::all()->count();
        // $rekruitment = Rekruitment::all()->where('alamat', $rekruitment->alamat);
        return view('dashboard.index', compact('rekruitment', 'user'));
    }
}