<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
        <title>Insert title here</title>
        <script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/functions.js"></script>
        <script type="text/javascript" src="../../js/Request.js"></script>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../../css/font-awesome.css">
    </head>
    <body style="background-color: rgba(0, 0, 0, 0.0)">
        <div id="step-one">
            <h3>Crear Solicitud</h3>
            <legend>
                <h5>Paso 1: Datos del cliente</h5>
            </legend>
            <!--el enctype debe soportar subida de archivos con multipart/form-data-->
            <form enctype="multipart/form-data" class="formulario" action="#">


                <div class="form-group col-md-3">
                    <label for="inputText" class="col-lg-2 control-label">Placa</label>
                    <div class="col-lg-10">
                        <input name="placa" type="text" class="form-control"
                               placeholder="Placa" id="license-plate" style="text-transform:uppercase;" >
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="inputText" class="col-lg-2 control-label">Nombre</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="Nombre"
                               id="name">
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="inputText" class="col-lg-2 control-label">Apellido</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="Apellido"
                               id="lastname">
                    </div>
                </div>

                <div class="form-group col-md-3">
                    <label for="inputSelect" class="col-lg-2 control-label">Tipo
                        Documento</label>

                    <div class="col-lg-10">
                        <select class="form-control" id="select-document-type">
                        </select>
                    </div>

                </div>

                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Numero de
                        documento</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control"
                               placeholder="Numero de documento" id="identification-number">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Lugar
                        Expedici&oacute;n</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select-city">

                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Tel&eacute;fono
                        Fijo</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control"
                               placeholder="Tel&eacute;fono Fijo" id="phone">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Extenci&oacute;n</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control"
                               placeholder="Extenci&oacute;n" id="extention">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Celular</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="Celular"
                               id="cellphone">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Direcci&oacute;n</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control"
                               placeholder="Ditecci&oacute;n" id="address">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Tipo de
                        usuario</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select-type-client">

                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputEmail" class="col-lg-2 control-label">Servicio</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select-type-service">

                        </select>
                    </div>
                </div>

        </div>
        <!-- 	ETAPA 2 -->
        <div id="step-two">
            <legend>
                </h6>
                Paso 2: Datos del Vehiculo
                </h6>
            </legend>
            <!--            <div class="form-group col-md-3">
                            <label for="inputEmail" class="col-lg-2 control-label">Turno</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" placeholder="Turno"
                                       id="turn">
                            </div>
                        </div>-->
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">Marca</label>

                <div class="col-lg-10">
                    <select class="form-control" id="select-brands">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">Linea</label>

                <div class="col-lg-10">
                    <select class="form-control" id="select-lines">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">Tipo
                    Referencia</label>

                <div class="col-lg-10">
                    <select class="form-control" id="select-type-reference">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">Cilindraje</label>

                <div class="col-lg-10">
                    <select class="form-control" id="select-cylinder-capacity">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">Servicio</label>

                <div class="col-lg-10">
                    <select class="form-control" id="select-service">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">Carroceria</label>
                <div class="col-lg-10">
                    <select class="form-control" id="select-bodywork">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">Combustible</label>

                <div class="col-lg-10">
                    <select class="form-control" id="select-gas">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">Capacidad</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Capacidad"
                           id="capacity">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inputSelect" class="col-lg-2 control-label">modelo</label>

                <div class="col-lg-10">
                    <select class="form-control" id="select-model">
                    </select>
                </div>

            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">Color</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Color"
                           id="color">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">N&uacute;mero
                    de Motor</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control"
                           placeholder="N&uacute;mero de Motor" id="motor-number">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">N&uacute;mero
                    de Serie</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control"
                           placeholder="N&uacute;mero de Serie" id="serie-number">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">N&uacute;mero
                    de Chasis</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control"
                           placeholder="N&uacute;mero de Chasis" id="chasis-number">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="disabledInput">Codigo Fasecolda</label>
                <input class="form-control" id="input-fasecolda-code" type="text"
                       placeholder="Codigo Fasecolda" disabled="">
            </div>
            <div class="form-group col-md-3">
                <label class="control-label" for="disabledInput">Valor fasecolda</label>
                <input class="form-control" id="input-fasecolda-value" type="text"
                       placeholder="Valor Fasecolda" disabled="">
            </div>
            <div class="col-md-12">
                <hr>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">Sede</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Sede"
                           id="headquarters">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">Solicitado por</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Solicitado Por"
                           id="request-by">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">Asegurado</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Asegurado"
                           id="insured">
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="inputEmail" class="col-lg-2 control-label">Intermediario</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" placeholder="Intermediario"
                           id="intermediary">
                </div>
            </div>
            <div class="form-group col-md-12">
                <p>El cargue de la placa unicamente es <b>valido</b> si se cargar los archivos con los nombres <b>&quot;VEHICULO&quot;</b>,<b>&quot;TARJETA_FRENTE&quot;</b> y <b>&quot;TARJETA_ATRAS&quot;</b></p>
            </div>
            <div class="form-group col-md-12">
                <label>Adjuntar Imagenes</label><br /> <input type="file" id="file"
                                                              name="file[]" multiple>
                                                      <!-- 			<input name="file[]" type="file" id="imagen" maxlength="4" multiple accept=".jpeg,.png,.jpg,.gif"/><br /> <br /> -->
                                                      <!-- 		<input name="archivo" type="file" id="imagen"  multiple/><br /> <br /> -->
                                                      <!-- 			<input	type="button" value="Subir imagen" /><br /> -->
                <!-- 	div para visualizar mensajes-->
                <div class="messages"></div>
            </div>
            <!-- 	div para visualizar en el caso de imagen-->
            <div class="showImage"></div>

        </div>
        <button type="reset" value="Reset"
                class="btn btn-error col-md-2 col-md-offset-1">Borrar Campos</button>
        <button class="btn btn-success col-md-2 col-md-offset-5" id="continue">Continuar</button>
        <button class="btn btn-success col-md-2 col-md-offset-5" id="send">Enviar</button>
    </form>


</body>
</html>