<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemController extends Controller
{
    function getItemView() {
        return view("pages.Item.item");
    }
}
