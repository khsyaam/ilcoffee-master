<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/svg" href="{{ asset('/dashboard') }}/dist/img/logo.svg"/>
  <title>@yield('title')</title>  

@include('admin/layouts/header')
@include('admin/layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

@include('admin/layouts/footer')
</body>
</html>
