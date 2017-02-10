<center>
<form id="form" action="login.php" method="POST" onsubmit="javascript:return validate('form');">
	<fieldset>
	<div class="form-group">
	 <input autofocus class="form-control" type="email" placeholder="E-Mail" name="email">
	 <br><br>
	 <input class="form-control" type="password" placeholder="Password" name="password">
	 <br><br>
	</div>
	<div class="form-group">
	  <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Log In
      </button><br><br>
	</div>
	</fieldset>
</form>

<h3>Login with Facebook Or Google</h3>
    
	<a href="sociallogin.php?provider=Facebook"><img src='img/facebook.png'></img></a> &nbsp;&nbsp;&nbsp;
	<a href="sociallogin.php?provider=Google"><img src='img/google2.png' width="215px"></img></a>  &nbsp;&nbsp;
<br><br>
<div>
    or <a href="register.php">Register</a>
</div>
</center>