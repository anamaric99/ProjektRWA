<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}"></script>  
   
     <!-- src="{{ URL::asset('js/ckeditor/ckeditor.js') }}" -->
     <!-- <textarea name="article-ckeditor"></textarea> -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    
    <script>
        if(document.getElementsByTagName('textarea').length > 0){
      CKEDITOR.replace( 'article-ckeditor' );
                                                             }
    </script>

   
</body>
</html>
