<?php
	include_once "../../../adminlibrary/phplib.php";
	$sql = "SELECT * FROM pages where pid = 'result'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<form method="post" class="result-form">
	<input type="text" name="pid" value="result" style="display: none;">
	<input type="text" name="title" class="form-control" placeholder="Title of the page" value="Home Work" style="display: none;">
	<textarea name="content" class="form-control" rows="20"><?php echo $row['content'];?></textarea>
	<input type="submit" name="submit" value="submit" class="btn btn-default">
</form>
<script type="text/javascript">
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
