<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatiple" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="{{asset('js/ckeditor.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{ config('app.name', 'LSAPP') }}</title>

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

        <script>
            ClassicEditor
                .create( document.querySelector( '#article-ckeditor' ) )
                .then( editor => {
                    console.log( editor )
                })
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </body>
</html>