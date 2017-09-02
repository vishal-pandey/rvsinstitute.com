<h3 align="center">Add Content to this Course</h3>
<br>
<form method="post" class="add-content-form" id="myForm">
	<input type="text" name="cid" id="cid" value="<?php echo $_POST['cid']; ?>" style="display: none;">
	<input type="text" name="title" class="form-control" placeholder="Title Of The Content" required="true">
	<br>
	<center><button class="btn btn-default">Submit</button></center>
</form>

<script type="text/javascript">
$(document).ready(function(){
	bindSubmit();
	function bindSubmit(){
		$(".add-content-form").submit(function(e) {
		    var url = "./post/study/add-content-form.php";
       		var cid = $("#cid").attr("value");

		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $(this).serialize(), 
		           success: function(data)
		           {
		               		
		               if (data == "success") {
		               		document.getElementById("myForm").reset();
		               		$.post("./post/study/doc_list.php",
		               		{
		               			cid:cid
		               		},
							function(data){
								$(".rmcont").html(data);
							});

							//$(".rmcont").html("new content added");
		               }
		           }
		         });

		    e.preventDefault(); 
		});
	}
});
</script>