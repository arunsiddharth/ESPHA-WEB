<form id="form" action="register.php" method="POST" onsubmit="return validate('form')">
	<fieldset>
	<div class="form-group">
	 <input autofocus class="form-control" type="text" placeholder="Name" name="name"><br><br>
	 <input class="form-control" type="email" placeholder="E-Mail" name="email"><br><br>
	 <input class="form-control" type="password" placeholder="Password" name="password"><br><br>
	</div>
	<div class="form-group">
	  <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Register
      </button><br>
	</div>
	</fieldset>
</form>

<h3>Register with Facebook Or Google</h3>
	
	<a href="sociallogin.php?provider=Facebook"><img src='img/facebook.png'></img></a>&nbsp;&nbsp;&nbsp;
	<a href="sociallogin.php?provider=Google"><img src='img/google2.png' width="215px"></img></a>&nbsp;&nbsp;
<br><br>
<div>
    or <a href="login.php">Log In</a>
</div>