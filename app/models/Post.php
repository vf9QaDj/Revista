<?php
class Post extends Base {

	//protected $table = 'posts';
	//PROTECCION CONTRA INYECCION DE CODIGO POR ASIGNACION MASIVA:
	protected $fillable = ['title','content'];
	// ... $filters = [<filtro_1>,<filtro_2>, ... , <filtro_n>];
	public static $filters = ['search'];
	
	public static function filterBySearch($q, $value)
	{
		// Consulta: Título contenga $value
		// Para búsquedas parciales: 'LIKE' y comodines (%)
		$q->where('title', 'LIKE', "%$value%");
	}
}