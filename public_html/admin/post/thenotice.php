<?php

	include_once "../../../adminlibrary/phplib.php";
	$id = $_POST['id'];

	$sql = "select * from notice where id = '{$id}'";
			$result=$conn->query($sql);

			while($row = $result->fetch_assoc()){
				echo '<h3 class="notice-title '.$row["id"].'">'.$row['title'].'</h3><hr>';
				echo '<form class="addcontent-form '.$row["id"].'" method="post">
						<input type="text" name="id" value="'.$row["id"].'" style="display:none;" name="title">
						<input type="text" name="title" value="'.$row["title"].'" style="display:none;">
						<textarea name="content" rows="15">'.$row["content"].'</textarea>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>';
			}
?>
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

	function bindSubmit(){
		$('.addcontent').ready(function(){
			$(".addcontent-form").submit(function(e) {
			    var url = "./post/addcontent-form.php"; 

			    $.ajax({
			           type: "POST",
			           url: url,
			           data: $(this).serialize(), 
			           success: function(data)
			           {
				            bindSubmit();
			           }
			         });

			    e.preventDefault();
			});
		});
	}
	bindSubmit();
</script>