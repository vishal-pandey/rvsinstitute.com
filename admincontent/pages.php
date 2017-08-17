<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    
    <button class="btn btn-default col-sm-12" id="about-rvs">About RVS Institute</button>
    
    <button class="btn btn-default col-sm-12" id="from-md">From the MD's Pen</button>
    <button class="btn btn-default col-sm-12" id="our-mission">Our Mission And Vision</button>
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
    	$.post("./post/pageabout.php", function(data, status){
            $('.about-rvs').html(data);
            bindSubmit();
        });
        $.post("./post/pagefrommd.php", function(data, status){
            $('.from-md').html(data);
            bindSubmit();
        });
        $.post("./post/pageourmission.php", function(data, status){
            $('.our-mission').html(data);
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
		
		function bindSubmit(){
			$('.about-rvs').ready(function(){
				$(".about-rvs-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 
				    $('textarea').froalaEditor();
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
		}
	});
</script>
<style type="text/css">
	h3{
		margin: 0;
	}
	div.about-rvs , div.from-md, div.our-mission{
		display: none;
	}
</style>