@extends('layouts.site')
@section('title')
    League
@endsection

@section('content')


    <div class="row">
        <div class="col-md-4">
            <h2>Clubs</h2>
            @foreach($clubs as $club)
                <h5>NAME => {{$club->name}}.</h5>
            @endforeach
        </div>
        <div class="col-md-4">
            <h2>Information</h2>
            <h5>LEAGUE => {{$league->name}}</h5><br>
            <h5>PLACE => {{$league->place}}</h5><br>
            <h5>PRESIDENT => {{$president->name}}</h5><br>

        </div>
    </div>
@endsection