<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoJurusanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        
        // Pass the search term to the view
        return view('infoJurusan', compact('search'));
    }
}