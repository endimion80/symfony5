<?php

namespace App\Util;
//needs adding the libraries  wich permits charging the csv files
// parameters wich will use are the file name 

class ReaderCsv{
	public function csvcread($value){
		return str_rot13($value);
	}
}