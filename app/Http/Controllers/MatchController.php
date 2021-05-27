<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Team;

class MatchController extends Controller
{

    public function index() {                
        $matches = Score::all();
        $teams = Team::all();        
        $pageContent = 'Llista de Partits';
        return view('match.index', compact('pageContent', 'matches', 'teams'));
    }   

    public function show($id) {
        $match = Score::findOrFail($id);
        $pageContent = 'Vista Detall Partit';
        return view('match.show', compact('pageContent', 'match'));
    }

    public function create(Request $request) {
        $teams = Team::all();
        return view('match.create', ['pageContent' => 'Afegir partit', 'teams' => $teams]);
    }

    public function edit(Request $request, $id) {
        $match = Score::findOrFail($id);
        $teams = Team::all();
        $pageContent = 'Vista Edició Partits';
        return view('match.edit', compact('pageContent', 'match' , 'teams'));
    }

    public function delete(Request $request) {
        $match = Score::findOrFail($request->id);
        $match->delete();
        return redirect()->route('match.list')->with(['success' => 'Dades esborrades correctament.']);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required:max:255',
            'surname' => 'required:max:255',
        ]);
        if (Team::find($request->id)) {
            $team = Team::findOrFail($request->id);
        } else {
            $team = new Team;
        }
        $team->name = $request->name;
        $team->surname = $request->surname;
        $team->save();   
        return redirect()->route('team.list')->with(['success' => 'Dades enmagatzemades correctament.']);
    }
   
}