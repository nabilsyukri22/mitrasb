<?php

namespace App\Http\Controllers;

use App\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mitras = Mitra::count();

        $widget = [
            'mitras' => $mitras,
            //...
        ];

        return view('mitra', compact('widget'));
    }
}
