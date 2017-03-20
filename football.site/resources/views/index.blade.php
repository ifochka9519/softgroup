@extends('layouts.site')
@section('title')
    Football
@endsection

@section('adds')
    <a href="{{route('newCountry')}}" class="btn"><input type="button" class="btn" value="NEW COUNTRY"></a><br>
    <a href="{{route('newCity')}}" class="btn"><input type="button" class="btn" value="NEW CITY"></a><br>
    <a href="{{route('newPresident')}}" class="btn"><input type="button" class="btn" value="NEW PRESIDENT"></a><br><br>
@endsection

@section('content')
    <h3>FOOTBALL</h3>
    <p>Football has been called the most popular game in the world.
        It is the game that is played nearly in all countries.
        A team is composed of 11 players: a goalkeeper, backs, half-backs and forwards.
        The captain of the team is usually the oldest or the best player.
    </p>
    <p>The football pitch should be between 100 and 130 metres long and
        between 50 and 100 metres wide.
        It is divided into two halves by the halfway line.
        In the middle of the field there is a centre circle and there is a goal at each end.
        In front of each goal is the goal area and the penalty area.
        There is a penalty spot inside the penalty area and a penalty arc outside it.
        A game of football usually lasts for one and a half hours.
        At half-time, the teams change ends.
        The aim of each team is to score as many goals as possible.
    </p>

@endsection
