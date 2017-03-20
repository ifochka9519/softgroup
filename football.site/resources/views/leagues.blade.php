@extends('layouts.site')
@section('title')
    Leagues
@endsection
@section('adds')
    <a href="{{route('sortLeagues')}}"><input type="button" class="alert-success" value="SORT LEAGUES"></a>
    <a href="{{route('newLeague')}}"><input type="button" class="alert-success" value="NEW LEAGUE"></a>
    <a href="{{route('newClubLeague')}}" class="btn"><input type="button" class="btn" value="NEW CLUB IN LEAGUE"></a><br>

@endsection

@section('content')
    <br>
    <br>
    @foreach($leagues as $league)
        <div class="row">
            <div class="col-md-8">
                    <input class="form-control" type="text" value="{{$league->name}}">
                    <a href="{{route('aboutLeague',['id'=>$league->id])}}"><input type="button" class="alert-link" value="More>>>"></a><br>
                <form action="{{route('deleteLeague',['league' => $league->id])}}" method="post"><br>
                    {{method_field('DELETE')}}
                        <button class="alert-danger" type="submit">DELETE</button><br>
                        {{csrf_field()}}
                    </form>
                    <br>
            </div>
        </div>

    @endforeach

@endsection