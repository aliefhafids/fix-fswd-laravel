<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboard.admin');
    }
    function staff()
    {
        return view('dashboard.staff');
    }
    function user()
    {
        return view('products');
    }
}
