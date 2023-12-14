<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.index', compact('user'));
    }
}
