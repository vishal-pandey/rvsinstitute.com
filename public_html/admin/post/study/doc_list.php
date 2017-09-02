<?php 
	include "../../../../adminlibrary/phplib.php";
	$cid = $_POST['cid'];	
	$sql = "select * from s_material where cid = '{$cid}'";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo '<button class="btn btn-default col-sm-12 smaterial-btn" id="'.$row['smid'].'" >'.$row['title']."</button>";
	}
?>
<script type="text/javascript">
	$(document).ready(function (){
		$(".smaterial-btn").click(function(){
			var course_id = $(this).attr("id");
			$.post("./post/study/editcontent.php",
			{
				smid : course_id
			},
			function(data, status){
				// alert("Data: " + data + "\nStatus: " + status);
				$(".s_material-content").html(data);
			});

			$(".smaterial-btn").css("background","white");
			$(this).css("background","lightgrey");
		});
	});
</script>