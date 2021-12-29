<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    function index()
    {
        return view('pages.pricing.pricing-index');
    }
}
