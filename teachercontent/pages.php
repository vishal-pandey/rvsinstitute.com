<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>

    <button class="btn btn-default col-sm-12" id="exam-date">Examination Date</button>

    <button class="btn btn-default col-sm-12" id="exam-topper">Topper Of Test</button>

    <button class="btn btn-default col-sm-12" id="exam-govt">Govt. Job Vaccancy</button>
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
	<div class="about-rvs">
	</div>

	<div class="from-md">
	</div>

	<div class="our-mission">
	</div>

	<div class="exam-date">
	</div>

	<div class="exam-topper">
	</div>

	<div class="exam-govt">
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
    	
        $("button#exam-date").click(function(){
	        $.post("./post/exam-date.php", function(data, status){
	            $('.exam-date').html(data);
	            bindSubmit();
	        });
	    });
        $("button#exam-topper").click(function(){
	        $.post("./post/exam-topper.php", function(data, status){
	            $('.exam-topper').html(data);
	            bindSubmit();
	        });
	    });
        $("button#exam-govt").click(function(){
	        $.post("./post/exam-govt.php", function(data, status){
	            $('.exam-govt').html(data);
	            bindSubmit();
	        });
	    });
		$('button').click(function(){
			$(".main-content div").css("display","none");
			$(".side-menu button").css("background","initial");
			$(this).css("background","lightgrey");
			var abc = $(this).attr("id");
			$('.'+abc).css("display","block");
			$('.'+abc+'>div').css("display","initial");
		});
		
		function bindSubmit(){
			$('.about-rvs').ready(function(){
				$(".about-rvs-form").submit(function(e) {
				    var url = "./post/updatepage.php";
				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/pageabout.php", function(data, status){
								            $('.about-rvs').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});

			$('.from-md').ready(function(){
				$(".from-md-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/pagefrommd.php", function(data, status){
								            $('.from-md').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});

			$('.our-mission').ready(function(){
				$(".our-mission-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/pageourmission.php", function(data, status){
								            $('.our-mission').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});

			$('.exam-date').ready(function(){
				$(".exam-date-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/exam-date.php", function(data, status){
								            $('.exam-date').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});

			$('.exam-topper').ready(function(){
				$(".exam-topper-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/exam-topper.php", function(data, status){
								            $('.exam-topper').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});

			$('.exam-govt').ready(function(){
				$(".exam-govt-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/exam-govt.php", function(data, status){
								            $('.exam-govt').html(data);
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
	div.about-rvs , div.from-md, div.our-mission, div.exam-date, div.exam-topper, div.exam-govt{
		display: none;
	}
</style>