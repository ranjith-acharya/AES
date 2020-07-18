$(document).ready(function(){
	$("#staffDataSubmit").click(function(){
		var username = $("#usernamebox").val();
		var fname  = $("#fnamebox").val();
		var lname = $("#lnamebox").val();
		var mail = $("#mailbox").val();
		var pass = $("#passbox").val();
		var address = $("#addrbox").val();
		var birth = $("#birthbox").val();
		var contact = $("#contactbox").val();
		var branch = $("#branchbox").val();
		var gender = $("#genderbox").val();
		var avatar = $("#avatarbox").val();
		var check = /^([a-zA-Z0-9\.\-\_]){1,}\@(staff.mes.ac.in)$/;
		if(username==""){
			$("#usernamebox").css({"border-color":"#cd201f","transition":".5s"});
			$("#usernamebox").focus();
			return false;
		}if(fname==""){
			$("#fnamebox").css({"border-color":"#cd201f","transition":".5s"});
			$("#fnamebox").focus();
			return false;
		}if(lname==""){
			$("#lnamebox").css({"border-color":"#cd201f","transition":".5s"});
			$("#lnamebox").focus();
			return false;
		}if(mail==""){
			$("#mailbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#mailbox").focus();
			return false;
		}if(check.test(mail)==false){
			$("#mailbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#mailbox").focus();
			return false;
		}if(pass==""){
			$("#passbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#passbox").focus();
			return false;
		}if(address==""){
			$("#addrbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#addrbox").focus();
			return false;
		}if(birth==""){
			$("#birthbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#birthbox").focus();
			return false;
		}if(contact==""){
			$("#contactbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#contactbox").focus();
			return false;
		}if(branch==""){
			$("#branchbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#branchbox").focus();
			return false;
		}if(gender==""){
			$("#genderbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#genderbox").focus();
			return false;
		}if(avatar==""){
			$("#avatarbox").css({"border-color":"#cd201f","transition":".5s"});
			$("#avatarbox").focus();
			return false;
		}
	});
});