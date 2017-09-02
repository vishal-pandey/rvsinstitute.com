<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    
    <button class="btn btn-default col-sm-12" id="academic">Academic Schedules</button>

    <button class="btn btn-default col-sm-12" id="other-schedule">Other Schedules</button>

    <button class="btn btn-default col-sm-12" id="upcoming-batches">Upcoming Batches</button>
    
    
</div>
<div class="main-content col-sm-10 well">
	<div class="instruction">
		<h3 align="center">Instructions</h3>
		<p>
			<ol>
				<li>Select the page from the side menu to edit.</li>
				<li>Enter the title and content of the page and enter submit to update the page.</li>
			</ol>
		</p>
	</div>
	<div class="academic">
	</div>

	<div class="other-schedule">
		<h3 align="center">Other Schedule</h3>
		<div class="other-schedule-content"></div>
	</div>

	<div class="upcoming-batches">
		<h3 align="center">Upcoming Batches</h3>
		<div class="upcoming-batches-content"></div>
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
    	$("button#academic").click(function(){
	    	$.post("./post/scheduleacademic.php", function(data, status){
	            $('.academic').html(data);
	            bindSubmit();
	        });
	    });
    	$("button#other-schedule").click(function(){
	        $.post("./post/scheduleother.php", function(data, status){
	            $('.other-schedule-content').html(data);
	            bindSubmit();
	        });
	    });
    	$("button#upcoming-batches").click(function(){
	        $.post("./post/upcoming-batches.php", function(data, status){
	            $('.upcoming-batches-content').html(data);
	            bindSubmit();
	        });
	    });
        	
		$('button').click(function(){
			$(".main-content div").css("display","none");
			$(".side-menu button").css("background","initial");
			$(this).css("background","lightgrey");
			var abc = $(this).attr("id");
			$('.'+abc).css("display","block");
			$('.'+abc+'>div').css("display","block");
		});
		
		function bindSubmit(){
			$('.academic').ready(function(){
				$(".academic-form").submit(function(e) {
				    var url = "./post/academic-form.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/scheduleacademic.php", function(data, status){
								            $('.academic').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});

			$('.other-schedule').ready(function(){
				$(".other-schedule-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/scheduleother.php", function(data, status){
								            $('.other-schedule-content').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});
			$('.upcoming-batches').ready(function(){
				$(".upcoming-batches-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/upcoming-batches.php", function(data, status){
								            $('.upcoming-batches-content').html(data);
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
	div.academic, div.other-schedule, div.upcoming-batches{
		display: none;
	}
</style>