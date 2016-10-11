var method
var licensePlate
var id = $.getUrlParameters("id");
$(window).on("load", function () {
    $.getItemInspection();
    method = 4;
    data = {"method": method, "id_request": id};
    $.post("../../Controller/Request.php", data).error(function (error) {
        console.log(error);
    }).success(function (responseController) {
        console.log(responseController);
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

    $("#add-vta").on("click", function (event) {
        event.preventDefault;
        method = 1;
        form = document.getElementById("form-vta");
        var formData = new FormData(form);
        formData.append("method", method);
        formData.append("id-request", id);
        formData.append("license-plate", licensePlate);

        var route = "../../Controller/VTA.php";
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
                if (jsonController["response"]) {
                    alert(jsonController["message"]);
                    location.href = "../Binnacle/index.php";
                } else {
                    alert(jsonController["message"]);
                }
            }
        });
    });
});