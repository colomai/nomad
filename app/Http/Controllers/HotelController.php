<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Hotel $Hotel)
    {
        return $Hotel->get();
    }
}

    