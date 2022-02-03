<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NPCommision') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .btn-outline-mirror {
          border-color: #a04ea7;
          color: #3d1540;
      }
      .btn-outline-mirror:hover {
          background: #a287a5;
          color: #fde4ff;
      }
      .mirror-button {
          color: #a04ea7;
      }
      .mirror-button-back-color {
          background: #a04ea7; 
          color: white;
      }
      .mirror-button-back-color-strong {
          background: #3d1540; 
          color: white;
      }
      .mirror-modal-header {
          background: #a04ea7; 
          color: white; 
          height: 2px;
      }
      .mirror-alert {
          background: #b191b5;
          color: white;
      }
    </style>

</head>
<body>
    <div id="app">
        <main class="py-1">
          <div class="container">
            @yield('content')
          </div>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
