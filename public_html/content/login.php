<?php
  include_once("./library/library.php");
  session_start();

    include_once("./library/library.php");
    if (isset($_SESSION['autologincheck'])) {

    }else{
      $user3 = new user();
      $user3->autoLoginCheck();
      $_SESSION['autologincheck']="set";
    }

?>
<?php
  $user1 = new user();

  if($user1->loginCheck()){

    $userdata = new profile();
    $profile = $userdata->getUser($_SESSION['user1']);

    $arr = explode(' ', trim($profile['s_name']));
    
    if(strlen($arr[0]) > 3 ){
      $name = $arr[0];
    }else{
      $name = $arr[0]." ".$arr[1];
    }

    $login_link = '
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi '.$name.'
    <b class="caret"></b></a>
    <ul class="dropdown-menu my-account">
        <li>
            <div class="my-account-content">
                <div class="row">
                    <div class="col-md-5">
                        <img src="./profile/'.$profile['s_mobile'].'.jpg?'.time().'"
                            alt="Profile Pic" class="img-responsive" />
                        <p class="text-center small">
                            <a href="./student.php?link=profilepic">Change Photo</a></p>
                    </div>
                    <div class="col-md-7">
                        <span>'.$profile['s_name'].'</span>
                        <p class="text-muted small">
                            '.$_SESSION['user1'].'</p>
                        <div class="divider">
                        </div>
                        <a href="./student.php" class="btn btn-primary btn-sm active">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="my-account-footer">
                <div class="my-account-footer-content">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="./student.php?link=changepassword" class="btn btn-default btn-sm">Change Passowrd</a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-default btn-sm pull-right" id="logoutt">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
    ';
  } else {
    $login_link = '
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><b><i class="fa fa-user" aria-hidden="true"></i> Login</b> <span class="caret"></span></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="rvs-content">
<form method="post" id="menu_login">
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile no. <i class="fa fa-user-o" aria-hidden="true"></i></label>
    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="10 Digit Mobile No." name="mobile">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password <i class="fa fa-key" aria-hidden="true"></i></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="autologincheck"> Keep me logged in.
    </label>
  </div>
</form>
  <button type="submit" class="btn btn-success" id="menu_login_submit">Log In</button>
  <a href="./signup.php"><button class="btn btn-primary">Sign Up</button></a>

  <div id="menuerror" class="well" style="display:none;"></div>
                    </div>
                  </li>
                </ul>
              </li>
    ';
  }
?>