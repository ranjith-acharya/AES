$(document).ready(function(){
	$("#btnSubmitSem5").click(function(){
		var addmission = $("#std_Addmission").val();
		var bcePracs = $("#bcePractical").val();
		var cnExtern = $("#cnExternal").val();
		var cnIntern = $("#cnInternal").val();
		var cnPracs = $("#cnPractical").val();
		var dbmsExtern = $("#dbmsExternal").val();
		var dbmsIntern = $("#dbmsInternal").val();
		var dbmsPracs = $("#dbmsPractical").val();
		var mpExtern = $("#mpExternal").val();
		var mpIntern = $("#mpInternal").val();
		var mpPracs = $("#mpPractical").val();
		var mmExtern = $("#mmExternal").val();
		var mmIntern = $("#mmInternal").val();
		//var mmPracs = $("#mmPractical").val();
		var tcsExtern = $("#tcsExternal").val();
		var tcsIntern = $("#tcsInternal").val();
		//var tcsPracs = $("#tcsPractical").val();
		var wtPracs = $("#wtPractical").val();
		if(addmission==""){
			$("#std_Addmission").css({"borderColor":"#cd201f","transition":".5s"});
			$("#std_Addmission").focus();
			return false;
		}if(bcePracs==""){
			$("#bcePractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#bcePractical").focus();
			return false;
		}if($("#bcePractical").val() > 25){
			$("#bcePractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#bcePractical").focus();
			return false;
		}if(cnExtern==""){
			$("#cnExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#cnExternal").focus();
			return false;
		}if($("#cnExternal").val() > 80){
			$("#cnExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#cnExternal").focus();
			return false;
		}if(cnIntern==""){
			$("#cnInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#cnInternal").focus();
			return false;
		}if($("#cnInternal").val() > 20){
			$("#cnInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#cnInternal").focus();
			return false;
		}if(cnPracs==""){
			$("#cnPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#cnPractical").focus();
			return false;
		}if($("#cnPractical").val() > 25){
			$("#cnPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#cnPractical").focus();
			return false;
		}if(dbmsExtern==""){
			$("#dbmsExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#dbmsExternal").focus();
			return false;
		}if($("#dbmsExternal").val() > 80){
			$("#dbmsExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#dbmsExternal").focus();
			return false;
		}if(dbmsIntern==""){
			$("#dbmsInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#dbmsInternal").focus();
			return false;
		}if($("#dbmsInternal").val() > 20){
			$("#dbmsInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#dbmsInternal").focus();
			return false;
		}if(dbmsPracs==""){
			$("#dbmsPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#dbmsPractical").focus();
			return false;
		}if($("#dbmsPractical").val() > 25){
			$("#dbmsPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#dbmsPractical").focus();
			return false;
		}if(mpExtern==""){
			$("#mpExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mpExternal").focus();
			return false;
		}if($("#mpExternal").val() > 80){
			$("#mpExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mpExternal").focus();
			return false;
		}if(mpIntern==""){
			$("#mpInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mpInternal").focus();
			return false;
		}if($("#mpInternal").val() > 20){
			$("#mpInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mpInternal").focus();
			return false;
		}if(mpPracs==""){
			$("#mpPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mpPractical").focus();
			return false;
		}if($("#mpPractical").val() > 25){
			$("#mpPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mpPractical").focus();
			return false;
		}if(mmExtern==""){
			$("#mmExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mmExternal").focus();
			return false;
		}if($("#mmExternal").val() > 80){
			$("#mmExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mmExternal").focus();
			return false;
		}if(mmIntern==""){
			$("#mmInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mmInternal").focus();
			return false;
		}if($("#mmInternal").val() > 20){
			$("#mmInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#mmInternal").focus();
			return false;
		}//if(mmPracs==""){
			// $("#mmPractical").css({"borderColor":"#cd201f","transition":".5s"});
			// $("#mmPractical").focus();
			// return false;
		// }if($("#mmPractical").val() > 20){
			// $("#mmPractical").css({"borderColor":"#cd201f","transition":".5s"});
			// $("#mmPractical").focus();
			// return false;
		// }
		if(tcsExtern==""){
			$("#tcsExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#tcsExternal").focus();
			return false;
		}if($("#tcsExternal").val() > 80){
			$("#tcsExternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#tcsExternal").focus();
			return false;
		}if(tcsIntern==""){
			$("#tcsInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#tcsInternal").focus();
			return false;
		}if($("#tcsInternal").val() > 20){
			$("#tcsInternal").css({"borderColor":"#cd201f","transition":".5s"});
			$("#tcsInternal").focus();
			return false;
		}//if(tcsPracs==""){
			// $("#tcsPractical").css({"borderColor":"#cd201f","transition":".5s"});
			// $("#tcsPractical").focus();
			// return false;
		// }if($("#tcsPractical").val() > 20){
			// $("#tcsPractical").css({"borderColor":"#cd201f","transition":".5s"});
			// $("#tcsPractical").focus();
			// return false;
		// }
		if(wtPracs==""){
			$("#wtPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#wtPractical").focus();
			return false;
		}if($("#wtPractical").val() > 50){
			$("#wtPractical").css({"borderColor":"#cd201f","transition":".5s"});
			$("#wtPractical").focus();
			return false;
		}
	});
});