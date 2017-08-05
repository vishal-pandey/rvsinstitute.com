<?php 
	session_start();
?>
<div class="profile" id="normal" style="display: block;">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Profile</u></h3>
	<div class="well well-sm"><b>Name : </b><span><?php echo $profile['s_name']; ?></span></div>
	<div class="well well-sm"><b>Father Name : </b><span><?php echo $profile['s_father']; ?></span></div>
	<div class="well well-sm"><b>Mother Name : </b><span><?php echo $profile['s_mother']; ?></span></div>
	<div class="well well-sm"><b>Gender : </b><span><?php echo $profile['s_gender']; ?></span></div>
	<div class="well well-sm"><b>Date Of Registration : </b><span><?php echo $profile['s_rdate']; ?></span></div>
	<div class="well well-sm"><b>Mobile : </b><span><?php echo $profile['s_mobile']; ?></span></div>
	<div class="well well-sm"><b>Email : </b><span><?php echo $profile['s_email']; ?></span></div>
	<div class="well well-sm"><b>Date Of Birth : </b><span><?php echo $profile['s_dob']; ?></span></div>
	<div class="well well-sm"><b>Course : </b><span><?php echo $profile['s_course']; ?></span></div>
	<div class="well well-sm"><b>Enrolnment No. : </b><span><?php	if ($profile['s_regno'] == "") {echo "Not Alloted Yet contact institute";}else{echo $profile['s_regno'];}?></span></div>
	<div class="well well-sm"><b>Address : </b><span><?php echo $profile["s_add"]; ?></span></div>
	<div class="well well-sm"><button class="btn btn-success" id="edit">Edit</button></div>
</div>


<div class="profile" id="editt" style="display: none;">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Profile</u></h3>
	<form class="form-horizontal" method="post" id="profileform">
	<div class="well well-sm"><b>Name : </b><span><input type="text" class="form-control" name="s_name" value="<?php echo $profile['s_name']; ?>"></span></div>
	<div class="well well-sm"><b>Father Name : </b><span><input type="text" class="form-control" name="s_father" value="<?php echo $profile['s_father']; ?>"></span></div>
	<div class="well well-sm"><b>Mother Name : </b><span><input type="text" class="form-control" name="s_mother" value="<?php echo $profile['s_mother']; ?>"></span></div>
	<div class="well well-sm"><b>Gender : </b><span><?php echo $profile['s_gender']; ?></span></div>
	<div class="well well-sm"><b>Date Of Registration : </b><span><?php echo $profile['s_rdate']; ?></span></div>
	<div class="well well-sm"><b>Mobile : </b><span><?php echo $profile['s_mobile']; ?></span></div>

	<input type="text" name="s_mobile" value="<?php echo $profile['s_mobile']; ?>" style="display: none;">

	<div class="well well-sm"><b>Email : </b><span><input type="text" class="form-control" name="s_email" value="<?php echo $profile['s_email']; ?>"></span></div>
	<div class="well well-sm"><b>Date Of Birth : </b><span><?php echo $profile['s_dob']; ?></span></div>
	<div class="well well-sm"><b>Course : </b><span><input type="text" class="form-control" name="s_course" value="<?php echo $profile['s_course']; ?>"></span></div>
	<div class="well well-sm"><b>Enrolnment No. : </b><span><?php	if ($profile['s_regno'] == "") {echo "Not Alloted Yet contact institute";}else{echo $profile['s_regno'];}?></span></div>
	<div class="well well-sm"><b>Address : </b><span><input type="text" class="form-control" name="s_add" value="<?php echo $profile["s_add"]; ?>"
	></span></div>
	
	</form>
	<div class="well well-sm"><button type="submit" name="submit" class="btn btn-success" id="submit_edit">Submit</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-success" id="cancel">Cancel</button></div>
	
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#edit").click(function(){
			$("#editt").css("display","block");
			$("#normal").css("display","none");
		});
		$("#cancel").click(function(){
			$("#editt").css("display","none");
			$("#normal").css("display","block");
		});
		$("#submit_edit").click(function(){
			var data = $("#profileform").serializeArray();
			function objectifyForm(formArray) {//serialize data function
		          var returnArray = {};
		          for (var i = 0; i < formArray.length; i++){
			            returnArray[formArray[i]['name']] = formArray[i]['value'];
		          }
	          return returnArray;
	        }
			var send = objectifyForm(data);
			$.post("profileedit.php",send,function(data1,status){
	        	if (data1 == "success") {
	        		window.location.href="./student.php";
	        	}
	        });
		});

	});
</script>