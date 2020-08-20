<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="bootstrap-4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/home.css" rel="stylesheet"/>

    </head>
    <body>
        <div class="container menu">
          @include("Pagina_Principal.menu")
       <div class="row">
          <div class="col-md-12">
             @yield('content')
          </div>

      </div>
      <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="#" class="link"> Viami</a>
        </div>
        <!-- Copyright -->

      </footer>
</div>
      <script src="Jquery/jquery-3.5.1.min.js"></script>
      <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
