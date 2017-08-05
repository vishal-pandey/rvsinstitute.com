<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$("#login-form").ajaxStart(function(){
       	 	$("#login_submit").html("Logging in ...");
    	});
    	$("#login-form").ajaxComplete(function(){
        	$("#login_submit").html("Login");
    	});

		$("#login_submit").click(function(){
			var data = $("#login-form").serializeArray();
			function objectifyForm(formArray) {//serialize data function
		          var returnArray = {};
		          for (var i = 0; i < formArray.length; i++){
			            returnArray[formArray[i]['name']] = formArray[i]['value'];
		          }
	          return returnArray;
	        }
	        var send = objectifyForm(data);
	        $.post("logincontrol.php",send,function(data1,status){
	        	if (data1 == "success") {
	        		window.location.href="./student.php";
	        	}else{
	        		$("#error").css("display", "block");
	        		$("#error").html(data1);
	        	}
	        });
		});
	});
</script>

<div class="student well col-sm-12">
	<h2 align="Center">!!! Welcome To Student Zone !!!</h2>
	<div class="col-sm-3"></div>
	<div class="col-sm-6 well login">
		<h3 align="center">Login</h3>
		<form method="post" action="" id="login-form">
			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
		      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="10 Digit Mobile No." required="true">
			</div>
			<div class="input-group">
		      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="true">
			</div>
			<div class="input-group">      
				<div class="checkbox" style="margin-left: 40px;">
					<label><input type="checkbox" name="autologincheck">Keep me logged in</label>
				</div>
			</div>
			
			<br>
		</form>
		<center>
			<button type="submit" class="btn btn-success col-sm-offset-" id="login_submit">Login</button>
		</center>
		<div class="well" id="error" style="display: none; margin-top: 15px;">
		</div>
		<br>
		<hr style="border: 0;height: 1px; background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0.75), rgba(255, 0, 0, 0));">
		<div style="text-align: center;">Don't Have an Account Yet ? <br><a href="./signup.php">Create an account Here</a></div>
		<br>
	</div>
</div>
<style type="text/css">
	select{
		height: 30px;
	}
</style>