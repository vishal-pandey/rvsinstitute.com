<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    
    <button class="btn btn-default col-sm-12" id="home-work">Home Work</button>
    <button class="btn btn-default col-sm-12" id="student-video">Student Videos</button>
    <button class="btn btn-default col-sm-12" id="result">Results</button>
</div>
<div class="main-content col-sm-10 well">
	<div class="instruction">
		<h3 align="center">Instructions</h3>
		<p>
			<ol>
				<li>This is the section of the admin panel where you would manage everything related to students.</li>
				<li>Select the menu item from the left to manage</li>
				<li>Course Code Must Be 5 digits in length</li>
			</ol>
		</p>
	</div>
	
	
	
	<div class="home-work">
		<h3 align="center">Home Work</h3>
		<div class="home-work-content"></div>
	</div>
	<div class="student-video">
		<h3 align="center">Student Videos</h3>
		<div class="student-video-content"></div>
	</div>
	<div class="result">
		<h3 align="center">Examination Result</h3>
		<div class="result-content"></div>
	</div>
	<div class="fees">
		<h3 align="center">Fees</h3>
		<div class="fees-content"></div>
	</div>
	<div class="collect-fees">
		<h3 align="center">Collect Fees</h3>
		<div class="collect-fees-content"></div>
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
    	
        $("button#home-work").click(function(){
	        $.post("./post/home-work.php", function(data, status){
	            $('.home-work-content').html(data);
	            bindSubmit();
	        });
    	});
    	$("button#student-video").click(function(){
	        $.post("./post/student-video.php", function(data, status){
	            $('.student-video-content').html(data);
	            bindSubmit();
	        });
	    });
    	$("button#result").click(function(){
	        $.post("./post/result.php", function(data, status){
	            $('.result-content').html(data);
	            bindSubmit();
	        });
    	});
    	$("button#course").click(function(){
	        $.post("./post/coursetable.php", function(data, status){
	            $('.course-table').html(data);
	            bindSubmit();
	        });
	    });
        $("button#assign").click(function(){
        	$.post("./post/assign-course.php", function(data, status){
           		$('.assign-course').html(data);
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
			$('.course-table').ready(function(){
				$(".courseform").submit(function(e) {
				    var url = "./post/addcourse.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		
				               		$.post("./post/coursetable.php", function(data, status){
								            $('.course-table').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});
			$('.home-work').ready(function(){
				$(".home-work-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		
				               		$.post("./post/home-work.php", function(data, status){
								            $('.home-work-content').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });
				    e.preventDefault(); 
				});
			});
			$('.assign').ready(function(){
				$(".assign-course-form").submit(function(e) {
				    var url = "./post/assign-course-form.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/assign-course.php", function(data, status){
								            $('.assign-course').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });
				    e.preventDefault(); 
				});
			});
			$('.student-video').ready(function(){
				$(".student-video-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		
				               		$.post("./post/student-video.php", function(data, status){
								            $('.student-video-content').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });
				    e.preventDefault(); 
				});
			});
			$('.result').ready(function(){
				$(".result-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		
				               		$.post("./post/result.php", function(data, status){
								            $('.result-content').html(data);
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
	div.registered , div.course , div.assign , div.home-work, div.student-video , div.result , div.fees, div.collect-fees{
		display: none;
	}
</style>