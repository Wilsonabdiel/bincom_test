<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollingUnitController extends Controller
{
    // app/Http/Controllers/PollingUnitController.php
    public function index()
    {
        // Fetch and display results
        return view('polling_unit');
    }

}
