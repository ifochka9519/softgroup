@extends('layouts.site')
@section('title')
    Trophies
@endsection
@section('adds')
    <a href="{{route('sortTrophies')}}"><input type="button" class="alert-success" value="SORT TROPHIES"></a>
    <a href="{{route('newTrophy')}}"><input type="button" class="alert-success" value="NEW TROPHY"></a>
    <a href="{{route('newClubTrophy')}}" class="btn"><input type="button" class="btn" value="NEW CLUB'S TROPHY"></a><br>

@endsection
@section('content')
    <br>
    <br>
    @foreach($trophies as $trophy)
        <div class="row">
            <div class="col-md-8">
                    <input class="form-control" type="text" value="{{$trophy->name}}">
                    <a href="{{route('aboutTrophy',['id'=>$trophy->id])}}"><input type="button" class="alert-link" value="More>>>"></a><br>
                <form action="{{route('deleteTrophy',['trophy' => $trophy->id])}}" method="post"><br>
                    {{method_field('DELETE')}}
                        <button class="alert-danger" type="submit">DELETE</button><br>
                        {{csrf_field()}}
                    </form>
                    <br>
            </div>
        </div>

    @endforeach

@endsection