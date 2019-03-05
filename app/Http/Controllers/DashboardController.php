<?php

namespace App\Http\Controllers;

use App\Companies;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $companies = Companies::orderBy('created_at', 'desc')->get();
        return view('welcome')->with('companies', $companies);

    }
}
