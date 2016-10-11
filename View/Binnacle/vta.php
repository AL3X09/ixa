<!DOCTYPE HTML PUBLIC "-//WC//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Cp1353">
        <title>Insert title here</title>
        <script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/functions.js"></script>
        <script type="text/javascript" src="../../js/Binnacle/vta.js"></script>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
    </head>

    <body style="background-color: rgba(0, 0, 0, 0.0)">


        <fieldset>
            <form class="form-horizontal" id="form-vta" enctype="multipart/form-data" action="#">
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

                    <div class="form-group col-md-12">
                        <label>Sistemas</label><br /> <input type="file" id="systems" name="systems[]" multiple>
                    </div>     
                    <div class="form-group">
                        <label for="textArea" class="control-label">Observaciones</label>
                        <div class="col-lg-12">
                            <textarea class="form-control" id="comments" name ="comments" rows="3" id="textArea"></textarea>
                        </div>
                    </div>
                    <a class="btn btn-success" id="add-vta">Guardar</a>
                </div>
            </form>
        </fieldset>

    </body>

</html>