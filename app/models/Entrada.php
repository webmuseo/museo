<?php
class Entrada extends Eloquent {	
	
	/**
	 * Devuelve el titulo de la entrada formateado
	 *
	 * @return string
	 */
	public function titulo()
	{
		return $this->titulo;
	}
	/**
	 * Devuelve el subtitulo de la entrada formateado
	 *
	 * @return string
	 */
	public function subtitulo()
	{
		return $this->titulo;
	}
	
	public function categoria()
	{
		return $this->categoria;
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

	
	/**
	 * Get the fecha en la que fue creada la entrada.
	 *
	 * @param \Carbon|null $date
	 * @return string
	 */
	public function date($date=null)
	{
		if(is_null($date)) {
			$date = $this->created_at;
		}

		return String::date($date);
	}

	/**
	 * Get the URLs de la entrada.
	 *
	 * @return Array(string)
	 */
	public function urls()
	{
		return $this->belongsToMany('Enlace', 'enlaces_entradas');
	}

	/**
	 * Returns la fecha de creacion de la entrada :)
	 *
	 * @return string
	 */
	public function created_at()
	{
		return $this->date($this->created_at);
	}

	/**
	 * Returns la fecha de actualizacion de la entrada :)
	 *
	 * @return string
	 */
	public function updated_at()
	{
		return $this->date($this->updated_at);
	}

}