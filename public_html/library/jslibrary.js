$(document).ready(function(){

	function objectifyForm(formArray) {//serialize data function
      var returnArray = {};
		          for (var i = 0; i < formArray.length; i++){
			            returnArray[formArray[i]['name']] = formArray[i]['value'];
		          }
	          return returnArray;
	        }

	$(document).ajaxStart(function(){
   	 	$("#logoutt").html("Logging out ...");
   	 	$("#menu_login_submit").html("Logging in ..")
	});
	$(document).ajaxComplete(function(){
    	$("#logoutt").html("Log out");
   	 	$("#menu_login_submit").html("Log in")
	});

	var send = "";
	$("#logoutt").click(function(){
        $.post("logout.php",send,function(data1,status){
        	if (data1 == "success") {
        		location.reload();
        	}
        });
	});

	$("#menu_login_submit").click(function(){
		var data = $("#menu_login").serializeArray();
		function objectifyForm(formArray) {//serialize data function
	          var returnArray = {};
	          for (var i = 0; i < formArray.length; i++){
		            returnArray[formArray[i]['name']] = formArray[i]['value'];
	          }
          return returnArray;
        }
        var send = objectifyForm(data);
        $.post("logincontrol.php",send,function(data1,status){
        	if (data1 == "success") {
        		location.reload();
        	}else{
        		$("#menuerror").css("display", "block");
        		$("#menuerror").html(data1);
        	}
        });
	});
	
});