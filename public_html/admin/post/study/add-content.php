<div class="well" style="border-radius: 0; background: rgb(250,250,250);">
<h3 align="center">Add Content to this Course</h3>
<br>
<form method="post" class="add-content-form" id="myForm">
	<input type="text" name="cid" id="cid" value="<?php echo $_POST['cid']; ?>" style="display: none;">
	<input type="text" name="check" value="add" style="display: none;">
	<input type="text" name="title" class="form-control" placeholder="Title Of The Content" required="true">
	<br>
	<center><button class="btn btn-default">Add</button></center>
</form>
</div>

<div class="well" style="border-radius: 0; background: rgb(250,250,250);"> 
	<?php 
		include "../../../../adminlibrary/phplib.php";
		$cid = $_POST['cid'];	
		$sql = "select * from s_material where cid = '{$cid}'";
		$result = $conn->query($sql);
		$contentlist = "<select name='smid' class='form-control'><option value='NAN'>Select</option>";
		while ($row = $result->fetch_assoc()) {
			$contentlist = $contentlist."<option value='{$row['smid']}'>{$row['title']}</option>";
		}
		$contentlist = $contentlist."</select>"
	?>
	<h3 align="center">Delete Content to this Course</h3><br>
	<form method="post" class="add-content-form" id="myForm">
		<input type="text" name="cid" id="cid" value="<?php echo $_POST['cid']; ?>" style="display: none;">
		<input type="text" name="check" value="delete" style="display: none;">
		<?php echo $contentlist; ?>
		<br>
		<center><button class="btn btn-default">Delete</button></center>
	</form>
</div>

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