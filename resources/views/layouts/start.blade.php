<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>    
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        
    
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="css/register.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('assets/css/app.css')}}"/>
    </head>
    <body>
        <center>
            <div id='start'>
                <div id="main-container" class="container">
                    @include('inc.messages')
                    @yield('content')
                </div>
            </div>
        </center>
    </body>
</html>