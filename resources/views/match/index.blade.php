@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1>LLISTAT DE PARTITS</h1>
        @if (Session::get('success'))
            <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @php Session::forget('success') @endphp
        @endif
        @if (isset($pageContent))
            <h5>{{ $pageContent }}</h5>
        @endif
        <br/>
        <a class="btn btn-primary" href="{{ route('match.create') }}">Nou Partit</a>
        <br/>
        <br/>
        @if (isset($matches))
            <table class="table">
                <tr>
                    <td><strong>#</strong></td>
                    <td><strong>Data Partit</strong></td>
                    <td><strong>Equip Local</strong></td>
                    <td><strong>Gols Local</strong></td>
                    <td><strong>Equip Visitant</strong></td>
                    <td><strong>Gols Visitant</strong></td>
                    <td><strong>Gols Visitant</strong></td>
                </tr>
            @foreach ($matches as $match)
                <tr>
                    <td>{{ $match->id }}</td>
                    <td>{{ $match->match_date }}</td>
                    <td>{{ $match->localTeam->name }}</td>
                    <td>{{ $match->local_goal }}</td>
                    <td>{{ $match->visitTeam->name }}</td>
                    <td>{{ $match->visit_goal }}</td>
                    <td>
                        <a href="{{ route('match.show', $match->id) }}"><i class="far fa-eye"></i></a>
                        <a href="{{ route('match.edit', $match->id) }}"><i class="fas fa-edit"></i></a> 
                        <form action="{{ route('match.delete', $match->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{ $match->id }}"/>
                            <button type="submit" style="background:white;"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
        @endif
    </div>
@endsection