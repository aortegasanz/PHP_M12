@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>PARTIT</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif    
        @if ($match)
            <div class="row">
                <div class="col-4">
                    <strong>#</strong>
                </div>
                <div class="col-auto">
                    {{ $match->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Data Partit</strong>
                </div>
                <div class="col-auto">
                    {{ $match->match_date }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Equip Local</strong>
                </div>
                <div class="col-auto">
                    {{ $match->localTeam->name }}
                </div>            
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Gols Local</strong>
                </div>
                <div class="col-auto">
                    {{ $match->local_goal }}
                </div>            
            </div>            
            <div class="row">
                <div class="col-4">
                    <strong>Equip Visitant</strong>
                </div>
                <div class="col-auto">
                    {{ $match->visitTeam->name }}
                </div>            
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Gols Visitant</strong>
                </div>
                <div class="col-auto">
                    {{ $match->visit_goal }}
                </div>            
            </div>            
            <br/>
            <div class="row">
                <div class="col-2">
                    <a href=" {{ route('match.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        @endif
    </div>
@endsection