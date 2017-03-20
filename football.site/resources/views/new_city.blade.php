@extends('layouts.site')
@section('title')
    New City
@endsection

@section('content')
    <br>
    <form action="{{route('createCity')}}" method="post">
        <div class="form-group  {{$errors->has('name') ? 'has-error' : ''}}">
        <lable for="name">Name City</lable>
        <input class="form-control" type="text" name="name" value="{{Request::old('name')}}">
        </div>
        <lable for="country">Country</lable>
        <select class="form-control" name="country" id="" >
            @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
        </select><br><br>
        <button type="submit">CREATE</button>
        {{csrf_field()}}
    </form>
@endsection