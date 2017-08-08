<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title or 'OnlyRemote|life'}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <section class="hero is-dark">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Only<span class="has-text-grey-lighter">Remote</span>|<span>life</span>
          </h1>
        </div>
        <div class="columns">
            <div class="column is-half"></div>
            <div class="column is-half has-text-right">
                <a href="/">Home</a>
                | <a href="/blog">Blog</a>
                | <a href="/jobs">Jobs</a>
                @if(Auth::guest())
                    | <a href="/login">Login</a>
                @else
                    | <a href="/logout">Logout</a>
                @endif
            </div>
        </div>
        @if(!Auth::guest() && Auth::user()->level > 49)
        <div class="columns">
            <div class="column is-half"></div>
            <div class="column is-half has-text-right">
                <strong>Warden</strong>: 

            </div>
        </div>
        @endif
      </div>
    </section>
    @yield('content')
    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">
          <p>
            <strong>OnlyRemoteLife</strong> by the <em>Laravel UK Community</em>.
          </p>
        </div>
      </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
