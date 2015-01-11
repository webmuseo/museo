<?php
class Evento extends Eloquent {


	/**
	 * Devuelve el titulo de la entrada formateado
	 *
	 * @return string
	 */
	public function fechainicio()
	{
		return $this->fecha_inicio;
	}
	/**
	 * Devuelve el subtitulo de la entrada formateado
	 *
	 * @return string
	 */
	public function fechafin()
	{
		return $this->fecha_fin;
	}
	
		
	public function titulo()
	{
		return $this->titulo;
	}
	/**
	 * Devuelve el contenido de la entrada formateado
	 *
	 * @return string
	 */
	public function contenido()
	{
		return nl2br($this->contenido);
	}

	/**
	 * Get autor de la entrada.
	 *
	 * @return User
	 */
	public function autor()
	{
		return $this->belongsTo('User', 'user_id');
	}

	
}