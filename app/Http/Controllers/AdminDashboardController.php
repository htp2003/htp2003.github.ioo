<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Add logic to fetch data or perform actions for the admin dashboard
        return view('admin.dashboard'); // Update the view name as needed
    }
}
