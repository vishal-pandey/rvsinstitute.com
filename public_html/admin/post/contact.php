<h3 align="center">Enquiry</h3>
<br>
<div class="well col-sm-12">
	<h4 align="center">Call Back</h4>
	<?php
		include "../../../adminlibrary/phplib.php";
		$sql = "select * from contact where callback='yes'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<b>Name : </b>".$row['name']."<br>";
			echo "<b>Phone : </b>".$row['phone']."<br>";
			echo "<b>Query : </b>".$row['query']."<br><br>";
		}
	?>
</div>
<div class="well col-sm-12">
	<h4 align="center">Simple Query</h4>
	<?php
		$sql = "select * from contact where callback='no'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<b>Name : </b>".$row['name']."<br>";
			echo "<b>Phone : </b>".$row['phone']."<br>";
			echo "<b>Query : </b>".$row['query']."<br><br>";
		}
	?>
</div>
<div class="well col-sm-12">
	<h4 align="center">Career Enquiry</h4>
	<?php
		$sql = "select * from contact where callback='car'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<b>Name : </b>".$row['name']."<br>";
			echo "<b>Phone : </b>".$row['phone']."<br>";
			echo "<b>Resume : </b>".$row['query']."<br><br>";
		}
	?>
</div>