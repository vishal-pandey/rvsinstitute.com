<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    <button class="btn btn-default col-sm-12" id="registered">Registered Students</button>
    <button class="btn btn-default col-sm-12" id="course">Add Courses</button>
</div>
<div class="main-content col-sm-10 well">
	<div class="instruction">
		<h3 align="center">Instructions</h3>
		<p>
			<ol>
				<li>This is the section of the admin panel where you would manage everything related to students.</li>
				<li>Select the menu item from the left to manage</li>
			</ol>
		</p>
	</div>
	<div class="registered">
		<h3 align="center">List Of Registered Students</h3>
		<div class="student-table">
		</div>
	</div>
	<div class="course">
		<h3 align="center">Add Courses</h3>
	</div>
	<span class="status">
	</span>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).ajaxStart(function(){
       	 	$(".status").html("Processing ...");
       	 	$(".status").css("display","block");
    	});
    	$(document).ajaxComplete(function(){
        	$(".status").html("Done");
       	 	$(".status").css("display","none");
    	});
		$.post("./post/studenttable.php", function(data, status){
            $('.student-table').html(data);
            bindSubmit();
        });
		$('button').click(function(){
			$(".main-content div").css("display","none");
			$(".side-menu button").css("background","initial");
			$(this).css("background","lightgrey");
			var abc = $(this).attr("id");
			$('.'+abc).css("display","block");
			$('.'+abc+'>div').css("display","block");
		});
		$('.addregno').click(function(){
			var number = $(this).attr("id");
			var data = '<form method="post" id="theForm" action="./post/addregno.php"><input type="text" name="mobile" value="'+number+'" style="display:none;"><input type="text" name="s_regno"><input type = "submit" class="btn btn-default" value="submit" id="regnosubmit"></form>';
			$(this).popover({title: "Enter Regno", content: data, html: true, placement: "left", animation: false});
			

		});
		$('.addregno').click();


		function bindSubmit(){
			$('.student-table').ready(function(){
				$(".theForm").submit(function(e) {
				    var url = "./post/addregno.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/studenttable.php", function(data, status){
								            $('.student-table').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});

			});
		}
	});
</script>
<style type="text/css">
	h3{
		margin: 0;
	}
	div.registered , div.course{
		display: none;
	}
</style>