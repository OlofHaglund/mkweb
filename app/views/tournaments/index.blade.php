@extends('v1-wrapper')

@section('title')
    Tournamentarkiv
@stop

@section('contentname')
    Tournamentarkiv
@stop

@section('contenttitle')
    Vet du vad som hänt?
@stop

@section('content')

<table class="table table-striped">
<thead>
    <tr>
            <td>Tournamentnamn</td>
            <td>shortname</td>
            <td>Bild</td>
    </tr>
</thead><tbody>
    @foreach ($tournaments as $tournament)
        <tr>
            <td>{{ link_to('/tournaments/'.$tournament->name,$tournament->name) }}</td>
            <td>{{ $tournament->shortname }}</td>
            <td><img width=150px src="{{ $tournament->imageurl }}" /></td>
        </tr>
    @endforeach
</tbody>
</table>


@stop