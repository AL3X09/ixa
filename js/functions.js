/**
 * 
 */

var method;
var jsonController;
var data;

$.limitInputs = function(input, maxlength) {
	$(input).attr("maxlength", maxlength);
}

$.disabledInput = function(value, input) {
	$(input).attr("disabled", "");

	$(input).attr("value", value);
}
$.disabledSelect = function(option, select) {
	$(select).attr("disabled", "");

	$(select + " > option[value=" + option + "]").attr("selected", "selected");
}

$.validateInput = function(input) {
	if ($(input).val().length < 1) {
		return false;
	} else {
		return true;
	}
}

$.validateSelect = function(select) {
	if ($(select + " option:selected").val() != 0) {
		return true;
	} else {
		return false;
	}
}

$.iconStatusService = function(value, id, src) {

	switch (value) {
	case "1":
		return "<i class='ok digitation icon fa fa-check'  data-request='"+id+"' data-src='../../View/Binnacle/"+src+".php' aria-hidden='true'></i>";
		break;
	case "2":
		return "<i class='no-aply icon fa fa-ban'  data-request='"+id+"' data-src='../../View/Binnacle/"+src+".php' aria-hidden='true'></i>";
		break;
	case "3":
		return "<i class='required icon fa fa-minus'  data-request='"+id+"' data-src='../../View/Binnacle/"+src+".php' aria-hidden='true'></i>";
		break;
	case "4":
		return "<i class='in-progress icon fa fa-times' data-request='"+id+"' data-src='../../View/Binnacle/"+src+".php' aria-hidden='true'></i>";
		break;
	default:
		break;
	}

}

$.session = function() {
	$.post("../../Controller/Session.php").error(function(error) {
	}).success(function(responseController) {
		response = JSON.parse(responseController);
		return response["response"];
	});
}

$.getDocumentType = function() {
	method = 1;
	data = {"method" : method};
	$.post("../../Controller/Setting.php", data).error(function(error) {

	}).success(function(responseController) {
		// console.log(responseController);
		jsonController = JSON.parse(responseController);
		// console.log(jsonController);
		if (!jsonController["response"]) {
		} else {
			$.each(jsonController["data"],function(i, item) {
				$("#select-document-type").append("<option value='"+ jsonController["data"][i]["id"]+ "'>"+ jsonController["data"][i]["document_type"]+ "</option>");
			});
		}
	});
}

$.getCity = function() {
	method = 2;
	data = {"method" : method};
	$.post("../../Controller/Setting.php", data).error(function(error) {

	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {

				} else {
					$.each(jsonController["data"], function(i, item) {
						$("#select-city").append(
								"<option value='"+ jsonController["data"][i]["id"]+ "'>"+ jsonController["data"][i]["city"]+ "</option>");
					});
				}
			});
}

$.getAllTypeClient = function() {
	method = 3;
	data = {"method" : method};
	$.post("../../Controller/Setting.php", data).error(function(error) {
				alert(error);
		}).success(function(responseController) {
			// console.log(responseController);
			jsonController = JSON.parse(responseController);
			// console.log(jsonController);
			if (!jsonController["response"]) {
			} else {
				$.each(jsonController["data"],function(i, item) {
					$("#select-type-client").append("<option value='"+ jsonController["data"][i]["id"]+ "'>"+ jsonController["data"][i]["type_client"]+ "</option>");
				});
			}
	});
}

$.getAllTypeService = function() {
	method = 4;
	data = {
		"method" : method
	};
	$
			.post("../../Controller/Setting.php", data)
			.error(function(error) {
				alert(error);
			})
			.success(
					function(responseController) {
						// console.log(responseController);
						jsonController = JSON.parse(responseController);
						// console.log(jsonController);
						if (!jsonController["response"]) {

						} else {
							$
									.each(
											jsonController["data"],
											function(i, item) {
												$("#select-type-service")
														.append(
																"<option value='"
																		+ jsonController["data"][i]["id"]
																		+ "'>"
																		+ jsonController["data"][i]["type_service"]
																		+ "</option>");
											});
						}
					});
}
$.getGas = function() {
	method = 9;
	data = {
		"method" : method
	};
	$.post("../../Controller/Setting.php", data).error(function(error) {

	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {

				} else {
					$.each(jsonController["data"], function(i, item) {
						$("#select-gas").append(
								"<option value='"
										+ jsonController["data"][i]["id"]
										+ "'>"
										+ jsonController["data"][i]["gas"]
										+ "</option>");
					});
				}
			});
}
$.getService = function() {
	method = 10;
	data = {
		"method" : method
	};
	$.post("../../Controller/Setting.php", data).error(function(error) {

	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {

				} else {
					$.each(jsonController["data"], function(i, item) {
						$("#select-service").append(
								"<option value='"
										+ jsonController["data"][i]["id"]
										+ "'>"
										+ jsonController["data"][i]["service"]
										+ "</option>");
					});
				}
			});
}



$.getBrands = function() {
	method = 5;
	data = {
		"method" : method
	};
	$("#select-brands").append(
			"<option value='0'>-- Seleccione Uno --</option>");
	$("#select-lines")
			.append("<option value='0'>-- Seleccione Uno --</option>");
	$("#select-type-reference").append(
			"<option value='0'>-- Seleccione Uno --</option>");
	$("#select-cylinder-capacity").append(
			"<option value='0'>-- Seleccione Uno --</option>");
	$("#select-service").append(
			"<option value='0'>-- Seleccione Uno --</option>");
	$("#select-bodywork").append(
			"<option value='0'>-- Seleccione Uno --</option>");
	$("#select-gas").append("<option value='0'>-- Seleccione Uno --</option>");
	$("#select-model")
			.append("<option value='0'>-- Seleccione Uno --</option>");

	$.post("../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {

				} else {
					$.each(jsonController["data"], function(i, item) {
						$("#select-brands").append(
								"<option value='"
										+ jsonController["data"][i]["brand"]
										+ "'>"
										+ jsonController["data"][i]["brand"]
										+ "</option>");
					});
				}
			});
}

$.getLineByBrand = function() {
	$("#select-brands")
			.on(
					"change",
					function() {
						method = 6;
						data = {
							"method" : method,
							"brand" : $("#select-brands option:selected").val()
						};
						$
								.post("../../Controller/Setting.php", data)
								.error(function(error) {
									alert(error);
								})
								.success(
										function(responseController) {
											// console.log(responseController);
											jsonController = JSON
													.parse(responseController);
											// console.log(jsonController);
											if (!jsonController["response"]) {

											} else {
												$(
														'#select-lines option[value!="0"]')
														.remove();
												$(
														'#select-type-reference option[value!="0"]')
														.remove();
												$(
														'#select-cylinder-capacity option[value!="0"]')
														.remove();
												$(
														'#select-bodywork option[value!="0"]')
														.remove();
												$
														.each(
																jsonController["data"],
																function(i,
																		item) {

																	$(
																			"#select-lines")
																			.append(
																					"<option value='"
																							+ jsonController["data"][i]["line"]
																							+ "'>"
																							+ jsonController["data"][i]["line"]
																							+ "</option>");
																});
											}
										});
					});
}

