@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>EQUIPS</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif
        <a class="btn btn-primary" href="{{ route('team.create') }}">Nou Equip</a>
        <br/><br/>
        @if (isset($teams))
            <table class="table">
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Nom</strong></td>
                    <td><strong>Ciutat</strong></td>
                    <td><strong>Estadi</strong></td>
                    <td><strong>Any Fundació</strong></td>
                    <td><strong>Accions</strong></td>
                </tr>
            @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->id }}</td>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->city }}</td>
                    <td>{{ $team->stadium }}</td>
                    <td>{{ $team->foundation_year }}</td>
                    <td>
                        <a href="{{ route('team.show', $team->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('team.edit', $team->id) }}"><i class="fas fa-edit"></i></a> 
                        @can('delete_team')
                            <form action="{{ route('team.delete', $team->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $team->id }}"/>
                                <button type="submit" style="background:white;"><i class="far fa-trash-alt"></i></button>
                            </form>
                        @else
                            <span>No tiene permisos para borrar equipos</span>
                        @endcan
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection