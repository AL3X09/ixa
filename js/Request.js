/**
 * 
 */
$(window).on("load", function () {

    var statusContinue = false;

    $.getDocumentType();
    $.getCity();
    $.getAllTypeService();
    $.getAllTypeClient();
    $.getBrands();
    $.getLineByBrand();
    $.getTypeReference();
    $.getCylinderCapacity();
    $.getBodywork();
    $.getModel();
    $.getGas();
    $.getService();
    $.getfasecoldaValueCode();
    $.limitInputs("#license-plate", 7);
    $("#step-two").css("display", "none");
    $("#send").css("display", "none");


    // $("#license-plate").attr("maxlength",7);
    var licensePlate;
    $("#license-plate").on("keyup", function () {
        if ($("#license-plate").val().length == 3) {
            licensePlate = $("#license-plate").val();
            $("#license-plate").val(licensePlate + "-");
        }
    });

    $("#continue").on("click", function (event) {
        event.preventDefault();
        if (validateStepOne()) {
            if (!statusContinue) {
                $("#step-two").css("display", "block");
                $("#send").css("display", "block");
                $("#continue").css("display", "none");
                $.disabledInput($("#license-plate").val(), "#license-plate");
                $.disabledInput($("#name").val(), "#name");
                $.disabledInput($("#lastname").val(), "#lastname");
                $.disabledSelect($("#select-document-type option:selected").val(), "#select-document-type");
                $.disabledInput($("#identification-number").val(), "#identification-number");
                $.disabledSelect($("#select-city option:selected").val(), "#select-city");
                $.disabledInput($("#phone").val(), "#phone");
                $.disabledInput($("#extention").val(), "#extention");
                $.disabledInput($("#cellphone").val(), "#cellphone");
                $.disabledInput($("#address").val(), "#address");
                $.disabledSelect($("#select-type-client option:selected").val(), "#select-type-client");
                $.disabledSelect($("#select-type-service option:selected").val(), "#select-type-service");
                $.insertClient();
            } else {
                $("#step-two").css("display", "block");
                $("#send").css("display", "block");
                $("#continue").css("display", "none");
                $.disabledInput($("#license-plate").val(), "#license-plate");
                $.disabledInput($("#name").val(), "#name");
                $.disabledInput($("#lastname").val(), "#lastname");
                $.disabledSelect($("#select-document-type option:selected").val(), "#select-document-type");
                $.disabledInput($("#identification-number").val(), "#identification-number");
                $.disabledSelect($("#select-city option:selected").val(), "#select-city");
                $.disabledInput($("#phone").val(), "#phone");
                $.disabledInput($("#extention").val(), "#extention");
                $.disabledInput($("#cellphone").val(), "#cellphone");
                $.disabledInput($("#address").val(), "#address");
                $.disabledSelect($("#select-type-client option:selected").val(), "#select-type-client");
                $.disabledSelect($("#select-type-service option:selected").val(), "#select-type-service");
            }

        } else {
            alert("Faltan algunos datos del cliente por favor valide");
        }
    });

    function validateStepOne() {
        if ($.validateInput("#license-plate") && $.validateInput("#name") && $.validateInput("#lastname") && $.validateSelect("#select-document-type") && $.validateInput("#identification-number") && $.validateInput("#select-city") && $.validateInput("#phone") && $.validateInput("#cellphone") && $.validateInput("#address") && $.validateSelect("#select-type-client") && $.validateSelect("#select-type-service")) {
            return true;
        } else {
            return false;
        }
    }


    $("#identification-number").on("change", function () {
        method = 1;
        data = {"method": method, "identification_number": $("#identification-number").val()};
        $.post("../../Controller/Client.php", data).error(function (error) {
            alert(error);
        }).success(function (responseController) {
            // console.log(responseController);
            jsonController = JSON.parse(responseController);
            if (jsonController["response"]) {
                $.each(jsonController["data"], function (i, item) {
                    $.disabledInput(jsonController["data"][i]["name"], "#name");
                    $.disabledInput(jsonController["data"][i]["lastname"], "#lastname");
                    $.disabledSelect(jsonController["data"][i]["id_document_type"], "#select-document-type");
                    $.disabledSelect(jsonController["data"][i]["id_expedition_city"], "#select-city");
                    $.disabledInput(jsonController["data"][i]["phone"], "#phone");
                    $.disabledInput(jsonController["data"][i]["extencion"], "#extention");
                    $.disabledInput(jsonController["data"][i]["cellphone"], "#cellphone");
                    $.disabledInput(jsonController["data"][i]["address"], "#address");

                });
                statusContinue = true;
            }
        });
    });




    $("#send").on("click", function (e) {
        e.preventDefault();
        if (validateNameFile()) {
            method = 1;
            data = {"method": method, "license_plate": $("#license-plate").val(),
                "identification_number": $("#identification-number").val(),
                "type_client": $("#select-type-client").val(),
                "type_service": $("#select-type-service").val(),
//                "turn": $("#turn").val(),
                "brand": $("#select-brands option:selected").val(),
                "line": $("#select-lines option:selected").val(),
                "type_refetence": $("#select-type-reference option:selected").val(),
                "cylinder_capacity": $("#select-cylinder-capacity option:selected").val(),
                "service": $("#select-service option:selected").val(),
                "bodywork": $("#select-bodywork option:selected").val(),
                "gas": $("#select-gas option:selected").val(),
                "capacity": $("#capacity").val(),
                "model": $("#select-model option:selected").val(),
                "color": $("#color").val(),
                "motor_number": $("#motor-number").val(),
                "serie_number": $("#serie-number").val(),
                "chasis_number": $("#chasis-number").val(),
                "headquarters": $("#headquarters").val(),
                "requested_by": $("#request-by").val(),
                "insured": $("#insured").val(),
                "intermediary": $("#intermediary").val(),
                "fasecolda_value": $("#input-fasecolda-value").val(),
                "fasecolda_code": $("#input-fasecolda-code").val()};
            //console.log($('#serie-number').val() + "-------" + $('#chasis-number').val() + "---------------------" + $('#headquarters').val());
            if ($("#serie-number").val() == $("#chasis-number").val() && $("#serie-number").val() == $("#motor-number").val() && $("#chasis-number").val() == $("#motor-number").val()) {
                e.preventDefault();
                $.post("../../Controller/Request.php", data).error(function (error) {
                    console.log(error);
                }).success(function (responseController) {
                    console.log(responseController);
                    //console.log($("#identification-number").val());
                    jsonController = JSON.parse(responseController);
                    if (!jsonController["response"]) {
                        alert(jsonController["message"]);

                    } else {
                        alert(jsonController["message"]);
                    }
                });
            } else {
                alert("Verifique que los campos Número de motor, Número de serie y número de chasis sean iguales");
            }


            var files = document.getElementById("file");
            var file = files.files;
            var formData = new FormData();
            for (i = 0; i < file.length; i++) {
                formData.append('file' + i, file[i]);
            }

            formData.append("method", 2);
            formData.append("identification_number", $("#identification-number").val());
            formData.append("license_plate", $("#license-plate").val());
            var route = "../../Controller/Request.php";
            $.ajax({
                url: route,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                success: function (datos)
                {
                    location.href = "../Binnacle/index.php";
//                    console.log(datos);
                }
            });

        }
    });
});


function validateNameFile() {
    input = document.getElementById("file").files;
    if (input.length == 0) {
        alert("No ha seleccionado archivos");
        return false;
    } else {
        var cardFront = false;
        var cardBack = false;
        var car = false;
        var extension = false
        var errors;
        var archivoDiv;
        for (i = 0; i < input.length; i++) {
            nameFile = input[i].name;
            archivoDiv = nameFile.split(".");

            if (archivoDiv[0] == "TARJETA_FRENTE") {
                cardFront = true;
            }
            if (archivoDiv[0] == "TARJETA_ATRAS") {
                cardBack = true;
            }
            if (archivoDiv[0] == "VEHICULO") {
                car = true;
            }

        }
        if (!cardFront && !cardBack) {
            alert("Los nombres de los archivos no coinciden, por favor cargue los archivos con los nombres requeridos.");
            return false;
        } else {

            return true;
        }
    }
}


