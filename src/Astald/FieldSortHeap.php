<?php 

/*
 * Folderia, Klasör sınıfı
 *  
 * Author:  Osman YILMAZ 
 * Email:   osmnylmz@outlook.com
 * Web:     http://www.astald.com - www.osmnylmz.com
 * 
 * Created Date: 23.03.2016
 *
**/

namespace Astald;

use SplHeap;

class FieldSortHeap extends SplHeap
{
	private $sortField;

	public function __construct($sortField)
	{
		$this->sortField = $sortField;
	}

	public function compare($a, $b)
	{
		return strnatcmp($b[$this->sortField], $a[$this->sortField]);
	}
}