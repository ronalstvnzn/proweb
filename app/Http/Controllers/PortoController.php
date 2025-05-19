<?php

namespace App\Http\Controllers;

use App\Models\portofolio;
use App\Models\about;
use App\Models\advent;
use App\Models\product;

use Illuminate\Http\Request;

class PortoController extends Controller
{
    public function index()
    {
        $porto = portofolio::all();
        $about = about::all();
        $product = product::all();
        $advent = advent::all();
        return view('main.porto', compact(['porto','about','product','advent']));





        
    }
}
