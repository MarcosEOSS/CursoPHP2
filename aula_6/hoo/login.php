<?php require "core/settings.php";?>


<html>
<head>
<?php require "bootstrap.php";?>
<link href="<?= $URL_PATH?>static/pagina5.css" type="text/css" rel="stylesheet"/>
<script src="static/pagina5.js"></script>

</head>
<body>
	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            
            <p id="profile-name" class="profile-name-card"></p>
            <?php if(isset($_GET['error'])):?>
            	<div class="alert alert-danger">
            		<?php if($_GET['error'] == 'invalid_login'): ?>
            			
            		<?php endif ?>
            	</div>
            <?php endif ?>



            <form class="form-signin" action="<?= $URL_PATH?>/core/login.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                
                <input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Emai"autofocus>
               
                <input type="password"  name="senha" id="inputPassword" class="form-control" placeholder="Senha">

                <div id="remember" class="checkbox">
            
                    <label>
            

                        <input type="checkbox" value="remember-me"> Me manter logado
            

                    </label>
            
                </div>
            
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            
            </form><!-- /form -->
            
            <a href="#" class="Esqueci a senha">
            
                Forgot the password?
            
            </a>
        </di
        v><!-- /card-container -->
    </di
    v><!-- /container -->
</bo
dy>

</html>