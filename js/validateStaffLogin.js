$(document).ready(function(){
	$("#staffLogbtn").click(function(){
		var mail = $("#staffMailbox").val();
		var pass = $("#staffPassbox").val();
		var check = /^([a-zA-Z0-9\-\_\.]){1,}\@(staff.mes.ac.in)$/;
		if(mail==""){
			$("#staffMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#staffMailbox").focus();
			return false;
		}
		if(check.test(mail)==false){
			$("#staffMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#staffMailbox").focus();
			return false;
		}
		if(pass==""){
			$("#staffPassbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#staffPassbox").focus();
			return false;
		}
	});
});
function showPass(){
	if(document.getElementById("staffPasscheck").checked){
		document.getElementById("staffPassbox").setAttribute('type','text');
	}else{
		document.getElementById("staffPassbox").setAttribute('type','password');
	}
}
$(document).ready(function(){
	$("#staffForgotBtn").click(function(){
		var forgotMail = $("#staffForgotMailbox").val();
		var checkForgotMail = /^([a-zA-Z0-9\-\_\.]){1,}\@(staff.mes.ac.in)$/;
		if(forgotMail==""){
			$("#staffForgotMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#staffForgotMailbox").focus();
			return false;
		}
		if(checkForgotMail.test(forgotMail)==false){
			$("#staffForgotMailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#staffForgotMailbox").focus();
			return false;
		}
	});
});