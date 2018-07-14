<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTournamentController extends Controller
{
    public function index(){
        return view('backend.tournament.index');
    }

    public function create(){
        return view('backend.tournament.index');
    }
}
