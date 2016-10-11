$(window).load(function(){
	if ($.session()) {
		window.location = '../../View/index.php';
	}
});

$(document).on("ready", function() {
	var data;
	$("#login").on("click", function() {
		if ($("#user").val().length>0 || $("#password").val().length>0) {
			data = {"method":1,"name-user":$("#user").val(),"password":$("#password").val()};
			$.post("../../Controller/Login.php",data).error(function(error) {
				$("#message").html("Hubo un error al contactarse con el servidor, por favor intente mas tarde.");
			}).success(function(responseController) {
				console.log(responseController);
				var jsonController = JSON.parse(responseController);
				if (!jsonController["response"]) {
					$("#message").html(jsonController["message"]);
				} else {
					$("#message").html(jsonController["message"]);
					window.setTimeout(function() {
					    window.location.href = '../../View/index.php';
					}, 5000);
				}				
			});
		} else {
			$("#message").html("Faltan campos por ingresar por favor valide.");
		}
		
	});
});

