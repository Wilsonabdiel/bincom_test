<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalGovernmentController extends Controller
{
    // app/Http/Controllers/LocalGovernmentController.php
    public function index()
    {
        // Calculate and display summed total results
        return view('local_government');
    }

}
