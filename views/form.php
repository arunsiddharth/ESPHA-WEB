<form action="rgb.php" method="POST">
    
    <fieldset>
        
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" type="number" name="led" max=1 min=0 placeholder="State"></input><br><br>
            <center><b>Choose Color You Wish</b></center><br>
            <!--<input autocomplete="off" autofocus class="form-control" type="number" name="red" max=255 min=0 placeholder="Red"></input>&nbsp;
            <input autocomplete="off" autofocus class="form-control" type="number" name="blue" max=255 min=0 placeholder="Green"></input>&nbsp;
            <input autocomplete="off" autofocus class="form-control" type="number" name="green" max=255 min=0 placeholder="Blue"></input>&nbsp;
            
            <br><br>-->
            <input type="color" name="favcolor">
        </div>
        
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                  Send
            </button>
        </div>
        
    </fieldset>

</form>