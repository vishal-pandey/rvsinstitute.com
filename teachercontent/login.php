<div class="col-sm-12">
  <h3 align="center">Welcome Teacher</h3>
  <div class="well col-sm-6" style="float: initial; margin-left: auto; margin-right: auto;">
    <form method="post">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" name="t_uid" placeholder="User Id" required="true">
      </div>
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="t_pwd" placeholder="Password" required="true">
      </div>
      <br>
      <div class="input-group col-sm-12" style="text-align: center;">
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
      </div>
    </form>
  </div>
  <div class="col-sm-12 error" style="text-align: center; display: none; color: red;">
      Wrong Credentials
  </div>
</div>
<?php
    
    
    $server = "localhost";
  $user = "root";
  $pwd = "12345";
  $db = "rvsinstitute_data";

  $conn = new mysqli($server, $user, $pwd, $db);


    if (isset($_POST['submit'])) {
        $t_uid = $_POST['t_uid'];
        $t_pwd = $_POST['t_pwd'];
        $sql = "select * from teacher where t_uid = '{$t_uid}' and t_pwd = '{$t_pwd}'";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result)>0){
          $row = $result->fetch_assoc();
          if ($row['t_uid'] != "") {
            $_SESSION['t_uid'] = $row['t_uid'];
            $_SESSION['t_name'] = $row['t_name'];
            echo '<script type="text/javascript">location.reload();</script>';
          }
        }
        else{
            $_SESSION['error'] = "Wrong Credentials";
            echo '<script type="text/javascript">$(document).ready(function(){$(".error").css("display","block");});</script>';
        }
    }
?>