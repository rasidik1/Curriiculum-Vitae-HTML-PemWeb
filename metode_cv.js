$(document).ready(function(){

$("input[type=radio]").change(function(){
 var method = $(this).val();
 $("#form").attr("method", method); 
});

$("#submit").click(function(){ 
	var fnama = $("#fnama").val();
    var alamat = $("#alamat").val();
    var nim = $("#nim").val();
	var kelas = $("#kelas").val();
	var email = $("#email").val();
	var kk = $("#kk").val();
	
	if( fnama != ''  ){
		return true; 
	}	
	else{
		alert("Tolong diisi...!!!!!!");
		return false;
	}
});
});