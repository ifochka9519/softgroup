@extends('layouts.site')
@section('title')
    New President
@endsection

@section('content')
    <br>
    <form action="{{route('createPresident')}}" method="post">
        <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
        <lable for="name">Name President</lable>
        <input class="form-control" type="text" name="name" value="{{Request::old('name')}}">
        </div>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection