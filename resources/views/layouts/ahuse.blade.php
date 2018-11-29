<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="keywords" content="@yield('keywords', 'property,sale,rent,for sale,for rent,rental,properties')">
            <meta name="description" content="@yield('description', 'Search properties for sale or rent.')">
            <title>@yield('title', 'Welcome to Ahuse')</title>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-31252215-2"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-31252215-2');
            </script>
            <link rel="stylesheet" href="{{asset('css/main.css')}}">
            <!-- Google fonts -->
            <!--<link href="https://fonts.googleapis.com/css?family=Cabin|Montserrat" rel="stylesheet">-->
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>
        @include('includes.navbar')

        @yield('body-content')
        {{--<div class="container">
            @include('includes.msg')
        </div>--}}
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/selector.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/ahuse.js')}}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            //CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
    @include('includes.footer')
</html>
