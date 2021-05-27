@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>EQUIPS</h1>
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif        
        <form action="{{ route('team.store') }}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Nom</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" name="name">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Ciutat</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" name="city">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <label class="form-label">Estadi</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" name="stadium">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-2">
                    <button class="btn btn-primary" type="submit" value="create">Enmagatzemar</input> 
                </div>
                <div class="col-2">
                    <a href=" {{ route('team.list') }}" class="btn btn-secondary">Tornar</a> 
                </div>
            </div>
        </form>
    </div>
@endsection