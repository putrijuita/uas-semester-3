<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;

class DashboardController extends Controller
{
    
    public function index(Request $request)
    {
        $projects = (new ProjectController)->index(); 
        return view('dashboard', compact('projects'));

    }
    
}
