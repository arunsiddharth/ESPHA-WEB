<form id="form" action="bAlarm.php" method="POST">
	<fieldset>
	<div class="form-group">
	 <input autofocus class="form-control" type="number" placeholder="State" name="state" max=1 min=0>
	 <br><br>
	 TimeOut In:<br>
	 <input class="form-control" type="number" placeholder="Hrs." name="hrs" max=24 min=0>
	 &nbsp;&nbsp;
	 <input class="form-control" type="number" placeholder="Mins" name="mins" max=1440 min=0>
	 <br><br>
	</div>
	<div class="form-group">
	  <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Start
      </button><br><br>
	</div>
	</fieldset>
</form>