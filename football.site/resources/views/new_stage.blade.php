@extends('layouts.site')
@section('title')
    New Stage
@endsection

@section('content')
    <br>
    <form action="{{route('createStage')}}" method="post">
        <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
        <lable for="name">Name Stage</lable>
        <input class="form-control" type="text" name="name" value="{{Request::old('name')}}">
        </div>
        <div class="form-group  {{$errors->has('capacity') ? 'has-error' : ''}}">
        <lable for="name">Capacity</lable>
        <input class="form-control" type="text" name="capacity" value="{{Request::old('capacity')}}">
        </div>
        <div class="form-group  {{$errors->has('founded') ? 'has-error' : ''}}">
        <lable for="name">Founded</lable>
        <input class="form-control" type="text" name="founded" value="{{Request::old('founded')}}">
        </div>
        <lable for="city">City</lable>
        <select class="form-control" name="city" id="" >
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select><br><br>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection