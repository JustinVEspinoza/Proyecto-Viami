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
        <link href="css/login.css" rel="stylesheet"/>
        <link rel="stylesheet" href="build/css/intlTelInput.css">
        <link rel="stylesheet" href="build/css/demo.css">
        
        <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />

    </head>
    <body>
        <div class="container">
       <div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Inicio Sesi&oacuten</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
                    
                         @yield('content_login')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="recaptcha-container"></div>
      <script src="Jquery/jquery-3.5.1.min.js"></script>
        <script src="build/js/intlTelInput.js"></script>
      
      <script src="bootstrap-4.5.2/js/bootstrap.min.js"></script>
      <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-firestore.js"></script>
  <script src="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.js"></script>
   <script src="js/inicio_sesion.js"></script>
    </body>
</html>
