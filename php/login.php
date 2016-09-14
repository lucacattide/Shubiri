<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Shubiri | Login</title>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/layout.css">
    <link type="text/css" rel="stylesheet" href="css/components.css">
    <link type="text/css" rel="stylesheet" href="css/widgets.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/pages.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-extend.css">
    <link type="text/css" rel="stylesheet" href="css/common.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/style_custom.css">
</head>
<body class="login-page">
<!--Page Container Start Here-->
<section class="login-container boxed-login">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="j-forms" id="forms-login" novalidate enctype="multipart/form-data">

        <div class="login-form-header">
        	<div class="row">
            	<div class="col-md-2">
                </div>
            	<div class="col-md-8">
            
      
                  <div class="logo">
                      <!--<a href="index.php" title="Admin Template"></a> -->
                       <img src="images/logo_shubiri.svg" alt="Shubiri">
                       <!--<h2> Shubiri</h2>-->
                      
                  </div>
                  
                </div>
              <div class="col-md-2">
                </div>
            </div>
        </div>
        <div class="login-form-content">



            <!-- start login -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="text" id="login" name="user" placeholder="Nome utente">
                </div>
            </div>
            <!-- end login -->

            <!-- start password -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
						<!--<span class="hint">
							<a href="#" class="link">Forgot password?</a>
						</span>-->
                </div>
            </div>
            <!-- end password -->


            <!-- start keep logged -->
            <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="logged" value="false" checked="">
                    <i></i>
                    Ricordami
                </label>
            </div>
            <!-- end keep logged -->

            <!-- start response from server -->
            <div class="response"></div>
            <!-- end response from server -->



        </div>
        <div class="login-form-footer">
            <button id="login_cms" name="login" type="submit" class="btn-block btn btn-primary">Login</button>
        </div>

    </form>
</div>
</div>
</div>
<!--Footer Start Here -->
<footer class="login-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta">POWERED BY &nbsp;&nbsp; <a href="http://www.laboratorio-a.it" title="laboratorio-a" target="new">laboratorio-a</a></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta"><small>Il logo Shubiri&trade; ed il logo laboratorio-a&trade; sono marchi registrati &reg; da Radeesh Servino e laboratorio-a S.r.l.<br />&copy; Shubiri 2016 - Tutti i Diritti riservati.</small></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
<script src="js/lib/jquery.js"></script>
<script src="js/lib/jquery-migrate.js"></script>
<script src="js/lib/bootstrap.js"></script>
<script src="js/lib/jRespond.js"></script>
<script src="js/lib/hammerjs.js"></script>
<script src="js/lib/jquery.hammer.js"></script>
<script src="js/lib/smoothscroll.js"></script>
<script src="js/lib/smart-resize.js"></script>
<script src="js/lib/jquery.validate.js"></script>
<script src="js/lib/login-validation.js"></script>
<script tyoe="text/javascript" src="js/lib/cookies.js"></script> <!--Cookies-->
</body>
</html>