@extends('layouts.site')
@section('title')
	Clubs
@endsection
@section('adds')
	<a href="{{route('sortClubs')}}"><input type="button" class="alert-success" value="SORT CLUBS"></a>
	<a href="{{route('newClub')}}"><input type="button" class="alert-success" value="NEW CLUB"></a>
	<a href="{{route('newClubLeague')}}" class="btn"><input type="button" class="btn" value="NEW CLUB IN LEAGUE"></a><br>
	<a href="{{route('newClubTrophy')}}" class="btn"><input type="button" class="btn" value="NEW CLUB'S TROPHY"></a><br>

@endsection
@section('content')
	<br>
	<br>
	@foreach($clubs as $club)
	<div class="row">
		<div class="col-md-8">
				<input class="form-control" type="text" value="{{$club->name}}">
                <a href="{{route('aboutClub',['id'=>$club->id])}}"><input type="button" class="alert-link" value="More>>>"></a><br>
				<form action="{{route('deleteClub',['club' => $club->id])}}" method="post"><br>
                    {{method_field('DELETE')}}
                    <button class="alert-danger" type="submit">DELETE</button><br>
                    {{csrf_field()}}
                </form>
                <br>

		</div>
	</div>

@endforeach

@endsection
