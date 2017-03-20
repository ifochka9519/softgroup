@extends('layouts.site')
@section('title')
    New Trophy
@endsection

@section('content')
    <br>
    <form action="{{route('createTrophy')}}" method="post">
        <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
        <lable for="name">Name Trophy</lable>
        <input class="form-control" type="text" name="name" value="{{Request::old('name')}}">
        </div>
        <div class="form-group  {{$errors->has('founded') ? 'has-error' : ''}}">
        <lable for="name">Founded</lable>
        <input class="form-control" type="text" name="founded" value="{{Request::old('founded')}}">
        </div>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection