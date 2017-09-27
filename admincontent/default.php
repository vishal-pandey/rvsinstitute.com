<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    <button class="btn btn-default col-sm-12" id="uploads">Uploads</button>
    <button class="btn btn-default col-sm-12" id="contact">Enquiry</button>
    
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
	<div class="uploads"></div>
	<div class="contact"></div>
	
	
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
    	
        $("button#uploads").click(function(){
	        $.post("./post/files/uploads.php", function(data, status){
	            $('.uploads').html(data);
	        });
	    });

	    $("button#contact").click(function(){
	        $.post("./post/contact.php", function(data, status){
	            $('.contact').html(data);
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
		
	});
</script>
<style type="text/css">
	h3{
		margin: 0;
	}
	div.uploads{
		display: none;
	}
</style>