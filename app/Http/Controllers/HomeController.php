<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){ //guest/home
        return view('welcome');
    }
}
//da creare cartella guest e dargli la rotta guest.home