<?php
class Entrada {
	private $id;
	private $titulo;
	private $subtitulo;
	private $autor;
	private $contenido;
	private $fechaPublicacion;
	private $fechaModificacion;
	private $autorModificacion;
	private $urlsFotos;
	
	public function __construct() {
	}
	
	
	public function getId() {
		return $this->Id;
	}
	public function setId($value) {
		$this->Id = $value;
	}
	public function getTitulo() {
		return $this->titulo;
	}
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
		return $this;
	}
	public function getSubtitulo() {
		return $this->subtitulo;
	}
	public function setSubtitulo($subtitulo) {
		$this->subtitulo = $subtitulo;
		return $this;
	}
	public function getAutor() {
		return $this->autor;
	}
	public function setAutor($autor) {
		$this->autor = $autor;
		return $this;
	}
	public function getContenido() {
		return $this->contenido;
	}
	public function setContenido($contenido) {
		$this->contenido = $contenido;
		return $this;
	}
	public function getFechaPublicacion() {
		return $this->fechaPublicacion;
	}
	public function setFechaPublicacion($fechaPublicacion) {
		$this->fechaPublicacion = $fechaPublicacion;
		return $this;
	}
	public function getFechaModificacion() {
		return $this->fechaModificacion;
	}
	public function setFechaModificacion($fechaModificacion) {
		$this->fechaModificacion = $fechaModificacion;
		return $this;
	}
	public function getAutorModificacion() {
		return $this->autorModificacion;
	}
	public function setAutorModificacion($autorModificacion) {
		$this->autorModificacion = $autorModificacion;
		return $this;
	}
	public function getUrlsFotos() {
		return $this->urlsFotos;
	}
	public function setUrlsFotos($urlsFotos) {
		$this->urlsFotos = $urlsFotos;
		return $this;
	}
	
	
}
?>