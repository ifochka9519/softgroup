@extends('layouts.site')
@section('title')
    Trophy
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
            <h5>TROPHY => {{$trophy->name}}</h5><br>
            <h5>FOUNDED => {{$trophy->founded}}</h5><br>

        </div>
    </div>
@endsection