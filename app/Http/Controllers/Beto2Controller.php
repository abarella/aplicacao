<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use app\GlobalServices;

use Exception;
use Illuminate\Http\Request;
use DB;


class Beto2Controller extends Controller
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
        return view("beto2");
    }




}

