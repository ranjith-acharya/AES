$(document).ready(function(){
	$("#studentDataSubmit").click(function(){
		var addmission = $("#addmissionbox").val();
		var fname = $("#fnamebox").val();
		var lname = $("#lnamebox").val();
		var mail = $("#mailbox").val();
		var pass = $("#passbox").val();
		var address = $("#addrbox").val();
		var birth = $("#birthbox").val();
		var number = $("#contactbox").val();
		var branch = $("#branchbox").val();
		var gender = $("#genderbox").val();
		var file = $("#avatarbox").val();
		var check = /^([a-zA-Z0-9\-\_\.]){1,}\@(student.mes.ac.in)$/;
		if(addmission==""){
			$("#addmissionbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#addmissionbox").focus();
			return false;
		}
		if(fname==""){
			$("#fnamebox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#fnamebox").focus();
			return false;
		}
		if(lname==""){
			$("#lnamebox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#lnamebox").focus();
			return false;
		}
		if(mail==""){
			$("#mailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mailbox").focus();
			return false;
		}
		if(check.test(mail)==false){
			$("#mailbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mailbox").focus();
			return false;
		}
		if(pass==""){
			$("#passbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#passbox").focus();
			return false;
		}
		if(address==""){
			$("#addrbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#addrbox").focus();
			return false;
		}
		if(birth==""){
			$("#birthbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#birthbox").focus();
			return false;
		}
		if(number==""){
			$("#contactbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#contactbox").focus();
			return false;
		}
		if(branch==""){
			$("#branchbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#branchbox").focus();
			return false;
		}
		if(gender==""){
			$("#genderbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#genderbox").focus();
			return false;
		}
		if(file==""){
			$("#avatarbox").css({"borderColor":"#cd201f","transition":".5s"});
			$("#avatarbox").focus();
			return false;
		}
	});
});