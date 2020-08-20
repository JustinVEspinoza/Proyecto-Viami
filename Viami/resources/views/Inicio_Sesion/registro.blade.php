@extends('Inicio_Sesion.inicio_sesion')
@section('content_register')
<div class="sign-up-form">
                            <div class="group"> <label for="user" class="label">Usuario</label> <input id="user" type="text" class="input" placeholder="Crea tu usuario"> </div>
                            <div class="group"> <label for="pass" class="label">Contrase&ntildea</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Crea tu contraseña"> </div>
                            <div class="group"> <label for="pass" class="label">Repetir la contrase&ntildea</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Repite tu contraseña"> </div>
                            <div class="group"> <label for="pass" class="label">Correo</label> <input id="pass" type="text" class="input" placeholder="Ingrese su correo"> </div>
                            <div class="group"> <input type="submit" id="SignUp" class="button" value="Registrarse"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">¿Ya eres miembro?</label> </div>
</div>

@endsection