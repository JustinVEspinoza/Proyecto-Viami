@extends('Inicio_Sesion.inicio_sesion')
@section('content_register')
<div class="sign-up-form">
					<div class="group">
						<form action="/file-upload" class="dropzone input">
						  <div class="fallback">
						    <input name="file" type="file" multiple class="input"/>
						  </div>
						</form>
					</div>
                           <div class="group"> <label for="phone" class="label">Tel&eacutefono</label> 
								 <input id="phone" name="phone" class="input" type="tel">
						    </div>
                            <div class="group"> <label for="Nombre" class="label">Nombre</label> <input id="Nombre" type="text" class="input" placeholder="Crea tu Nombre"> </div>
                            <div class="group"> <label for="email" class="label">Correo</label> <input id="email" type="text" class="input" placeholder="Ingrese su correo"> </div>
                            <div class="group"> <label for="edad" class="label">Edad</label> <input id="edad" type="number" class="input" placeholder="Ingrese su Edad"> </div>
                            <div class="group"> <label for="pass" class="label">Contrase&ntildea</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Crea tu contraseña"> </div>
                            <div class="group justify-content-center"> <input type="submit" id="SignUp" class="button" value="Registrarse" onclick="onSignInSubmit()"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">¿Ya eres miembro?</label> </div>
</div>

@endsection