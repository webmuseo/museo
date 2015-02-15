<?php
class Url extends Eloquent {



	
	
	/**
	 * Devuelve el url 
	 *
	 * @return string
	
	public function url()
	{
		return $this->url;
	}
	/**
	 * Devuelve el tipo de la url
	 * 
	 * @return string
	 */
	public function tipo()
	{
		return $this->tipo;
	}
	
	public function local()
	{
		return $this->local;
	}
	
	
	/**
	 * Get the Entradas de la url.
	 *
	 * @return Array(string)
	 */
	public function entradas()
	{
		$entradas = Array();
		foreach ($this->belongsToMany('Url','urls_entradas') as $entrada){
			array_push($entradas, Url::to($entrada));
		}
		return $entradas;
	}

	

}