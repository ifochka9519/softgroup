@extends('layouts.site')
@section('title')
    New Club League
@endsection

@section('content')
    <br>
    <form action="{{route('createClubLeague')}}" method="post">
        <lable for="club">Club</lable>
        <select name="club" id="" >
            @foreach($clubs as $club)
                <option value="{{$club->id}}">{{$club->name}}</option>
            @endforeach
        </select><br><br>
        <lable for="league">League</lable>
        <select name="league" id="" >
            @foreach($leagues as $league)
                <option value="{{$league->id}}">{{$league->name}}</option>
            @endforeach
        </select><br><br>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection