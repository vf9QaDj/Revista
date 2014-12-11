<?php

class Base extends Eloquent {

	public static $filters = [];
	// BUSCAR:
	public static function search(array $data = array())
	{
		$data = array_only($data, static::$filters);
		$data = array_filter($data,'strlen'); // Excluimos campos vacíos del arreglo $data
		// $q: Query
		$q = Post::select();

		foreach ($data as $field => $value)
		{
			if (isset($data[$field]))  // si esl campo está presente
			{
				// slug_url --> filterBySlugUrl
				$filterMethod = 'filterBy'.studly_case($field);

				if (method_exists(get_called_class(),$filterMethod))
				{
					static::$filterMethod($q,$value);
				}
				else
				{
					$q->where($field, $data[$field]);
				}
			}
		}
		return $q->paginate();
	}
}