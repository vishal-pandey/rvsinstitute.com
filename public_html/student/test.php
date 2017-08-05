<?php session_start(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$(document).ajaxStart(function(){
        	$("#content").css("display","block");
       	 	$("#content").html('Please Wait .... ');
    	});
    	$(document).ajaxComplete(function(){
        	// $("#content").html("");
    	});


		$("#otp_submit").click(function(){
			
			var data = $("#otp-form").serializeArray();

			function objectifyForm(formArray) {//serialize data function
					
		          var returnArray = {};
		          for (var i = 0; i < formArray.length; i++){
			            returnArray[formArray[i]['name']] = formArray[i]['value'];
		          }
	          return returnArray;
	        }

	        var send = objectifyForm(data);
	        $.post("otpcontrol.php",send,function(data,status){
	        	$("#content").css("display","block");
		          alert("vishal");
	        	// var op = JSON.parse(data);
	        	$("#content").html(data);
	        });
		});

	});
</script>

<div class="student well col-sm-12">
	<h2 align="Center">!!! Register With RVS Institute !!!</h2>
	<div class="col-sm-3"></div>
	<div class="col-sm-6 well signup">
	  	<h3 align="center">Sign Up</h3>

	  	<form method="post" id="otp-form"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="otp" type="text" class="form-control" name="otp" placeholder="Enter The Otp Serd to your mobile no." required="true"></div></form><center><button type="submit" class="btn btn-primary col-sm-offset-" id="otp_submit">Submit</button></center>
		<br>
		<div class="well" id="content" style="display: none;">
			
		</div>
		
		<div class="well" id="vishal" style="display: none;"></div>
		<hr style="border: 0;height: 1px; background-image: linear-gradient(to right, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0.75), rgba(255, 0, 0, 0));">
		<div class="pull-right"><a href="./student.php">Existing User ? Login</a></div>
	</div>
</div>
<style type="text/css">
	select{
		height: 30px;
	}
</style>