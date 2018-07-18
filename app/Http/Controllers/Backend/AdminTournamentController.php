<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Tournament;

class AdminTournamentController extends Controller
{
    public function index(){
        $tournaments = Tournament::all();
        return view('backend.tournament.index', compact('tournaments'));
    }

    public function create(){
        $types = Type::pluck('name', 'id');
        return view('backend.tournament.add', compact('types'));
    }

    public function store(Request $request){
        $data = $request->except('_token');
        $tournament = Tournament::create($data);
        return redirect()->back()->withFlashSuccess(__('alerts.backend.tournaments.created'));
    }
}
