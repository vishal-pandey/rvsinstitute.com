<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RVS Institute</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li class="students"><a href="?link=students">Student</a></li>
      <li><a href="#">Schedule</a></li>
      <li><a href="#">Downloads</a></li>
      <li><a href="#">Videos</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('.<?php echo $_GET["link"]; ?>').addClass('active');
    });

</script>