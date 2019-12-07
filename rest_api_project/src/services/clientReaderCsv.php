<?php
// src/Service/MessageGenerator.php
namespace App\Service

Use App\Util\ReaderCsv


class clientReader
{
    private $reader;

    public function __construct(Reader $reader){
s
        $this->reader = $reader;
    }
    public function readingcsv($file)
    {
        $readedFile = $this->reader->csvread($file);

        return json_encode($readedFile);   
    }
}