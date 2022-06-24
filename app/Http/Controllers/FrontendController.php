<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function landingpage()
    {
        $informasi=Informasi::all();
        return view('landingpage.index',compact('informasi'));
    }
}
