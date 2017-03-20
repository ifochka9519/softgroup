<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

    <h1><a href="/">Site about football</a></h1>
    @if(count ($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="row">

        <div class="col-md-3">
                    <a href="{{route('allClubs')}}" class="btn"><input type="button" class="btn" value="CLUBS"></a><br>
                    <a href="{{route('allStages')}}" class="btn"><input type="button" class="btn" value="STAGES"></a><br>

                    <a href="{{route('allTrophies')}}" class="btn"><input type="button" class="btn" value="TROPHIES"></a><br>
                    <a href="{{route('allLeagues')}}" class="btn"><input type="button" class="btn" value="LEAGUES"></a><br>

        </div>

        <div class="col-md-6">
            @yield('content')
        </div>

        <div class="col-md-3">
            @yield('adds')
        </div>

    </div>
</body>
</html>