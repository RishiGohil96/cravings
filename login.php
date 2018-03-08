<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript">
      function onSignIn(googleUser) {
        console.log("here");
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
      }
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer></script> <!-- google sign in -->
  </body>
</html>
