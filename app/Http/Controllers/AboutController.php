<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('about',[
            'title' => 'About',
            'sliders' => Slider::all()
        ]);
    }
}
