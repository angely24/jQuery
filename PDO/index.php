<!doctype html>
<!-- Analísis y Desarrollo de Sistemas de Informción
Ficha: 2252471
Aprendiz: Angely Rojas Rodriguez
Objetivo: Realizar ejercicios con jQuery -->
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!--llamamos nuestros estilos css-->
	<link rel="stylesheet" href="css/main.css">

	<title>PHP Jquery Ajax CRUD Example</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


	<script type="text/javascript">
		var url = "http://localhost/PDO/";
	</script>


	<script src="js/item-ajax.js"></script>
</head>

<body>
	<main class="container vh-100 vw-100">
		<div class="row">
			<!--ENCABEZADO-->
			<header class="col-12 text-center fs-1 border">
				<img src="Imagenes/SENA.png" class="rounded float-start" alt="...">
				<p class=" mb-0 p-2 fs-4 lead"> <strong> ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACIÓN, FICHA:2252472,
					CENTRO DE BIOTECNOLOGIA AGROPECUARIA, MOSQUERA-CUNDINAMARCA</strong></p>
			</header>
			<!--MENÚ PRINCIPAL-->
			<nav class="navbar navbar-expand-lg navbar-light navbar-expandnavbar-primary border col-12 ">
				<div class="container">
					<a class="navbar-brand " href="http://localhost/jQuery/pruebas.html">
						<span class="fs-2 text-primary fw-bold">jQuery</span>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
							<li class="nav-item">
								<a class="nav-link" href="http://localhost/jQuery/prueba_ajax-json.html">pruebaMYSQLI</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost/jQuery/Prueba_ajax-jsonPDO.htmlhtml">Prueba_ajax-jsonPDO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost/jQuery/PDO.html">PDO</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link" href="http://localhost/jQuery/PDO/">CRUD</a>
                            </li>
						</ul>
					</div>
				</div>
			</nav>
			<!--MENÚ ALTERNO-->
			<nav class=" navbar-lg  navbar-expandnavbar-primary  navbar-light p-3 border col-sm-4 col-md-2 d-none d-md-block ">
				<div class="container col-sm-4 col-md-2 d-none d-md-block">
					<a class="navbar-brand" href="http://localhost/jQuery/pruebas.html">
						<span class="fs-2 text-primary fw-bold">jQuery</span>
					</a>
					<div class="col-sm-4 col-md-2 d-none d-md-block">
					<button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					</div>
					<div class="navbar" id="navbarSupportedContent1">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
						<li class="nav-item">
								<a class="nav-link" href="http://localhost/jQuery/prueba_ajax-json.html">pruebaMYSQLI</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost/jQuery/Prueba_ajax-jsonPDO.htmlhtml">Prueba_ajax-jsonPDO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="http://localhost/jQuery/PDO.html">PDO</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link" href="http://localhost/jQuery/PDO/">CRUD</a>
                            </li>
						</ul>
					</div>
				</div>
			</nav>
			<!--CUERPO-->
			<div class="container col-xs-12 col-md-10 border">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="pull-left">
							<h2>PHP Jquery Ajax CRUD Example</h2>
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
								Crear item
							</button>
						</div>
					</div>
				</div>

				

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th width="200px">Action</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>


				<ul id="pagination" class="pagination-sm"></ul>


				<!-- Create Item Modal -->
				<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								<h4 class="modal-title" id="myModalLabel">Creando Item</h4>
							</div>


							<div class="modal-body">
								<form data-toggle="validator" action-data="api/create.php" method="POST">


									<div class="form-group">
										<label class="control-label" for="title">Title:</label>
										<input type="text" name="title" class="form-control" data-error="Please enter title." required />
										<div class="help-block with-errors"></div>
									</div>


									<div class="form-group">
										<label class="control-label" for="title">Description:</label>
										<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
										<div class="help-block with-errors"></div>
									</div>


									<div class="form-group">
										<button type="submit" class="btn crud-submit btn-success">Submit</button>
									</div>


								</form>


							</div>
						</div>


					</div>
				</div>


				<!-- Edit Item Modal -->
				<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								<h4 class="modal-title" id="myModalLabel">Edit Item</h4>
							</div>


							<div class="modal-body">
								<form data-toggle="validator" action="api/update.php" method="put">
									<input type="hidden" name="id" class="edit-id">


									<div class="form-group">
										<label class="control-label" for="title">Title:</label>
										<input type="text" name="title" class="form-control" data-error="Please enter title." required />
										<div class="help-block with-errors"></div>
									</div>


									<div class="form-group">
										<label class="control-label" for="title">Description:</label>
										<textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
										<div class="help-block with-errors"></div>
									</div>


									<div class="form-group">
										<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
									</div>


								</form>


							</div>
						</div>
					</div>
				</div>


			</div>

			<!-- PIE DE PAGINA-->
			<footer class="col-12 text-center fs-1 border">
				<p>
					<img src="Imagenes/w3c.png" class="rounded float-start" alt="certificado W3C">
				</p>
				<p class=" lead fs-4"> <strong> COPYRIGHT © Certificado W3C Angely Rojas Rodriguez.</strong></p>
			</footer>

		</div>
	</main>
</body>

</html>