
$(window).on("load",function(){
	$.post("../Controller/Menu.php").error(function(error){
		
	}).success(function(responseController){
		var jsonController = JSON.parse(responseController);
	//console.log(jsonController);
		$("#name-user").html(jsonController["session"]["name-user"]);		
		$.each(jsonController["data"],function(i,item){
			$("#menu").append("<li id="+$.trim(jsonController["data"][i]["prefix"].toLowerCase())+"><a>"+jsonController["data"][i]["menu"]+"</a></li>")});
			$("#menu").on("click",function(e){				
					  var prefix = e.target.parentNode.id;
					  $("#main").attr("src","../View/" + prefix.charAt(0).toUpperCase()+prefix.slice(1) + "/index.php");		
		});
	});
});
