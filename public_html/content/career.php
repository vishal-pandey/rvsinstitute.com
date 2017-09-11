<section class="well col-sm-12 contact">
	<h3 align="center">Career<br><small>Enter Your Resume Here</small></h3>
	<div class="call-back col-sm-8">
	<form method="post" class="contact-form">
		<input type="text" name="callback" value="car" style="display: none;">
		<input type="text" name="name" class="form-control" placeholder="Name *" required="true" />
		<input type="text" name="phone" class="form-control" placeholder="10 digit mobile no. *" required="true" />
		<textarea name="query" rows="15"></textarea><br>
		<center><input type="submit" name="submit" class="btn btn-success"></center>

	</form>
	</div>
</section>


<script type="text/javascript">
$(document).ready(function(){


  $(".contact-form").submit(function(e) {
      var url = "./post/contact-form.php"; 
      e.preventDefault(); 

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

  });
  tinymce.init({
  selector: "textarea",
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
    ],
    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    toolbar2: 'print preview media | forecolor backcolor emoticons',
    image_advtab: true,
    templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'
    ]
    });

});
</script>