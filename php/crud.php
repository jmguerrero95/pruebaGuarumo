<?php
//incluye la clase Db
require_once('conex.php');
 
	class CrudPost{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo post
		public function insertar($post){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO post values(NULL,:imagen,:titulo,:descripcion,:fecha)');
			$insert->bindValue('imagen',$post->getImagen());
			$insert->bindValue('titulo',$post->getTitulo());
			$insert->bindValue('descripcion',$post->getDescripcion());
			$insert->bindValue('fecha',$post->getFecha());
			$insert->execute();
 
		}
 
		// método para mostrar todos los post
		public function mostrar(){
			$db=Db::conectar();
			$listaPost=[];
			$select=$db->query('SELECT * FROM post');
 
			foreach($select->fetchAll() as $post){
				$mypost= new Post();
				$mypost->setId($post['id']);
				$mypost->setImagen($post['imagen']);
				$mypost->setTitulo($post['titulo']);
				$mypost->setDescripcion($post['descripcion']);
				$mypost->setFecha($post['fecha']);
				$listaPost[]=$mypost;
			}
			return $listaPost;
		}
 
		// método para eliminar un post, recibe como parámetro el id del post
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM post WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un post, recibe como parámetro el id del post
		public function obtener($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM post WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$post=$select->fetch();
			$mypost= new post();
			$mypost->setId($post['id']);
			$mypost->setImagen($post['imagen']);
			$mypost->setTitulo($post['titulo']);
			$mypost->setDescripcion($post['descripcion']);
			$mypost->setFecha($post['fecha']);
			return $mypost;
		}
 
		// método para actualizar un post, recibe como parámetro el post
		public function actualizar($post){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE post SET imagen=:imagen, titulo=:titulo,descripcion=:decripcion,fecha=:fecha  WHERE ID=:id');
			$actualizar->bindValue('imagen',$post->getImagen());
			$actualizar->bindValue('titulo',$post->getTitulo());
			$actualizar->bindValue('descripcion',$post->getDescripcion());
			$actualizar->bindValue('fecha',$post->getFecha());
			$actualizar->execute();
		}
	}
?>