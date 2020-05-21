<?php
//incluye la clase Libro y CrudLibro
require_once('crud.php');
require_once('post.php');

$crud= new CrudPost();
$post= new Post();

	// si el elemento insertar no viene nulo llama al crud e inserta un post
	if (isset($_POST['insertar'])) {
		$post->setImagen($_POST['imagen']);
		$post->setTitulo($_POST['titulo']);
		$post->setDescripcion($_POST['descripcion']);
		$post->setFecha($_POST['fecha']);
		//llama a la función insertar definida en el crud
		$crud->insertar($post);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el post
	}elseif(isset($_POST['actualizar'])){
		$post->setId($_POST['id']);
		$post->setImagen($_POST['imagen']);
		$post->setTitulo($_POST['titulo']);
		$post->setDescripcion($_POST['descripcion']);
		$post->setFecha($_POST['fecha']);
		$crud->actualizar($post);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un post
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>