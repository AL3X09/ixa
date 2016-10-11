var method
var licensePlate
var id = $.getUrlParameters("id");
$(window).on("load", function () {
    $.getItemInspection();
    method = 5;
    data = {"method": method, "id_request": id};
    $.post("../../Controller/Request.php", data).error(function (error) {
        console.log(error);
    }).success(function (responseController) {
        var jsonResponse = JSON.parse(responseController);
        var approved = "NO";
        var valueInspexiautos;
        $.each(jsonResponse["data"][0], function (i, item) {
            licensePlate = jsonResponse["data"][i]["license_plate"];
            approved = (jsonResponse["data"][i]["13"] == '1') ? "SI" : "NO";
            valueInspexiautos = jsonResponse["data"][i]["12"] - jsonResponse["data"][i]["49"];
            // INFORMACION GENERAL
            $("#info").append("<div class='col-md-12 header-info'><b>DATOS GENERALES</b></div>");
            $("#info").append("<div class='col-md-3 label-col'><b>N° Inspeccion:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["45"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Placa:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["31"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>N° Solicitud:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["0"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Fecha Inspeccion:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["54"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Servicio:</b></div><div class='col-md-9 data-col'>" + jsonResponse["data"][i]["type_service"] + " - " + jsonResponse["data"][i]["type_vehicle"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Asegurado:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["10"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Sede:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["8"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Intermediario:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["11"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Solicitado por:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["9"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Nombre Asegurado:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["20"] + " " + jsonResponse["data"][i]["21"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Identificacion:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["23"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Telefono:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["24"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Celular:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["25"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Direccion:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["28"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Valor Fasecolda:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["12"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Valor Inspexiautos:</b></div><div class='col-md-3 data-col'>" + valueInspexiautos + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>RESULTADO:</b></div><div class='col-md-3 data-col'>" + "APROVADO" + " " + approved + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Fecha Impresion:</b></div><div class='col-md-3 data-col'>" + "DATOS" + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Observaciones:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["50"] + "</div>");
            $("#info").append("<div class='col-md-12 header-info margin-top-table'><b>DATOS DEL VEHICULO</b></div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Marca:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["32"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Clase:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["37"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Tipo:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["33"] + " " + jsonResponse["data"][i]["35"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Codigo Fasecolda:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["24"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Color:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["41"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Modelo:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["40"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Kilometraje:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["48"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Tipo Pintura:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["218"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Cilindraje:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["35"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Servicio:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["231"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Numero de Motor:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["42"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Numero de chasis:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["44"] + "</div>");
            $("#info").append("<div class='col-md-3 label-col'><b>Numero de Serie:</b></div><div class='col-md-3 data-col'>" + jsonResponse["data"][i]["43"] + "</div>");

            // CARROCERIA
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Baúl:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["57"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Parachoques delantero:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["58"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Parachoques trasero:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["59"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Capot:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["60"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Capota:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["61"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Costado Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["62"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Costado Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["63"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Guardafando Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["64"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Guardafando Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["65"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Puerta Frontal Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["66"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Puerta Frontal Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["67"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Puerta Trasera Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["68"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Puerta Trasera Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["69"]) + "%</div>");
            $("#bodywork").append("<div class='col-md-3 label-col'><b>Porcentaje Total:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["70"]) + "%</div>");

            //EQUIPO ELECTRICO

            $("#electric-team").append("<div class='col-md-3 label-col'><b>Aire acodicionado:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["73"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Bloqueo Central:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["74"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Calefacción:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["75"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Elevavidrios electricos:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["76"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Espejos electricos:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["77"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Limpiabrisas delantero:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["78"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Limpiabrisas trasero:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["79"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Pito:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["80"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Radio:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["81"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Testigo Temperatura:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["82"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Velocimetro:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["83"]) + "%</div>");
            $("#electric-team").append("<div class='col-md-3 label-col'><b>Porcentaje Total:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["84"]) + "%</div>");

            // FLUIDOS

            $("#fluids").append("<div class='col-md-3 label-col'><b>Aceite de motor:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["87"]) + "%</div>");
            $("#fluids").append("<div class='col-md-3 label-col'><b>Direccion Hidraulica:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["88"]) + "%</div>");
            $("#fluids").append("<div class='col-md-3 label-col'><b>Embregue Hidraulico:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["89"]) + "%</div>");
            $("#fluids").append("<div class='col-md-3 label-col'><b>Frenos:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["90"]) + "%</div>");
            $("#fluids").append("<div class='col-md-3 label-col'><b>Parabrisas:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["91"]) + "%</div>");
            $("#fluids").append("<div class='col-md-3 label-col'><b>Refigerante:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["92"]) + "%</div>");
            $("#fluids").append("<div class='col-md-3 label-col'><b>Porcentaje Total:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["93"]) + "%</div>");

            // VIDRIOS

            $("#glasses").append("<div class='col-md-3 label-col'><b>Custodio Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["96"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Custodio Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["97"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Espejo interior:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["98"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Luneta derecha:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["99"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Luneta Izquierda:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["100"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Panoramico Delantero:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["101"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Panoramico trasero:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["102"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Vidrio Costado Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["103"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Vidrio Costado Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["104"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Vidrio Delantero Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["105"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Vidrio Delantero Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["106"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Vidrio Trasero Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["107"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Vidrio Trasero Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["108"]) + "%</div>");
            $("#glasses").append("<div class='col-md-3 label-col'><b>Porcentaje Total:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["109"]) + "%</div>");

            //INTERIORES
            $("#interior").append("<div class='col-md-3 label-col'><b>Alfombra piso:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["112"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Alfombra Techo:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["113"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Bandeja Porta objetos:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["114"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Cartera Puertas:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["115"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Cinturones de seguridad:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["116"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Estado sillas:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["117"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Guantera:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["118"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Millare:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["119"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Parasoles:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["120"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Tapiceria:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["121"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Tapiceria Asientos:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["122"]) + "%</div>");
            $("#interior").append("<div class='col-md-3 label-col'><b>Porcentaje Total:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["123"]) + "%</div>");

            //FUGAS
            $("#leakage").append("<div class='col-md-3 label-col'><b>Caja de direccion:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["126"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Embrague:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["127"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Aceite amortiguadores:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["128"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Aceite caja de transmision:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["129"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Aceite caja de velocidad:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["130"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Aceite de direccion Hydra:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["131"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Aceite Motor:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["132"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Gasolina:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["133"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Liquido de frenos:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["134"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Liquido bomba embrague:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["135"]) + "%</div>");
            $("#leakage").append("<div class='col-md-3 label-col'><b>Porcentaje Total:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["136"]) + "%</div>");

            // PINTURA

            //ESTRUCTURA

            $("#structure").append("<div class='col-md-3 label-col'><b>Cuna motor:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["176"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Estribo Derecho:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["177"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Estribo Izquierdo:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["178"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Frontal:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["179"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Guardapolvo metalico delant Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["180"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Guardapolvo metalico delant Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["181"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Guardapolvo metalico trase Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["182"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Guardapolvo metalico trasero Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["183"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Larguero derecho:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["184"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Larguero Izquierdo:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["185"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Panel trasero:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["186"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Paral central Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["187"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Paral central Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["188"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Paral panoramico Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["189"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Paral panoramico Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["190"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Paral Puerta delantera Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["191"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Paral Puerta delantera Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["192"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Piso carroceria:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["193"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Punta chasis delantero Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["194"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Punta chasis delantero Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["195"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Punta chasis trasero Der:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["196"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Punta chasis trasero Izq:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["197"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Tijera derecha:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["198"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Tijera izquierda:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["199"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Torpedo:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["200"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Torre derecha:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["201"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Torre Izquierda:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["202"]) + "%</div>");
            $("#structure").append("<div class='col-md-3 label-col'><b>Porcentaje Total:</b></div><div class='col-md-3 data-col'>" + (100 - jsonResponse["data"][i]["203"]) + "%</div>");

            // LLANTAS
            $("#rims-right").append('<div class="col-md-6"><label class="col-md-12 data-col">Trasera Izq: ' + (100 - jsonResponse["data"][i]["170"]) + '% </label><img class="img-rims col-md-offset-7 margin-top-table" src="../../img/rims.png"></div>' +
                    '<div class = "col-md-6"><label class = "col-md-12 data-col"> Trasera Der: ' + (100 - jsonResponse["data"][i]["169"]) + '% </label><img class="img-rims col-md-offset-7 margin-top-table margin-bottom-10px" src="../../img/rims.png"></div>' +
                    '<div class = "col-md-6"><label class = "col-md-12 data-col"> Frontal Izq: ' + (100 - jsonResponse["data"][i]["167"]) + '% </label><img class="img-rims col-md-offset-2 margin-top-table margin-bottom-10px" src="../../img/rims.png"></div>' +
                    '<div class = "col-md-6"><label class = "col-md-12 data-col"> Frontal Der: ' + (100 - jsonResponse["data"][i]["166"]) + '% </label><img class="img-rims col-md-offset-2 margin-top-table margin-bottom-10px" src="../../img/rims.png"></div>');
            $("#rims-left").append('<div class="col-md-6"><img class="img-rims col-md-offset-2" src="../../img/replacement-rims.png"></div><label class="col-md-6 data-col">Repuesto: ' + (100 - jsonResponse["data"][i]["168"]) + '% </label>');
            $("#rims-left").append('<hr class="col-md-12"/>');
            $("#rims-left").append('<div class="col-md-6"><img class="img-rims col-md-offset-2" src="../../img/replacement-rims.png"></div><label class="col-md-6 data-col">Trasera interior Izq: ' + (100 - jsonResponse["data"][i]["171"]) + '% </label>');
            $("#rims-left").append('<hr class="col-md-12"/>');
            $("#rims-left").append('<div class="col-md-6"><img class="img-rims col-md-offset-2" src="../../img/replacement-rims.png"></div><label class="col-md-6 data-col">Trasera interior Der: ' + (100 - jsonResponse["data"][i]["172"]) + '% </label>');
            $("#rims-left").append('<hr class="col-md-12"/>');
            $("#rims-left").append('<div class="col-md-12"><label class="col-md-12 data-col">Porcentaje total: ' + jsonResponse["data"][i]["173"] + '% </label>');

            //FOTOS 
            var pictureVehicle = jsonResponse["data"][i]["52"].split('#');
            var pictureSystem = (jsonResponse["data"][i]["51"] + jsonResponse["data"][i]["210"]).split('#');

            $.each(pictureVehicle, function (position) {
                $("#picture-vehicle").append('<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">' +
                        '<a href="../../Files/' + jsonResponse["data"][i]["31"] + '/' + pictureVehicle[position] + '" itemprop="contentUrl" data-size="1024x1024">' +
                        ' <img src="../../Files/' + jsonResponse["data"][i]["31"] + '/' + pictureVehicle[position] + '" itemprop="thumbnail" />' +
                        '</a>' +
                        '<figcaption itemprop="caption description">Foto vehiculo ' + position + '</figcaption>' +
                        '</figure>');
            });
            $.each(pictureSystem, function (position) {
                $("#picture-system").append('<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">' +
                        '<a href="../../Files/' + jsonResponse["data"][i]["31"] + '/' + pictureSystem[position] + '" itemprop="contentUrl" data-size="1024x1024">' +
                        ' <img src="../../Files/' + jsonResponse["data"][i]["31"] + '/' + pictureSystem[position] + '" itemprop="thumbnail" />' +
                        '</a>' +
                        '<figcaption itemprop="caption description">Foto vehiculo ' + position + '</figcaption>' +
                        '</figure>');
            });

        });
        $("#vehicle-picture").attr("src", "../../Files/" + licensePlate + "/VEHICULO.jpg");
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