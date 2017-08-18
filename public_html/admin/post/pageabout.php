<?php
	include_once "../../../adminlibrary/phplib.php";
	$sql = "SELECT * FROM pages where pid = 'about-rvs'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>
<h3 align="center">About RVS Institute</h3>
<form method="post" class="about-rvs-form">
	<input type="text" name="pid" value="about-rvs" style="display: none;">
	<span class="form-group" style="display: none;">
		<label>Title</label>
		<input type="text" name="title" class="form-control" placeholder="Title of the page" value="<?php echo $row['title'];?>">
	</span>
	<textarea name="content" class="form-control" rows="20" placeholder="Content of the page. Here You can use the html tags and css to style and modify the page"><?php echo $row['content'];?></textarea>
	<input type="submit" name="submit" value="submit" class="btn btn-default about-rvs-form submit">
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

