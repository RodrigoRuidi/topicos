<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function index($dato)
    {
        return view('pruebas')
            ->with('dato', $dato)
            ->with('hobbies', array('Películas', 'Videojuegos', 'Fútbol', 'Playa'));
    }
}
