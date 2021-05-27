@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>EQUIP</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif        
        @if ($team)
            <form action="{{ route('team.store') }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $team->id }}"/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Nom</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="text" name="name" value="{{ $team->name }}">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Ciutat</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="text" name="surname" value="{{ $team->city }}">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-2">
                        <label class="form-label">Estadi</label>
                    </div>
                    <div class="col-auto">
                        <input class="form-control" type="text" name="surname" value="{{ $team->stadium }}">
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