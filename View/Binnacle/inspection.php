<!DOCTYPE HTML PUBLIC "-//WC//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Cp1353">
        <title>Insert title here</title>
        <script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/functions.js"></script>
        <script type="text/javascript" src="../../js/Binnacle/inspection.js"></script>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
    </head>

    <body style="background-color: rgba(0, 0, 0, 0.0)">


        <fieldset>
            <form class="form-horizontal" id="form-inspection" enctype="multipart/form-data" action="#">
                <legend>
                    <h3>
                        Inspecci&oacute;n: <strong id="license-plate" class="text-success">...</strong>
                    </h3>
                </legend>
                <div class="col-md-2">
                    <h5>
                        <b><b>Marca</b></b>
                    </h5>
                    <small id="brand">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Linea</b>
                    </h5>
                    <small id="line">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Tipo Referencia</b>
                    </h5>
                    <small id="type-reference">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Cilindraje</b>
                    </h5>
                    <small id="cylinder-capacity">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Servicio</b>
                    </h5>
                    <small id="service">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Carrocer&iacute;a</b>
                    </h5>
                    <small id="bodywork">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Combustible</b>
                    </h5>
                    <small id="gas">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Capacidad</b>
                    </h5>
                    <small id="capacity">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Modelo</b>
                    </h5>
                    <small id="model">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Valor Fasecolda</b>
                    </h5>
                    <small id="fasecolda-value">...</small>
                </div>
                <div class="col-md-2">
                    <h5>
                        <b>Codigo Fasecolda</b>
                    </h5>
                    <small id="fasecolda-code">...</small>
                </div>
                <div class="col-md-12">
                    <hr />
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Tipo de vehiculo</label>
                        <div class="col-lg-10" id="type-vehicle">
                            <div class="radio">
                                <label> <input type="radio" name="type-vehicle" id="type-vehicle"
                                               checked="" value="1" data-frame="lightweight">Liviano
                                </label>
                            </div>
                            <div class="radio">
                                <label> <input type="radio" name="type-vehicle" id="type-vehicle"
                                               value="2" data-frame="heavy"> Pesado
                                </label>
                            </div>
                            <div class="radio">
                                <label> <input type="radio" name="type-vehicle" id="type-vehicle"
                                               value="3" data-frame="motorcycle"> Motocicleta
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Valoraci&oacute;n
                            Visual</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="visual-valoration" id="select-item-inspection">

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Kilometraje</label> <input
                            class="form-control" id="mileage" name="mileage" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Descuento</label> <input
                            class="form-control col-md-10 " id="discount" name="discount" type="text">
                    </div>
                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">Observaciones</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="observations" name ="observations"rows="3" id="textArea"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Sistemas</label><br /> <input type="file" id="systems" name="systems[]" multiple>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Vehiculo</label><br /> <input type="file" id="vehicle" name="vehicle[]" multiple>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Asegurable</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="aproved" name="aproved">
                                <option value="0">-- Seleccione Uno --</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                    </div>
                    <a class="btn btn-success" id="add-inspection">Guardar</a>
                </div>

                <iframe scrolling="no" class="col-md-9" id="valoration-visual"
                        src="../../View/Binnacle/Inspection/inspectionLightweight.php"
                        style="background-color: rgba(0, 0, 0, 0.0); border: none; height: 500px; overflow: hidden;"
                        class="col-md-12 col-lg-12 col-sm-12 col-xs-12 embed-responsive"> </iframe>
            </form>
        </fieldset>

    </body>

</html>