$.getTypeReference = function() {
	$("#select-lines")
			.on(
					"change",
					function() {
						method = 7;
						data = {
							"method" : method,
							"brand" : $("#select-brands option:selected").val(),
							"line" : $("#select-lines option:selected").val()
						};
						$
								.post("../../Controller/Setting.php", data)
								.error(function(error) {
									alert(error);
								})
								.success(
										function(responseController) {
											// console.log(responseController);
											jsonController = JSON
													.parse(responseController);
											// console.log(jsonController);
											if (!jsonController["response"]) {

											} else {
												$(
														'#select-type-reference option[value!="0"]')
														.remove();
												$(
														'#select-cylinder-capacity option[value!="0"]')
														.remove();
												$(
														'#select-bodywork option[value!="0"]')
														.remove();
												$
														.each(
																jsonController["data"],
																function(i,
																		item) {
																	$(
																			"#select-type-reference")
																			.append(
																					"<option value='"
																							+ jsonController["data"][i]["type_reference"]
																							+ "'>"
																							+ jsonController["data"][i]["type_reference"]
																							+ "</option>");
																});
											}
										});
					});
}
$.getCylinderCapacity = function() {
	$("#select-type-reference")
			.on(
					"change",
					function() {
						method = 8;
						data = {
							"method" : method,
							"brand" : $("#select-brands option:selected").val(),
							"line" : $("#select-lines option:selected").val(),
							"type_reference" : $(
									"#select-type-reference option:selected")
									.val()
						};
						$
								.post("../../Controller/Setting.php", data)
								.error(function(error) {
									alert(error);
								})
								.success(
										function(responseController) {
											// console.log(responseController);
											jsonController = JSON
													.parse(responseController);
											// console.log(jsonController);
											if (!jsonController["response"]) {

											} else {
												$('#select-cylinder-capacity option[value!="0"]').remove();
												$(
														'#select-bodywork option[value!="0"]')
														.remove();
												$
														.each(
																jsonController["data"],
																function(i,
																		item) {
																	$(
																			"#select-cylinder-capacity")
																			.append(
																					"<option value='"
																							+ jsonController["data"][i]["cylinder_capacity"]
																							+ "'>"
																							+ jsonController["data"][i]["cylinder_capacity"]
																							+ "</option>");
																});
											}
										});
					});
}
$.getBodywork = function() {
	$("#select-cylinder-capacity")
			.on(
					"change",
					function() {
						method = 11;
						data = {
							"method" : method,
							"brand" : $("#select-brands option:selected").val(),
							"line" : $("#select-lines option:selected").val(),
							"type_reference" : $("#select-type-reference")
									.val(),
							"cylinder_capacity" : $(
									"#select-cylinder-capacity option:selected")
									.val()
						};
						$
								.post("../../Controller/Setting.php", data)
								.error(function(error) {
									alert(error);
								})
								.success(
										function(responseController) {
											// console.log(responseController);
											jsonController = JSON
													.parse(responseController);
											// console.log(jsonController);
											if (!jsonController["response"]) {
											} else {
												$(
														'#select-bodywork option[value!="0"]')
														.remove();
												$
														.each(
																jsonController["data"],
																function(i,
																		item) {
																	$(
																			"#select-bodywork")
																			.append(
																					"<option value='"
																							+ jsonController["data"][i]["bodywork"]
																							+ "'>"
																							+ jsonController["data"][i]["bodywork"]
																							+ "</option>");
																});
											}
										});
					});
}

$.getfasecoldaValueCode = function() {
	$("#select-model").on("change",	function() {
		method = 13;
		data = {"method" : method,
				"brand" : $("#select-brands option:selected").val(),
				"line" : $("#select-lines option:selected").val(),
				"type_reference" : $("#select-type-reference").val(),
				"cylinder_capacity" : $("#select-cylinder-capacity option:selected").val(),
				"bodywork" : $("#select-bodywork option:selected").val(),
				"model" : $("#select-model option:selected").val()};
				$.post("../../Controller/Setting.php", data).error(function(error) {
					alert(error);
				}).success(function(responseController) {
					//console.log(responseController);
					jsonController = JSON.parse(responseController);
					// console.log(jsonController);
					if (!jsonController["response"]) {
					} else {
						$.each(jsonController["data"],function(i,item) {
							$("#input-fasecolda-code").val("0"+jsonController["data"][i]["code"]);
							$("#input-fasecolda-value").val(jsonController["data"][i]["value"]+"000");
						});
					}
				});
	});
}


$.getModel = function() {
	method = 12;
	data = {
		"method" : method
	};
	$.post("../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				//console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$('#select-bodywork option[value!="0"]').remove();
					$.each(jsonController["data"], function(i, item) {
						$("#select-model").append(
								"<option value='"
										+ jsonController["data"][i]["model"]
										+ "'>"
										+ jsonController["data"][i]["model"]
										+ "</option>");
					});
				}
			});
}
// No se está implemetando
$.getItemInspection = function() {
	method = 14;
	data = {
		"method" : method
	};
	$.post("../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$("#select-item-inspection").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "' data-route='"+jsonController["data"][i]["route"]+"'>"
										+ jsonController["data"][i]["item"]
										+ "</option>");
					});
				}
			});
}

$.insertClient = function() {
	method = 2;
	data = {
		"method" : method,
		"name" : $("#name").val(),
		"lastname" : $("#lastname").val(),
		"document_type" : $("#select-document-type option:selected").val(),
		"identification_number" : $("#identification-number").val(),
		"expedition_document" : $("#select-city option:selected").val(),
		"phone" : $("#phone").val(),
		"extention" : $("#extention").val(),
		"cellphone" : $("#cellphone").val(),
		"address" : $("#address").val()
	};
	console.log(data);
	$.post("../../Controller/Client.php", data).error(function(e) {
		console.log(e);
	}).success(function(responseController) {
		console.log(responseController);
		jsonController = JSON.parse(responseController);
		if (!jsonController["response"]) {
			return false;
		} else {
			return true;
		}
	});
}


$.modalContent = function (button, modalContent,session){
	$(button).on("click",function(event){
		event.preventDefault();
		var target = event.target;
		
		if($.validateTypeUser(session)){
			var src = target.getAttribute("data-src");
			var id = target.getAttribute("data-request");
			window.location.href = src+"?id="+id;
//			$(modalContent).attr("src",src+"?id="+id);
		}
	});
}

$.validateTypeUser = function (user){
	if (user == "1" || user =="2") {
		return true;
	} else if (user =="3"){
		return false;
	}
}

$.getUrlParameters = function(key)   {  
    key = key.replace(/[\[]/, '\\[');  
    key = key.replace(/[\]]/, '\\]');  
    var pattern = "[\\?&]" + key + "=([^&#]*)";  
    var regex = new RegExp(pattern);  
    var url = unescape(window.location.href);  
    var results = regex.exec(url);  
    if (results === null) {  
        return null;  
    } else {  
        return results[1];  
    }    
    
} 

$.getBodyWorkStatus = function() {
	method = 15;
	data = {
		"method" : method
	};
	$.post(".." +
			"/../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-inspection-bodywork").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}

$.getSimpleStatusInspection = function() {
	method = 16;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-electric-team").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}
//NO SE ESTA USANDO
$.getAllTypeVehicle = function(){
	method = 17;
	data = {"method" : method};
	$.post("../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				//console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$("#type-vehicle").append("<div class='radio'><label><input type='radio' checked='' id='type-vehicle' name='type-vehicle' value='"+jsonController["data"][i]["id"]+"'/>"+jsonController["data"][i]["vehicle"]+"</label></div>");
			});
		}
	});
}

$.getStructureStatusInspection = function() {
	method = 19;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-structure").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}

$.getLeakageStatusInspection = function() {
	method = 20;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-leakage").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}

$.getLigthsStatusInspection = function() {
	method = 21;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-ligths").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}
$.getInteriorStatusInspection = function() {
	method = 22;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-interior").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}

$.getRimsStatusInspection = function() {
	method = 23;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-rims").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}
$.getFluidLevelStatusInspection = function() {
	method = 24;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-fluid-levels").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}
$.getGlassesStatusInspection = function() {
	method = 25;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-glasses").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}
$.getPaintStatusInspection = function() {
	method = 26;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-paint").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}
$.getTypePaintStatusInspection = function() {
	method = 27;
	data = {
		"method" : method
	};
	$.post("../../../Controller/Setting.php", data).error(function(error) {
		alert(error);
	}).success(
			function(responseController) {
				// console.log(responseController);
				jsonController = JSON.parse(responseController);
				// console.log(jsonController);
				if (!jsonController["response"]) {
				} else {
					$.each(jsonController["data"], function(i, item) {
						$(".select-type-paint").append(
								"<option value='"
										+ jsonController["data"][i]["id"]+ "'>"
										+ jsonController["data"][i]["status"]
										+ "</option>");
					});
				}
			});
}
$.showSection = function (daddy, son){
	$(daddy).children('div').css("display","none");
	$(daddy).children('#'+son).css("display","block");
	//$(daddy).contents().find("div#"+son).css("display","block");
}

