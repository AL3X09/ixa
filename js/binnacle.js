$(window).on("load",function(){
	data = {"method":3};
	$.post("../../Controller/Request.php",data).error(function(error){
		
	}).success(function(responseController){
		//console.log(responseController);
		var jsonController = JSON.parse(responseController);
		if (!jsonController["response"]) {
			
		} else {
			$.each(jsonController["data"],function(i,item){
			$("#table-binnacle").append("<tr><td id='id'>"+jsonController["data"][i]["id"]+"</td><td>"+jsonController["data"][i]["license_plate"]+"</td><td><b>"+$.iconStatusService(jsonController["data"][i]["digitation"],jsonController["data"][i]["id"],"digitation")+"</b></td><td>"+$.iconStatusService(jsonController["data"][i]["inspection"],jsonController["data"][i]["id"],"inspection")+"</td><td>"+$.iconStatusService(jsonController["data"][i]["vta"],jsonController["data"][i]["id"],"vta")+"</td><td>"+$.iconStatusService(jsonController["data"][i]["tecnical_control"],jsonController["data"][i]["id"],"tecnicalControl")+"</td><td>"+$.iconStatusService(jsonController["data"][i]["status"],jsonController["data"][i]["id"],"status")+"</td></tr>");
			
			});
			$.modalContent(".ok", "frame",jsonController["session"]);
			$.modalContent(".required", "frame",jsonController["session"]);
			$.modalContent(".in-progress", "frame",jsonController["session"]);
			
		}
		
	});
});