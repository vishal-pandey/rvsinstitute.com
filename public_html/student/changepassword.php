<div class="changepassword">
	<h3 align="center">Change Your Password</h3>
	<form id="changepassword" method="post">
		<div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	      <input id="s_password" type="password" class="form-control" name="s_password" placeholder="Current Password" required="true">
		</div>
		<div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	      <input id="sn_password" type="password" class="form-control" name="sn_password" placeholder="New Password" required="true">
		</div>
		<div class="input-group">
	      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	      <input id="snr_password" type="password" class="form-control" name="snr_password" placeholder="Re Entery Your New Password" required="true">
		</div>
	</form>
	<br>
	<center><button class="btn btn-danger" id="change_pwd_submit">Submit</button></center>
	<br>
	<div class="well" id="error" style="display: none;"></div>
</div>
<script type="text/javascript">
	$("#change_pwd_submit").click(function(){
			var data = $("#changepassword").serializeArray();
			function objectifyForm(formArray) {//serialize data function
		          var returnArray = {};
		          for (var i = 0; i < formArray.length; i++){
			            returnArray[formArray[i]['name']] = formArray[i]['value'];
		          }
	          return returnArray;
	        }
	        send = objectifyForm(data);
	        $.post("pwdchangecontrol.php",send,function(data1,status){
	        	if (data1 == "") {
		        	$("#error").css("display","block");
		        	$("#error").html("Password Changed Successfully");
	        	}
	        	else{
		        	$("#error").css("display","block");
		        	$("#error").html(data1);
	        	}
	        });
		});
</script>