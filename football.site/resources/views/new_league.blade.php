@extends('layouts.site')
@section('title')
    New League
@endsection

@section('content')
    <br>
    <form action="{{route('createLeague')}}" method="post">
        <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
        <lable for="name">Name League</lable>
        <input class="form-control" type="text" name="name" value="{{Request::old('name')}}">
        </div>
        <div class="form-group  {{$errors->has('place') ? 'has-error' : ''}}">
      <lable for="place">Place</lable>

        <input class="form-control" type="text" name="place" value="{{Request::old('place')}}">
        </div>
        <lable for="president">President</lable>
        <br>
        <select name="president" id="" class="form-control" >
            @foreach($presidents as $president)
                <option value="{{$president->id}}">{{$president->name}}</option>
            @endforeach
        </select><br><br>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection