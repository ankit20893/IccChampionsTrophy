<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teams = Team::all();
        $teamA = Team::inRandomOrder()->take(4)->get();
        $teamB = Team::whereNotIn('id', $teamA->pluck('id'))->take(4)->get();
        return view('home', compact('teams', 'teamA', 'teamB'));
    }
}
