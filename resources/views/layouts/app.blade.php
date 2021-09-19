<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- InleverOpdracht 2a Pas titels aan -->
    <title>Winkel - 4Shop - Steven</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/narrow-jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
    <div class="container">
      <header class="header d-flex justify-content-between align-items-center">
        <!-- InleverOpdracht 2a Pas titels aan -->
        <h3 class="text-muted"><a href="{{ route('home') }}" class="no-link">Winkel van 4Shop (Steven)</a></h3>
        <a href="{{ route('cart') }}"><img class="cart" src="{{ url('img/cart.png') }}" alt=""></a>
      </header>

      <main role="main">
        @if (session('status'))
            <div class="alert alert-{{ session('status')[0] }}">
                {!! session('status')[1] !!}
            </div>
        @endif
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        
        @yield('content')
      </main>

      <!-- InleverOpdracht 2b Pas footer tekst aan -->
      <footer class="footer">
        <p><strong>Mail bij vragen: <a href="mailto:winkelbeheer@4shop.nl">winkelbeheer@4shop.nl</a></strong> &middot; 4Shop, Terheijdenseweg 350, 4826 AA Breda, KvK: 3829102, tel: 036281028332.</p>
      </footer>

    </div>
</body>
</html>
