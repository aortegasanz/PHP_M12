@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>PARTIT</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif        
        @if ($match)
            <form action="{{ route('match.store') }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $match->id }}"/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Data Partit</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="date" name="match_date" value="{{ $match->match_date }}">
                    </div>
                </div>
                <br/>           
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Equip Local</label>
                    </div>
                    <div class="col-auto">
                        <select class="form-control" name="local_team">
                        @foreach (App\Models\Team::get() as $team)
                            @if ($team->id == $match->localTeam->id)
                                <option value="{{ $team->id }}" selected>{{ $team->name }} </option>
                            @else
                                <option value="{{ $team->id }}">{{ $team->name }} </option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Gols Local</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="number" name="local_goal" value="{{ $match->local_goal }}">
                    </div>
                </div>
                <br/>            
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Equip Visitant</label>
                    </div>
                    <div class="col-auto">
                        <select class="form-control" name="visit_team">
                        @foreach (App\Models\Team::get() as $team)
                            @if ($team->id == $match->visitTeam->id)
                                <option value="{{ $team->id }}" selected>{{ $team->name }} </option>
                            @else
                                <option value="{{ $team->id }}">{{ $team->name }} </option>
                            @endif
                        @endforeach
                        </select>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Gols Visitant</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="number" name="visit_goal" value="{{ $match->visit_goal }}">
                    </div>
                </div>
                <br/>              
                <div class="row">
                    <div class="col-2">
                        <button class="btn btn-primary" type="submit" value="create">Actualitzar</input> 
                    </div>
                    <div class="col-2">
                        <a href=" {{ route('team.list') }}" class="btn btn-secondary">Tornar</a> 
                    </div>
                </div>
            </form>
        @endif
    </div>
@endsection