<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Lang extends CI_Lang {
	function __construct(){
		parent::__construct();
	}

	/**
	*	line(): Se extiende función Line para que acepte expresiones regulares,
	*	Se agrega un segundo y tercer parámetro opcionales.
	*	@param string key de la linea
	*	@param string | array patron de coincidencia (o array de  patrones)
	*	@param sting | array por el que se va a remplazar las coincidencias que contiene el pattern
	*	@author Israel Rocha
	*
	*/

	function line($input = '', $pattern=null, $replace=null){
		$line = parent::line($input);
		if($pattern !== null && $replace !== null){
			$line = preg_replace($pattern, $replace, $line);
		}
		return $line;
	}
}