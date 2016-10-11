var method
var id = $.getUrlParameters("id");
var licensePlate;
$(window).on("load", function () {
    $.getItemInspection();
    // $.getBodyWorkStatus();
    // $.getSimpleStatusInspection();
    // $.getAllTypeVehicle();
    method = 4;
    data = {"method": method, "id_request": id};
    $.post("../../Controller/Request.php", data).error(function (error) {
        console.log(error);
    }).success(function (responseController) {
//        console.log(responseController);
        jsonController = JSON.parse(responseController);
        $.each(jsonController["data"], function (i, item) {
            licensePlate = jsonController["data"][i]["license_plate"];
            $("#license-plate").html(jsonController["data"][i]["license_plate"]);
            $("#brand").html(jsonController["data"][i]["brand"]);
            $("#line").html(jsonController["data"][i]["line"]);
            $("#type-reference").html(jsonController["data"][i]["type_reference"]);
            $("#cylinder-capacity").html(jsonController["data"][i]["cylinder_capacity"]);
            $("#service").html(jsonController["data"][i]["service"]);
            $("#bodywork").html(jsonController["data"][i]["bodywork"]);
            $("#gas").html(jsonController["data"][i]["gas"]);
            $("#capacity").html(jsonController["data"][i]["capacity"]);
            $("#model").html(jsonController["data"][i]["model"]);
            $("#fasecolda-value").html(jsonController["data"][i]["fasecolda_value"]);
            $("#fasecolda-code").html(jsonController["data"][i]["fasecolda_code"]);

        });
    });


    $("#select-item-inspection").on("change", function (event) {
        event.preventDefault();
        var contentFrame = $("#valoration-visual").contents().find("body");
        $.showSection(contentFrame, $("#select-item-inspection option:selected").data("route"));
    });


    $("input[name='type-vehicle']").on("change", function (event) {
        // $('#select-cylinder-capacity option:lt(-1)').remove();
        $("#select-item-inspection").find("option").remove();
        event.preventDefault;

        method = 18;

        data = {"method": method, "type_vehicle": $("input[name='type-vehicle']:checked").attr("value")};
        $.post("../../Controller/Setting.php", data).error(function (error) {
            console.log(error);
        }).success(function (responseController) {
            // console.log(responseController);
            jsonController = JSON.parse(responseController);
            // console.log(jsonController);
            if (!jsonController["response"]) {
            } else {
                $("#valoration-visual").attr("src", "../../View/Binnacle/Inspection/inspection" + $("input[name='type-vehicle']:checked").data("frame") + ".php");
                $.each(jsonController["data"], function (i, item) {
                    $("#select-item-inspection").append(
                            "<option value='"
                            + jsonController["data"][i]["id"] + "' data-route='" + jsonController["data"][i]["route"] + "'>"
                            + jsonController["data"][i]["item"]
                            + "</option>");
                });
            }
        });
    });

    $("#add-inspection").on("click", function (event) {
        event.preventDefault;
        method = 1;
        form = document.getElementById("form-inspection");
        var formData = new FormData(form);
        formData.append("method", method);
        formData.append("id-request", id);
        formData.append("license-plate", licensePlate);
        var contentFrame = $("#valoration-visual").contents().find("body");

        // console.log(contentFrame.contents().find("select").val());
        contentFrame.contents().find("select").each(function () {
            formData.append($(this).attr("name"), $(this).val());
        });



        // formData.append("inspectiion",contentFrame.children('select').val());

        var route = "../../Controller/Inspection.php";
        $.ajax({
            url: route,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: function (responseController)
            {
                jsonController = JSON.parse(responseController);
                if (responseController["response"]) {
                    alert(responseController["message"]);
                    location.href = "../Binnacle/index.php";
                } else {
                    alert(responseController["message"]);
                }
            }, error: function (error) {
                console.log(error);
            }
        });
    });
});