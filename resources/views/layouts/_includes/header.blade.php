<!DOCTYPE html>
<html>

<head>
    <title>@yield('site_title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/app.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <nav class="cor">
            <div class="nav-wrapper">
                <class="brand-logo"></a>
                <a href="#" data-target="mobile" class="sidenav-trigger">
                <ul class="right hide-on-med-and-down">
                    <li></a><a href="/"><i class="material-icons">home</i>Home</a></li>
                    @if(Auth::guest())
                    <li><a href="{{route('site.login')}}">Login</a></li>
                    @else
                    <li><a href="{{route('admin.hotels')}}">Hotel</a></li>
                    <li><a href="#">{{Auth::user()->name}}</a></li>
                    <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                    @endif
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            <li><a href="/">Home</a></li>
            @if(Auth::guest())
            <li><a href="{{route('site.login')}}">Login</a></li>
            @else
            <li><a href="{{route('admin.hotels')}}">Hotel</a></li>
            <li><a href="#">{{Auth::user()->name}}</a></li>
            <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
            @endif
        </ul>
    </header>