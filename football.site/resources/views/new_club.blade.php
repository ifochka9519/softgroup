@extends('layouts.site')
@section('title')
    New Club
@endsection

@section('content')
    <br>
    <form action="{{route('createClub')}}" method="post">
        <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
        <lable for="name">Name Club</lable>
        <input class="form-control" type="text" name="name" value="{{Request::old('name')}}"><br>
        </div>
        <div class="form-group  {{$errors->has('founded') ? 'has-error' : ''}}">
        <lable for="founded">Founded</lable>

        <input class="form-control" type="text" name="founded" value="{{Request::old('founded')}}"><br>
        </div>
        <div class="form-group  {{$errors->has('revenue') ? 'has-error' : ''}}">
        <lable for="name">Revenue</lable>

        <input class="form-control" type="text" name="revenue" value="{{Request::old('revenue')}}"><br>
        </div>
        <lable for="president">President</lable>

        <select class="form-control" name="president" id="" >
            @foreach($presidents as $president)
                <option value="{{$president->id}}">{{$president->name}}</option>
            @endforeach
        </select><br>
        <lable for="country">Country</lable>
        <select class="form-control" name="country" id="" >
            @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </select>
        <lable for="stage">Stage</lable>

        <select class="form-control" name="stage" id="" >
            @foreach($stages as $stage)
                <option value="{{$stage->id}}">{{$stage->name}}</option>
            @endforeach
        </select><br><br>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection