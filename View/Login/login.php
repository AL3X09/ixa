<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Accesso Corporativo</title>
<script type="text/javascript" src="../../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../../js/functions.js"></script>
<script type="text/javascript" src="../../js/Login.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/bootstrap-theme.css">
<link rel="stylesheet" href="../../css/style-corporative.css">
<link rel="stylesheet" href="../../css/font-awesome.css">
</head>
<body>
	<div id="container" style="background-color: rgba(0, 0, 0, 0.0)"	class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 jumbotron">
		<i class="fa fa-user icon-small col-md-offset-5" ></i>
		<div class="input-group">
			<span class="input-group-addon" ><i class="fa fa-user "></i></span> <input type="text" id="user" class="form-control" placeholder="Usuario" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<span class="input-group-addon" ><i class="fa fa-unlock-alt"></i></span><input type="password" id="password" class="form-control" placeholder="Contrase&ntilde;a" aria-describedby="basic-addon1">
		</div>
		<button type="button" class="btn btn-success input-group col-md-12" data-method="1" data-toggle="modal" data-target="#wmodal"
				id="login">Ingresar</button>
	</div>
	
	<div class="modal fade" id="wmodal" tabindex="-1" role="dialog" aria-labellidby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>				
				</div>
				
				<div class="modal-body" id="modal-body">
					<span id="message"></span>
				</div>
				<div class="modal-footer" id="modal-footer">
					<a class="btn btn-dange btn-xs" class="close" data-dismiss="modal">Cerrar</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>