@extends('layouts.app')

@section('content_login')

<div class="login-space">
  <div class="login">
    <div class="group"> <label for="user" class="label">Tel&eacutefono</label> 
		 <input id="phone2" class="input" name="phone" type="tel">
    	<!--<input id="user" type="text" class="input" placeholder="Ingresa su núemero telefonico"> -->
    </div>
     <div class="group"> <label for="pass" class="label">Contrase&ntildea</label> <input id="passSesion" type="password" class="input" data-type="password" placeholder="Ingresa tu contraseña"> </div>
     <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Mantener sesi&oacuten guardada</label> </div>
     <div class="group"> <input type="submit" id="iniciar_sesion" class="button" value="Iniciar Sesión"> </div>
     <div class="hr"></div>
     <div class="foot"> <a href="#">¿Olvidaste la contrase&ntildea?</a> </div>
</div>
 @yield('content_register')
@endsection
