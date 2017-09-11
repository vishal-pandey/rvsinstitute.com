<section class="well col-sm-12 contact">
	<h3 align="center">Get A Call Back</h3>
	<div class="call-back col-sm-6">
	<form method="post" class="contact-form">
		<input type="text" name="callback" value="yes" style="display: none;">
		<input type="text" name="name" class="form-control" placeholder="Name *" required="true">
		<input type="text" name="phone" class="form-control" placeholder="10 digit mobile no. *" required="true">
		<textarea class="form-control" placeholder="Query" name="query" rows="15"></textarea><br>
		<center><button class="btn btn-success">Submit</button></center>

	</form>
	</div>
</section>


<script type="text/javascript">
$(".contact-form").submit(function(e) {
    var url = "./post/contact-form.php"; 

    $.ajax({
           type: "POST",
           url: url,
           data: $(this).serialize(), 
           success: function(data)
           {
               if (data == "success") {
               	window.location.href="./thankyou.php"
               }
           }
         });

    e.preventDefault(); 
});
</script>