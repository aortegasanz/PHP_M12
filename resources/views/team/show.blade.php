@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>EQUIP</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif    
        @if ($team)
            <div class="row">
                <div class="col-4">
                    <strong>#</strong>
                </div>
                <div class="col-auto">
                    {{ $team->id }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Nom</strong>
                </div>
                <div class="col-auto">
                    {{ $team->name }}
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Ciutat</strong>
                </div>
                <div class="col-auto">
                    {{ $team->city }}
                </div>            
            </div>
            <div class="row">
                <div class="col-4">
                    <strong>Estadi</strong>
                </div>
                <div class="col-auto">
                    {{ $team->stadium }}
                </div>            
            </div>            
            <br/>
            <div class="row">
                <div class="col-2">
                    <a href=" {{ route('team.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        @endif
    </div>
@endsection