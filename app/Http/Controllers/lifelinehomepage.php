<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lifelinehomepage extends Controller
{
    /**
     * Display the patient dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Always return the main (desktop) lifeline page for all devices.
        return view('content.pages.pages-lifeline');
    }
}
