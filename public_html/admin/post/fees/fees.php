<?php 
	include_once "../../../../adminlibrary/phplib.php";
	$sql = "select * from r_student";
	$result = $conn->query($sql);
	

?>
<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<th>Mobile</th>
		<th>Fees</th>
		<th>Submission Date</th>
	</tr>
	<?php 
		while($row = $result->fetch_assoc()){

			$s_mobile = $row['s_mobile'];
			echo "<tr>
						<td>{$row["s_name"]}</td>
						<td>{$row["s_mobile"]}</td>
						<td>{$row["thefees"]}
								<form method='post' class='fees-form'>
									<input type='text' value='thefees' name='check' style='display:none;'>
									<input type='text' value='{$s_mobile}' name='s_mobile' style='display:none;'>
									<input type='text' name='thefees'>
									<input type='submit' name='fee-update' class='btn btn-default'>
								</form>
						</td>
						
						<td>{$row["s_date"]}

							<form method='post' class='fees-form'>
								<input type='text' value='{$s_mobile}' name='s_mobile' style='display:none;'>
								<input type='text' value='s_date' name='check' style='display:none;'>
								<select name='year'>
									<option value='-12'>Year</option>
									<option value='2016'>2016</option>
									<option value='2017'>2017</option>
									<option value='2018'>2018</option>
									<option value='2019'>2019</option>
									<option value='2020'>2020</option>
								</select>
								<select name='month'>
									<option value='0'>Month</option>
									<option value='1'>JAN</option>
									<option value='2'>FEB</option>
									<option value='3'>MAR</option>
									<option value='4'>APR</option>
									<option value='5'>MAY</option>
									<option value='6'>JUNE</option>
									<option value='7'>JULY</option>
									<option value='8'>AUG</option>
									<option value='9'>SEPT</option>
									<option value='10'>OCT</option>
									<option value='11'>NOV</option>
									<option value='12'>DEC</option>
								</select>
								<select name='day'>
									<option value='0'>Day</option>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
									<option value='6'>6</option>
									<option value='7'>7</option>
									<option value='8'>8</option>
									<option value='9'>9</option>
									<option value='10'>10</option>
									<option value='11'>11</option>
									<option value='12'>12</option>
									<option value='13'>13</option>
									<option value='14'>14</option>
									<option value='15'>15</option>
									<option value='16'>16</option>
									<option value='17'>17</option>
									<option value='18'>18</option>
									<option value='19'>19</option>
									<option value='20'>20</option>
									<option value='21'>21</option>
									<option value='22'>22</option>
									<option value='23'>23</option>
									<option value='24'>24</option>
									<option value='25'>25</option>
									<option value='26'>26</option>
									<option value='27'>27</option>
									<option value='28'>28</option>
									<option value='29'>29</option>
									<option value='30'>30</option>
									<option value='31'>31</option>
								</select>
								
								
								<input type='submit' name='s_date-form' class='btn btn-default' value='Update'>
							</form>


						";

			
						echo "</td>
					</tr>";
		}
	?>

</table>

<script type="text/javascript">
	$(document).ready(function(){		
		$(".fees-form").submit(function(e) {
		    var url = "./post/fees/fees-form.php"; 

		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $(this).serialize(), 
		           success: function(data)
		           {
		            	if (data == "success") {              		
		               		$.post("./post/fees/fees.php", function(data, status){
						            $('.fees-content').html(data);
						        });
						}
		           }
		         });
		    e.preventDefault(); 
		});
	});
</script>
<style type="text/css">
	select{
		height: 30px;
	}
</style>