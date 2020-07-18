$(document).ready(function(){
	$("#stdLogbtn").click(function(){
		var mail = $("#stdMailbox").val();
		var pass = $("#stdPassbox").val();
		var check = /^([a-zA-Z0-9\-\_\.]){1,}\@(student.mes.ac.in)$/;
		if(mail==""){
			$("#stdMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#stdMailbox").focus();
			return false;
		}
		if(check.test(mail)==false){
			$("#stdMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#stdMailbox").focus();
			return false;
		}
		if(pass==""){
			$("#stdPassbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#stdPassbox").focus();
			return false;
		}
	});
});
function showPass(){
	if(document.getElementById("stdPasscheck").checked){
		document.getElementById("stdPassbox").setAttribute('type','text');
	}else{
		document.getElementById("stdPassbox").setAttribute('type','password');
	}
}
$(document).ready(function(){
	$("#stdForgotBtn").click(function(){
		var forgotMail = $("#stdForgotMailbox").val();
		var checkForgotMail = /^([a-zA-Z0-9\-\_\.]){1,}\@(student.mes.ac.in)$/;
		if(forgotMail==""){
			$("#stdForgotMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#stdForgotMailbox").focus();
			return false;
		}
		if(checkForgotMail.test(forgotMail)==false){
			$("#stdForgotMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#stdForgotMailbox").focus();
			return false;
		}
	});
});