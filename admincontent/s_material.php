<div class="side-menu col-sm-2">
    <h3 align="center">Courses</h3>
    <br>
	<?php 
		$sql = "select * from course";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo '<button class="btn btn-default col-sm-12 course-btn" id="'.$row['CourseID'].'" >'.$row['Course_Name']."</button>";
		}
	?>
    
</div>
<div class="main-content col-sm-10 well">
	<section class="s_material-content col-sm-9">
		<h3 align="center">Instructions</h3>
		<ol>
			<li>There would be the instructions</li>
		</ol>
	</section>
	<section class="col-sm-2 pull-right right-menu"><h3 align="center">Content</h3><section class="rmcont"></section></section>
	

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
       	 	nero();
    	});

		$('button').click(function(){
			$(".main-content div").css("display","none");
			$(".side-menu button").css("background","initial");
			$(this).css("background","lightgrey");
		});


		$(".course-btn").click(function(){
			var course_id = $(this).attr("id");
			$.post("./post/study/doc_list.php",
			{
				cid : course_id
			},
			function(data, status){
				// alert("Data: " + data + "\nStatus: " + status);
				$(".rmcont").html(data);
				$.post("./post/study/add-content.php",
				{
					cid:course_id
				},
				function(data){
					$(".s_material-content").html(data);
				});
			});
		});
	


	});

	 function nero(){
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
    }

</script>
<style type="text/css">
	h3{
		margin: 0;
	}
	.right-menu{
		border-left: 1px solid lightgrey;
		height: 100%;
		width: 20%;
		right: 0;
		top: 0;
		position: absolute;
		overflow: auto;
		padding-bottom: 150px;

	}

	.right-menu button{
		border: none;
		margin: 1px;
	}


	.main-content{
		padding-right: 0;
		padding-top: 0;
	}
	.s_material-content{
		height: 100%;
		overflow: auto;
		padding-top: 15px;
		padding-bottom: 150px;
	}
	.right-menu h3{
		color: grey;
		border-bottom: 1px solid lightgrey;
		padding: 10px;
		padding-bottom: 10px;
		margin-bottom: 15px;
		font-size: 20px;
	}
	.side-menu{
		padding-bottom: 150px;
	}
</style>