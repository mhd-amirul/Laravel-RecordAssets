<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function getDashboardView() {
        return view("pages.Dashboard.dashboard");
    }
}
