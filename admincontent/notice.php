<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    
    <button class="btn btn-default col-sm-12" id="addnotice">Add Notice</button>
    <button class="btn btn-default col-sm-12" id="addcontent">Add Content</button>
    
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
	<div class="addnotice">
	</div>
	<div class="addcontent">
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
    	$.post("./post/addnotice.php", function(data, status){
            $('.addnotice').html(data);
            bindSubmit();
        });
        $.post("./post/addcontent.php", function(data, status){
            $('.addcontent').html(data);
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
			$('.addnotice').ready(function(){
				$(".addnotice-form").submit(function(e) {
				    var url = "./post/addnotice-form.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/addnotice.php", function(data, status){
								            $('.addnotice').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault();
				});
			});

			$('.addcontent').ready(function(){
				$(".addcontent-form").submit(function(e) {
				    var url = "./post/addcontent-form.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/addcontent.php", function(data, status){
								            $('.addcontent').html(data);
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
	div.addnotice , div.addcontent{
		display: none;
	}
</style>