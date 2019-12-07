<?php

namespace App\Util


class ReaderJson{
	public function jsoncread($value){
		return str_rot13($value);
	}
}