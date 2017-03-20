@extends('layouts.site')
@section('title')
    Club
@endsection

@section('content')


    <div class="row">
        <div class="col-md-4">
            <h2>Leagues</h2>
            @foreach($leagues as $league)
                <h5>NAME => {{$league->name}}.</h5>
                @endforeach
        </div>
        <div class="col-md-4">
            <h2>Information</h2>
            <h5>CLUB => {{$club->name}}</h5><br>
            <h5>FOUNDED => {{$club->founded}}</h5><br>
            <h5>COUNTRY => {{$country}}</h5><br>
            <h5>STADIUM => {{$stage}}</h5><br>
            <h5>PRESIDENT => {{$president}}</h5><br>
            <h5>REVENUE => {{$club->revenue}}</h5><br>

        </div>
        <div class="col-md-4">
            <h2>Trophies</h2>
           @foreach($trophies as $trophy)
                <h5>NAME => {{$trophy->name}}.</h5>
                @endforeach
        </div>
    </div>

@endsection