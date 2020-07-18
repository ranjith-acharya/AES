$(document).ready(function(){
	$("#adminLogbtn").click(function(){
		var mail = $("#adminMailbox").val();
		var pass = $("#adminPassbox").val();
		var check = /^([a-zA-Z0-9\-\_\.]){1,}\@(admin.mes.ac.in)$/;
		if(mail==""){
			$("#adminMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#adminMailbox").focus();
			return false;
		}
		if(check.test(mail)==false){
			$("#adminMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#adminMailbox").focus();
			return false;
		}
		if(pass==""){
			$("#adminPassbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#adminPassbox").focus();
			return false;
		}
		// $.ajax({
			// url:"../php/profile/adminLog.php",
			// method:"POST",
			// data:({'adminMail':mail,'adminPass':pass}),
			// success:function(data){
				// alert("success");
			// }
		// });
	});
});
function showPass(){
	if(document.getElementById("adminPasscheck").checked){
		document.getElementById("adminPassbox").setAttribute('type','text');
	}else{
		document.getElementById("adminPassbox").setAttribute('type','password');
	}
}
$(document).ready(function(){
	$("#adminForgotBtn").click(function(){
		var forgotMail = $("#adminForgotMailbox").val();
		var checkForgotMail = /^([a-zA-Z0-9\-\_\.]){1,}\@(admin.mes.ac.in)$/;
		if(forgotMail==""){
			$("#adminForgotMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#adminForgotMailbox").focus();
			return false;
		}
		if(checkForgotMail.test(forgotMail)==false){
			$("#adminForgotMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#adminForgotMailbox").focus();
			return false;
		}
	});
});