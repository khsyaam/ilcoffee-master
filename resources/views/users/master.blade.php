<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('/assets')}}/img/logo.svg">
    
    @include('users/header')

    <section class="banner-part">
        @yield('content')
    </section>

    @include('users/footer')
    
</body>
</html>