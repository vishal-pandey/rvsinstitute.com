<?php
?>
<div class="fee">
	<h3 align="center" style="margin-top: 0px; color: green;"><u>Fee Details</u></h3>
	<div class="well col-sm-12">
		<b>Monthly Fee : <span class="s-fee" style="color: green"><?php echo $profile['thefees']; ?></span></b>
		<b class="pull-right">Due Date : <span class="s-due"><?php echo $profile['s_date'] ?></span></b>
	</div>
	<div class="well col-sm-12">
		<b>Fees Due : <span class="s-fee" style="color: green"><?php echo $profile['f_due']; ?></span> (Due fees can be submitted on center only) </b>		
	</div>
	<h4 align="center" style="margin-top: 0px; color: green;">Payment History</h4>

	<?php
		$sql = "select * from fees where s_mo = '{$profile['s_mobile']}'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "
					<div class='well col-sm-12'>
						<b>Date Of Payment : </b><span>{$row["p_date"]}</span><br>
						<b>Fee Paid : </b><span>{$row["f_paid"]}</span><br>
						<b>Mode Of Payment : </b><span>{$row["mode"]}</span><br>
						<b>Reference No : </b><span>{$row["ref"]}</span>
					</div>
			";
		}
	?>
	
</div>