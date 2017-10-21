<?php
	session_start();
	if((!isset($_SESSION['theadmin'])) && ($_SESSION['theadmin']!="superadmin")){
		header("Location:http://www.rvsinstitute.com/");
		die();
	}
?>
<h3 align="center">Upload Files</h3>
<section>
	<form method="post" enctype="multipart/form-data" class="well file-upload-form">
		<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
	    <center><input type="submit" value="Upload" name="submit" class="btn btn-default"></center>
	</form>
	
	<?php

		$dir = "../../../files/";

		// Sort in ascending order - this is default
		$a = scandir($dir);

		foreach ($a as $value) {
			if ($value == "." || $value == "..") {
			}
			else{
			    echo  "	<section class='well'>
			    		<center><img src='http://rvsinstitute.com/files/".$value."' width='100px' height='100px'></center>

			    		

				    	<div class='col-sm-8'><label>Link</label><input type='text' value='http://rvsinstitute.com/files/".$value."' class='form-control'></div>

				    	<br>
				    	<form class='file-delete-form' method='post'>
				    		<input name='thefile' value='../../../files/".$value."' style='display:none;'>
				    		<button class='btn btn-default'>DELETE</button>
				    	</form>
				    	<br>

				    	</section>";
			}
		}
	?>
</section>
<script type="text/javascript">
	$(document).ready(function(){		
		$(".file-upload-form").submit(function(e) {
		    var url = "./upload.php"; 

		    $.ajax({
		           type: "POST",
		           url: url,
		           data:  new FormData(this),
		           cache:false,
            contentType: false,
            processData: false,
		           success: function(data)
		           {
		           		// alert(data);
		            	if (data == "success") {              		
		               		$.post("./post/files/uploads.php", function(data, status){
						            $('.uploads').html(data);
						        });
						}
		           }
		         });
		    e.preventDefault(); 
		});
		$(".file-delete-form").submit(function(e) {
			e.preventDefault(); 
		    var url = "./post/files/delete.php";

		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $(this).serialize(), 
		           success: function(data)
		           {
		           		// alert(data);
		            	if (data == "success") {              		
		               		$.post("./post/files/uploads.php", function(data, status){
						            $('.uploads').html(data);
						        });
						}
		           }
		         });
		    
		});
	});
</script>