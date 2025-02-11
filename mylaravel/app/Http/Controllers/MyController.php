<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showForm()
    {
        return view('myview'); 
    }
    public function generateTable(Request $req)
    {
        $multiplicationNumber = $req->input('multiplication_number'); 
        $data = ['number' => $multiplicationNumber]; 
        return view('myview', $data); 
    }
}
