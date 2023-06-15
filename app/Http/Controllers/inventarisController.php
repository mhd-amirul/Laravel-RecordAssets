<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inventarisController extends Controller
{
    function getInventarisView() {
        return view("pages.Inventaris.inventaris");
    }

    function getCreateInventarisView() {
        return view("pages.Inventaris.create");
    }
}
