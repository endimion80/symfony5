<?php

namespace App\Util;
use App\Entity\QuestionList;
use App\Entity\Question;
use App\Entity\Choice;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;

//needs adding the libraries  wich permits charging the csv files
// parameters wich will use are the file name 

class ReaderCsv{
	public function csvcread($value){
		return str_rot13($value);
	}
}