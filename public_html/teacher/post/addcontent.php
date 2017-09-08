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
<?php
	include_once "../../../adminlibrary/phplib.php";
	$sql = "select id,title from notice order by id";
	$result = $conn->query($sql);
	if(isset($_GET['notice-title'])){
		$sql = "";
	}
?>
<section class="notice-container">
	<h3 align="center">Add Notice Content</h3>
	<section class="notice-menu col-sm-2">
		<h4 align="center">Select Notice<hr></h4>

		<?php
			while($row = $result->fetch_assoc()){
				echo "<button class='btn-default btn notice-select' id=' {$row['id']}'>".$row['title']."</button>";
			}
		?>
	</section>
	<section class="col-sm-10 edit-notice-content">

		
	</section>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$('.notice-select').click(function(){
			$(".edit-notice-content > div").css("display","none");
			$(".notice-select").css("background","initial");
			$(this).css("background","lightgrey");
			var abc = $(this).attr("id");
		    $.post("./post/thenotice.php",
		    {
		        id: abc
		    },
		    function(data, status){
		        $(".edit-notice-content").html(data);
		    });
		});
	});
</script>
</style>
<style type="text/css">
	.notice-container{
		
		/*height: 85vh;*/
		margin: 0;
	}
	.edit-notice-content , .notice-menu{
		border: 1px solid lightgrey;
		height: 85vh;
	}
	.notice-menu{
		border-right: none;
		overflow: auto;
	}

	.notice-menu button{
		min-width: 100%;
	}
	.notice-title{
		text-align: center;
		font-size: 20px;
		display: block;
		/*margin-bottom: 0;*/
		padding-bottom: 0;
	}
</style>