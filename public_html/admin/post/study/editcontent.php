<?php 
	include "../../../../adminlibrary/phplib.php";
	$smid =  $_POST['smid'];
	$sql = "select * from s_material where smid = '{$smid}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<h3 align="center"><?php echo $row['title']; ?></h3><br>
<form method="post" class="s_material-form">
	<input type="text" name="cid" value="<?php echo $row['cid']; ?>">
	<input type="text" name="smid" value="<?php echo $row['smid']; ?>">
	<textarea class="form-control" rows="20" name="content" idd="<?php echo $smid; ?>"><?php echo $row['content']; ?></textarea>
	<button class="btn btn-default thesubmit">Submit</button>
</form>
<script type="text/javascript">

	$(document).ready(function(){
	bindSubmit();
	function bindSubmit(){
		$(".s_material-form").submit(function(e) {
		    var url = "./post/study/s_material-form.php";
		    var smid = $("textarea").attr("idd");

		    $.ajax({
		           type: "POST",
		           url: url,
		           data: $(this).serialize(), 
		           success: function(data)
		           {
		               if (data == "success") {
		               		$.post("./post/study/editcontent.php",
		               			{smid:smid},
		               			function(data, status){
						            $('.s_material-content').html(data);
						            bindSubmit();
								});
								// $(".s_material-content").html(data);

		               }
		           }
		         });

		    e.preventDefault(); 
		});
	}

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
</script>
<style type="text/css">
	input{
		display: none;
	}
</style>