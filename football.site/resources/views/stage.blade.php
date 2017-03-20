@extends('layouts.site')
@section('title')
    Stage
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
            <h5>STAGE => {{$stage->name}}</h5><br>
            <h5>FOUNDED => {{$stage->founded}}</h5><br>
            <h5>CITY => {{$city->name}}</h5><br>
            <h5>CAPACITY => {{$stage->capacity}}</h5><br>

        </div>

@endsection