    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="js/app.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('css')

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <style>
        .float{
        position:fixed;
        bottom:4rem;
        width: 3rem;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:30px;
        text-align:center;
      font-size:2rem;
        box-shadow: 2px 2px 3px #999;
      z-index:100;
    }
    
    .my-float{
        margin-top:16px;
    }
        </style>