<?php
	include "../adminlibrary/phplib.php";
    $sql = "SELECT * FROM academic_schedule";
    $result = $conn->query($sql);
    
?>
<h2 align="center">Academic Schedule</h2>
<div class="col-sm-8 about-content">
	<hr id="hr">
    <p>
    	<table class="table table-bordered">
    		<tr>
    			<th>S No</th>
    			<th>Course</th>
    			<th>Subject</th>
    			<th>Day</th>
    			<th>Timings</th>
    		</tr>
	    <?php 
	    	while($row = $result->fetch_assoc()){
	    		echo "
	    			<tr>
	    				<td>{$row['sno']}</td>
	    				<td>{$row['class']}</td>
	    				<td>{$row['subject']}</td>
	    				<td>{$row['day']}</td>
	    				<td>{$row['timing']}</td>
	    			</tr>
	    		";
	    	}
	    ?>
    	</table>
    </p>
</div>
<style type="text/css">
	tr th{
		text-align: center;
	}

</style>