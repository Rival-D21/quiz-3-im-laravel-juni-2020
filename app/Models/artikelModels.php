<?php

namespace app\Models;

/**
 * 
 */
use Illuminate\Support\Facades\DB;
class artikelModels{	
	public static function get_all()
	{
		# code...
		$artikel = DB::table('artikel')->get();
		return $artikel;
	}
	public static function save($data){
		$new_artikel = DB::table('artikel')->insert($data);
		return $new_artikel;
	}
}