<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Match;

class TeamController extends Controller
{

    public function index() {
        
        $teams = Team::all();        
        $pageContent = 'Llista de Equips';
        return view('team.index', compact('pageContent', 'teams'));
    }   

    public function show($id) {
        $team = Team::findOrFail($id);
        $pageContent = 'Vista Detall Equip';
        return view('team.show', compact('pageContent', 'team'));
    }

    public function create(Request $request) {
        return view('team.create', ['pageContent' => 'Afegir equip']);
    }

    public function edit(Request $request, $id) {
        $team = Team::findOrFail($id);
        $pageContent = 'Vista Edició Equipo';
        return view('team.edit', compact('pageContent', 'team'));
    }

    public function delete(Request $request) {
        $team = Team::findOrFail($request->id);
        $team->delete();
        return redirect()->route('team.list')->with(['success' => 'Dades esborrades correctament.']);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required:max:255',
            'city' => 'required:max:255',
            'stadium' => 'required:max:255',
        ]);
        if (Team::find($request->id)) {
            $team = Team::findOrFail($request->id);
        } else {
            $team = new Team;
        }
        $team->name = $request->name;
        $team->city = $request->city;
        $team->stadium = $request->stadium;
        $team->save();   
        return redirect()->route('team.list')->with(['success' => 'Dades enmagatzemades correctament.']);
    }
   
}