@extends('layouts.site')
@section('title')
    Stages
@endsection
@section('adds')
    <a href="{{route('sortStages')}}"><input type="button" class="alert-success" value="SORT STAGES"></a>
    <a href="{{route('newStage')}}"><input type="button" class="alert-success" value="NEW STAGE"></a>
@endsection
@section('content')
    <br>
    <br>
    @foreach($stages as $stage)
        <div class="row">
            <div class="col-md-8">
                    <input class="form-control" type="text" value="{{$stage->name}}">
                    <a href="{{route('aboutStage',['id'=>$stage->id])}}"><input type="button" class="alert-link" value="More>>>"></a><br>
                <form action="{{route('deleteStage',['stage' => $stage->id])}}" method="post"><br>
                        {{method_field('DELETE')}}
                        <button class="alert-danger" type="submit">DELETE</button><br>
                        {{csrf_field()}}
                    </form>
                    <br>
            </div>
        </div>

    @endforeach

@endsection
