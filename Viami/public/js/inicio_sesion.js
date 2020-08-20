
/*****************************Configuración de los campos de texto telefonico*******************************************/
var input = document.querySelector("#phone");
var input2 = document.querySelector("#phone2");
    window.intlTelInput(input, {
      utilsScript: "build/js/utils.js",
    });
window.intlTelInput(input2, {
      utilsScript: "build/js/utils.js",
    });
var iti = window.intlTelInputGlobals.getInstance(input);
var iti2 = window.intlTelInputGlobals.getInstance(input2);
/*****************************Configuración de Firebase y captcha************************************************/
/*Credenciales de la cuenta del proyecto en firebase*/
const firebaseConfig = {
  apiKey: "AIzaSyC45-7652_UjVxxYlIXi98tzZcG11OR_90",
  authDomain: "viami-c9b37.firebaseapp.com",
  databaseURL: "https://viami-c9b37.firebaseio.com",
  projectId: "viami-c9b37",
  storageBucket: "viami-c9b37.appspot.com",
  messagingSenderId: "798265950727",
  appId: "1:798265950727:web:91c992c7520942f36760a2",
  measurementId: "G-88TKLWT0T9"
};

    firebase.initializeApp(firebaseConfig);
    firebase.auth().languageCode = 'it';
  var recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container',{
  size : 'invisible'
});

recaptchaVerifier.render().then(function(widgetId) {
  window.recaptchaWidgetId = widgetId;
});
/*****************************************************************************/
    function onSignInSubmit(){
      
      let phone = iti.getNumber();
      firebase.auth().signInWithPhoneNumber(phone, recaptchaVerifier)
        .then(function (confirmationResult) {
          window.confirmationResult = confirmationResult;
          console.log('enviado?',confirmationResult);
        }).catch(function (error) {
          console.log('error',error)
          grecaptcha.reset(window.recaptchaWidgetId);
          recaptchaVerifier.render().then(function(widgetId) {
          grecaptcha.reset(widgetId);
        });
      }
    );
       validarClave();
  
    }

    function validarClave(){
       Swal.fire({
        title: 'Terminar Registro',
        html: '<input type="text" id="clave" class="swal2-input" placeholder="Ingrese la clave"></input>',
        confirmButtonText: 'Validar Código',
        preConfirm: () => {
            let clave = Swal.getPopup().querySelector('#clave').value
            
            if (clave === '') {
                Swal.showValidationMessage(`No ha ingresado la clave`);
            }
            return {clave: clave}
        }
    }).then((result) => {
         var clave=`${result.value.clave}`;
        console.log("clave:"+clave);
          window.confirmationResult.confirm(clave)
            .then(function (result) {
              var user = result.user;
              console.log(user);
              if(user!="" && user!=null){
                  
              }
              
            })
            .catch(function (error) {
                console.log(error)
            });      
                 
    });
    }
