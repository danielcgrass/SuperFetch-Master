<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  
  $account = new Account($con);
  
  include("includes/handlers/login-handler.php");
  echo $userLoggedIn;
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Apr 21 2020 17:18:11 GMT+0000 (Coordinated Universal Time)  -->
<html
  data-wf-page="5e9f226aef1e71542fe4414a"
  data-wf-site="5e9f1c8e257b5c39af711556"
>
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta content="Login" property="og:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/webflow.css" rel="stylesheet" type="text/css" />
    <link href="css/superfetch.webflow.css" rel="stylesheet" type="text/css" />
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = ' w-mod-';
        (n.className += t + 'js'),
          ('ontouchstart' in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + 'touch');
      })(window, document);
    </script>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="images/webclip.png" rel="apple-touch-icon" />
  </head>
  <body>
    <div class="section">
      <div class="logo-login">
        <img
          src="images/logo_white.png"
          srcset="
            images/logo_white.png  500w,
            images/logo_white.png  800w,
            images/logo_white.png 1080w,
            images/logo_white.png 5905w
          "
          sizes="7vw"
          alt=""
          class="image-3"
        />
        <h1 class="heading-3">superfetch</h1>
      </div>
      <div class="login-button">
        <a href="#" class="facebook_authentication w-button" id="loginFacebook"
          >LOG IN WITH FACEBOOK</a
        >
      </div>
      <div class="div-block-4">
        <div class="div-block-5"></div>
        <h1 class="heading-4">OR</h1>
        <div class="div-block-5-copy"></div>
      </div>
      <div class="form-block w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form" action="login.php" method="POST">
          <input type="text" class="text-field w-input" maxlength="256" name="loginUsername" data-name="loginUsername" placeholder="Username" id="loginUsername"/>
          <input type="password" class="text-field w-input" maxlength="256" name="loginPassword" data-name="loginPassword" placeholder="Password" id="loginPassword"/>
          <input type="submit" value="Submit" name="submitMe" class="submit-button w-button" id="loginButton"/>
        </form>
        <div class="register-button">
        <a href="register.php" id="registerButton">Register Here</a
        >
      </div>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <script
      src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e9f1c8e257b5c39af711556"
      type="text/javascript"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  </body>
</html>
