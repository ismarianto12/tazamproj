<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $view;
    protected $request;
    protected $route;

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->view    = '.home';
        $this->route   = 'home';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Welcome Page';
        return view($this->view . '.home', compact('title'));
    }
}
