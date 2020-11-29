<?php

namespace App\Http\Controllers;
use App\Models\Wisata;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::query()->orderBy('nama', 'asc')->limit(5)->get();
        return view('home', compact('wisata'));
    }
}
