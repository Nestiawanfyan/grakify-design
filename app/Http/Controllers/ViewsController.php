<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        return view('page.landingpage');
    }

    public function login_view()
    {
        return view('page.login');
    }

    public function register_view()
    {
        return view('page.register');
    }

    public function view_lapangan()
    {
        return view('page.view-lapangan');
    }
}
