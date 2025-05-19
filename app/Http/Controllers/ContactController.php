<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function kirimpesan(Request $request)
    {
        contact::create($request->except(['_token','submit']));
        return redirect('/contact')->with('success', 'Pesan Berhasil Dikirim');
    }
}
