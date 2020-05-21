<?php
	//incluye la clase Libro y CrudLibro
	require_once('php/crud.php');
	require_once('php/post.php');
	$crud=new CrudPost();
	$post= new Post();
	//obtiene todos los libros con el método mostrar de la clase crud
	$listaPost=$crud->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<div class="container-fluid">
		<div class="row pb-5 pt-1" id="cintillo_azul">
			<div class="col-4">
				<div class="d-flex flex-row-reverse">
					<span style="color: white;"><i class="fab fa-twitter pr-4"></i><i class="fab fa-facebook-f pr-3"></i></span>
				</div>
			</div>
			<div class="col-4">
				<p class="text-white text-uppercase">Lorem Ipsum is simply dummy text of the printing</p>
			</div>
			<div class="col-4">
				<p class="text-white text-uppercase">Miercoles 20 de 2022</p>
			</div>			
		</div>
		<div class="row justify-content-center" id="cintillo">
			<div class="col-10 bg-white">
				<!--<img src="img/andi.png" id="img_cintillo" class="img-fluid" alt="Responsive image">-->
				<nav class="navbar navbar-expand-lg navbar-white bg-white">
				  <a class="navbar-brand" href="#">
				    <img src="img/andi.png" id="img_cintillo" alt="" loading="lazy">
				  </a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"><i class="fas fa-plus pr-3"></i></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link estilo_enlaces" href="#">Quiénes Somos<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item item-space">
				        <a class="nav-link estilo_enlaces" href="#">Planiación tactica</a>
				      </li>
				      <li class="nav-item dropdown item-space">
				        <a class="nav-link dropdown-toggle estilo_enlaces" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Regiones
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      <li class="nav-item dropdown item-space">
				        <a class="nav-link dropdown-toggle estilo_enlaces" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Sectores
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      <li class="nav-item dropdown item-space">
				        <a class="nav-link dropdown-toggle estilo_enlaces" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Temas de interés
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Action</a>
				          <a class="dropdown-item" href="#">Another action</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				      <li class="nav-item li-pad item-space">
			            <img src="img/buscar.png">
			        </li>
				    </ul>
				  </div>
				</nav>


			</div>

		</div>
		<div class="row">
			<div id="carouselExampleCaptions" class="carousel slide superficial" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/panoramica1.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block tex_carousel">
			        <h3 class="text_carousel1">EVENTOS</h3>
			        <h1 class="text_carousel2">Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit.</h1>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="img/panoramica2.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block tex_carousel">
			        <h3 class="text_carousel1">EVENTOS 2</h3>
			        <h1 class="text_carousel2">Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit.</h1>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="img/panoramica3.jpg" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block tex_carousel">
			        <h3 class="text_carousel1">EVENTOS 3</h3>
			        <h1 class="text_carousel2">Lorem ipsum dolor sit amet,<br/>consectetur adipiscing elit.</h1>
			      </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
		<div class="row">
			



			<div class=" col-12 col-lg-8 seccion-cards">
			<br/><br/><br/>
			<?php foreach ($listaPost as $post){ ?>
				<?php if ($post->getId()==1) { ?>
				<div class="card mb-3 card-1">
				  <img src="img/<?php echo $post->getImagen()?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $post->getTitulo() ?></h5>
				    <p class="card-text"><?php echo $post->getDescripcion() ?></p>
				    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				  </div>
				</div>
				<?php }else{?>
				<div class="row">
					<div class="col-xl-6 col-12 mar-izq">
						<div class="card mb-3">
						  <div class="row no-gutters">
						    <div class="col-4">
						      <img src="img/<?php echo $post->getImagen()?>" class="card-img card_img" alt="...">
						    </div>
						    <div class="col-8">
						      <div class="card-body text-colum">
						        <h5 class="card-title"><?php echo $post->getTitulo()?></h5>
						        <p class="card-text"><?php echo $post->getDescripcion() ?></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="col-xl-6 col-12 mar-der">
						<div class="card mb-3" >
						  <div class="row no-gutters">
						    <div class="col-4">
						      <img src="img/<?php echo $post->getImagen()?>" class="card-img card_img" alt="...">
						    </div>
						    <div class="col-8">
						      <div class="card-body text-colum">
						        <h5 class="card-title"><?php echo $post->getTitulo()?></h5>
						        <p class="card-text"><?php echo $post->getDescripcion() ?></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
				<?php
					};
				  }
				?>
			</div>




			<div class="col-12 col-lg-4 botones">
				<br/><br/>
				<h5>ANDI SOCIAL</h5>
				<a class="twitter-timeline" data-lang="es" data-width="400" data-height="450" data-theme="light" href="https://twitter.com/ANDI_Colombia?ref_src=twsrc%5Etfw">Tweets by ANDI_Colombia</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				<div class="row ico_audioRad">
					<div class="col-6 botones">
						<h5>AUDIOS</h3>
						<img src="img/andiAudio.jpg"><br/>
						<a class="btn btn-primary estil_botones rounded-pill btn-sm" href="#" role="button">Ver mas</a>
					</div>
					<div class="col-6 botones">
						<h5>ANDI TV</h3>
						<img src="img/andiTv.jpg"><br/>
						<a class="btn btn-primary estil_botones rounded-pill btn-sm" href="#" role="button">Ver mas</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row cintillo_footer">
			<div class="col-12">
				<br/>
				<h2 class="text-white text-center">DOCUMENTOS Y TEMAS DE INTERÉS</h2>
				<br/>
				<div class="row">
					<div class="col-1">
						f
					</div>
					<div class="col-10">
						<div class="row">
							<div class="col-3">
								<div class="card" style="width: 94%;">
								  <img src="img/logo.jpg" class="card-img-top img-fluid" alt="...">
								  <div class="card-body botones">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								    <a href="#" class="btn btn-primary estil_botones rounded-pill">Go somewhere</a>
								  </div>
								</div>
							</div>
							<div class="col-3">
								<div class="card" style="width: 94%;">
								  <img src="img/logo.jpg" class="card-img-top img-fluid" alt="...">
								  <div class="card-body botones">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								    <a href="#" class="btn btn-primary estil_botones rounded-pill">Go somewhere</a>
								  </div>
								</div>
							</div>
							<div class="col-3">
								<div class="card" style="width: 94%;">
								  <img src="img/logo.jpg" class="card-img-top img-fluid" alt="...">
								  <div class="card-body botones">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								    <a href="#" class="btn btn-primary estil_botones rounded-pill">Go somewhere</a>
								  </div>
								</div>
							</div>
							<div class="col-3">
								<div class="card" style="width: 94%;">
								  <img src="img/logo.jpg" class="card-img-top img-fluid" alt="...">
								  <div class="card-body botones">
								    <h5 class="card-title">Card title</h5>
								    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								    <a href="#" class="btn btn-primary estil_botones rounded-pill">Go somewhere</a>
								  </div>
								</div>
							</div>
						</div>
						<br/>
					</div>
					<div class="col-1">
						f
					</div>
				</div>
			</div>
		</div>
		<div class="row botones final">
			<div class="col-md-8 col-12 seccion-cards">
				<img src="img/logo_footer.jpg">
				<div class="row">
					<div class="col-3">
						<br/><br/>
						<img src="img/blackberry.jpg" class="img-fluid">
					</div>
					<div class="col-3">
						<br/><br/>
						<img src="img/iphone.jpg" class="img-fluid">
					</div>
					<div class="col-3">
						<br/><br/>
						<img src="img/google.jpg" class="img-fluid">
					</div>
					<div class="col-3">
						<br/><br/>
						<img src="img/windows.jpg" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="col-md-4 col-12">
				<div class="row">
					<div class="col-6">
						<br/><br/>
						<h5>SOCIOS<br/>ESTRATÉGICOS</h5>
						<img src="img/mundo.jpg">
						<br/><br/><br/>
					</div>
					<div class="col-6">
						<br/><br/>
						<h5>PROYECTOS<br/>ESPECIALES</h5>
						<img src="img/futuro.jpg">
						<br/><br/><br/>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row pt-4 fondo_footer">
					<div class="col-4">
						<img src="img/final.png" width="26%">
					</div>
					<div class="col-4 pt-5">
						<h5 class="text-white">MAS LEGALIDAD MENOS CONTRABANDO.</h5>
					</div>
					<div class="col-4">
						<p>Email</p>
						<form class="form-inline">
						  <div class="form-group mx-sm-3 mb-2">
						    <label for="inputPassword2" class="sr-only">Password</label>
						    <input type="password" class="form-control form-control-sm rounded-pill" id="inputPassword2" placeholder="nombre@email.com">
						  </div>
						  <button type="submit" class="btn btn-primary mb-2 btn-sm">SUSCRIBIRME</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center cintillo_inferior">
			<div class="col-10 bg-dark">
				<br/>
				<p class="text_footer text-white">ANDI - Asociación Nacional de Empresarios de Colombia - 2014 Todos los Derechos Reservados</p>
			</div>
		</div>












	</div>








	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/e2e926f0fd.js" crossorigin="anonymous"></script>
</body>
</html>