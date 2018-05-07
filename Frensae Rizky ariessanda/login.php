<?php
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <style media="screen">
      * {
        padding: 0;
        margin: 0;
      }
       body { background-image: url('sanda.jpg');
       background-size: 100%;
      }
      div{
        margin: auto;
        width: 600px;
        background: pink;
        height: 400px!important;
      }
      form{
        width: 100%!important;
      }
      input{
        width: 50%!important;
        margin: 30px auto!important;
      }
    </style>
    <title>Login</title>

  </head>
  <body>
    <div class="centerY">
    <form class="centerY" action="index.php?login=true" method="post" style="background:pink;">
        <h1 align="center" style="font-weight:normal;font-size: 30pt">Login</h1>
        <input type="text" placeholder="Username" name="username" value="">
        <input type="text" placeholder="Password" style="margin-bottom:0!important" name="password" value="">
        <p style="text-align:center;padding:20px;font-size:10pt;opacity:0.6">admin admin</p>
        <button type="submit" name="button" style="background:white(70, 210, 168);padding:10px">Login</button>

    </form>
  </div>
  </body>
</html>
