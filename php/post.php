<?php
	class Post{
		private $id;
		private $imagen;
		private $titulo;
		private $descripcion;
		private $fecha;

		function __construct(){}

		public function getImagen(){
		return $this->imagen;
		}

		public function setImagen($imagen){
			$this->imagen = $imagen;
		}

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}

		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function getFecha(){
			return $this->fecha;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}
	}
?>