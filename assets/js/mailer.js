$(document).ready(function(){
	$(".send").off("click").on("click",function(){
		if($("#nom").val() == "" || $("#prenom").val() == "" || $("#mess").val() == "") {
			$.notify("Vous devez remplir entièrement le formulaire !", "error");
			return;
		}
		else {
		$.post("./assets/php/mailer.php",{nom: $("#nom").val(), prenom: $("#prenom").val(), message: $("#mess").val()},function(res){
				if(res.err == "0") {
					$.notify("Message envoyé","success");		
				}else{
					$.notify("Erreur envoi "+res.txt,"error");		
                }
		})};
	});

});