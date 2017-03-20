@extends('layouts.site')
@section('title')
    New Club Trophy
@endsection

@section('content')
    <br>
    <form action="{{route('createClubTrophy')}}" method="post">
        <lable for="club">Club</lable>
        <select name="club" id="" >
            @foreach($clubs as $club)
                <option value="{{$club->id}}">{{$club->name}}</option>
            @endforeach
        </select><br><br>
        <lable for="trophy">Trophy</lable>
        <select name="trophy" id="" >
            @foreach($trophies as $trophy)
                <option value="{{$trophy->id}}">{{$trophy->name}}</option>
            @endforeach
        </select><br><br>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection