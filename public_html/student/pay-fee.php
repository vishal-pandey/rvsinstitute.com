<?php
  // Merchant key here as provided by Payu
  $MERCHANT_KEY = "6pMfWvVd";

  // Merchant Salt as provided by Payu
  $SALT = "oODEI1ljcq";

  // End point - change to https://secure.payu.in for LIVE mode
  $PAYU_BASE_URL = "https://secure.payu.in";

  $action = '';

  $posted = array();
  if(!empty($_POST)) {
      //print_r($_POST);
    foreach($_POST as $key => $value) {    
      $posted[$key] = $value; 
  	
    }
  }

  $formError = 0;

  if(empty($posted['txnid'])) {
    // Generate random transaction id
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
  } else {
    $txnid = $posted['txnid'];
  }
  $hash = '';
  // Hash Sequence
  $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
  if(empty($posted['hash']) && sizeof($posted) > 0) {
    if(
            empty($posted['key'])
            || empty($posted['txnid'])
            || empty($posted['amount'])
            || empty($posted['firstname'])
            || empty($posted['email'])
            || empty($posted['phone'])
            || empty($posted['productinfo'])
            || empty($posted['surl'])
            || empty($posted['furl'])
  		  || empty($posted['service_provider'])
    ) {
      $formError = 1;
    } else {
      //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  	$hashVarsSeq = explode('|', $hashSequence);
      $hash_string = '';	
  	foreach($hashVarsSeq as $hash_var) {
        $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
        $hash_string .= '|';
      }

      $hash_string .= $SALT;


      $hash = strtolower(hash('sha512', $hash_string));
      $action = $PAYU_BASE_URL . '/_payment';
    }
  } elseif(!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
  }
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		submitPayuForm();
  	});
  </script>
  </head>
  <body onload="submitPayuForm()">
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      
          <input name="amount" type="hidden" value="<?php echo $profile['thefees'];?>" />

          <input name="firstname" id="firstname"  type="hidden" value="<?php echo $profile['s_name'];?>" />
        
        

          <input name="email" id="email" type="hidden" value="<?php echo $profile['s_email'];?>" />

          <input name="phone" type="hidden" value="<?php echo $profile['s_mobile'];?>" />
        
        

          <textarea name="productinfo" style="display: none;">Payment of Academic Fee of Rs <?php echo $profile['thefees']; ?>  for <?php echo $profile['s_name']; ?> </textarea>
        
        
          <input name="surl" type="hidden" value="http://www.rvsinstitute.com/test/pay/success.php" size="64" />
        
        
          <input name="furl" type="hidden" value="http://www.rvsinstitute.com/test/pay/failure.php" size="64" />
        

        
          <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
        

        
          <?php if(!$hash) { ?>
            <center><input type="submit" class="btn btn-primary" value="Pay Fees <?php echo $profile['thefees'];?> Rs" />
          <?php } ?></center>
    </form>
  </body>
</html>