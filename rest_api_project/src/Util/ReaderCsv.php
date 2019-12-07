<?php

namespace App\Util


class ReaderCsv{
	public function csvcread($value){
		return str_rot13($value);
	}
}