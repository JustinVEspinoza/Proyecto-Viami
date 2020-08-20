var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });

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

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.auth().languageCode = 'it';
   

    

    window.onload=inicializar;

    function inicializar(){
      //firebase.auth().settings.appVerificationDisabledForTesting = true;
     window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('SignUp', {
        'size': 'invisible',
        'callback': function(response) {

          // reCAPTCHA solved, allow signInWithPhoneNumber.
          onSignInSubmit();
        }
      });
      
    }
    function onSignInSubmit(){
      alert();
      var phoneNumber = "+50664486068";
     // var testVerificationCode = "123456";
      var appVerifier = window.recaptchaVerifier;
      firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
          .then(function (confirmationResult) {
            // SMS sent. Prompt user to type the code from the message, then sign the
            // user in with confirmationResult.confirm(code).
            window.confirmationResult = confirmationResult;
          }).catch(function (error) {
            // Error; SMS not sent
            // ...
          });
    }
// Turn off phone auth app verification.
