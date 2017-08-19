<div class="side-menu col-sm-2">
    <h3 align="center">Menu</h3>
    <br>
    <button class="btn btn-default col-sm-12" id="instruction">Instruction</button>
    
    <button class="btn btn-default col-sm-12" id="cbse-paper">CBSE Sample Papers</button>

    <button class="btn btn-default col-sm-12" id="rvs-paper">RVS Practice Paper</button>

    <button class="btn btn-default col-sm-12" id="imp-question">Important Questions</button>
    
    
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
	<div class="cbse-paper">
		<h3 align="center">CBSE Sample Paper</h3>
		<div class="cbse-paper-content"></div>
	</div>

	<div class="rvs-paper">
		<h3 align="center">RVS Practice Paper</h3>
		<div class="rvs-paper-content"></div>
	</div>

	<div class="imp-question">
		<h3 align="center">Important Question Paper</h3>
		<div class="imp-question-content"></div>
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
    	$.post("./post/cbse-paper.php", function(data, status){
            $('.cbse-paper-content').html(data);
            bindSubmit();
        });
        $.post("./post/imp-question.php", function(data, status){
            $('.imp-question-content').html(data);
            bindSubmit();
        });
        $.post("./post/rvs-paper.php", function(data, status){
            $('.rvs-paper-content').html(data);
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
			$('.cbse-paper').ready(function(){
				$(".cbse-paper-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/cbse-paper.php", function(data, status){
								            $('.cbse-paper-content').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});

			$('.rvs-paper').ready(function(){
				$(".rvs-paper-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/rvs-paper.php", function(data, status){
								            $('.rvs-paper-content').html(data);
								            bindSubmit();
								        });

				               }
				           }
				         });

				    e.preventDefault(); 
				});
			});
			$('.imp-question').ready(function(){
				$(".imp-question-form").submit(function(e) {
				    var url = "./post/updatepage.php"; 

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               if (data == "success") {
				               		$.post("./post/imp-question.php", function(data, status){
								            $('.imp-question-content').html(data);
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
	div.rvs-paper, div.cbse-paper, div.imp-question{
		display: none;
	}
</style>