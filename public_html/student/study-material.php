<h3 align="center" style="margin-top: 0px; color: green;"><u>Study Material</u></h3>
<h3 align="center"></h3>
<div class="panel-group" id="accordion">
<?php
	$sql = "select * from stu_course where s_mo = '{$profile['s_mobile']}'";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		$sql1 = "select * from s_material where cid = '{$row['c_id']}'";
		$result1 = $conn->query($sql1);
		while($row1 = $result1->fetch_assoc()){
			echo "    <div class='panel panel-default'>
					      <div class='panel-heading'>
					        <h4 class='panel-title'>
					          <a data-toggle='collapse' data-parent='#accordion' href='#{$row1['smid']}'>{$row1['title']}</a>
					        </h4>
					      </div>
					      <div id='{$row1['smid']}' class='panel-collapse collapse'>
					        <div class='panel-body'>{$row1['content']}</div>
					      </div>
					    </div>";
		}
	}
?>


</div>