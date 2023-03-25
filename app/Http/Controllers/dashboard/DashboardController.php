<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('admin.subviews.index');
    }
}
