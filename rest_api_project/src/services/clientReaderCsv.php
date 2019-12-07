<?php
namespace App\Services;

Use App\Util\ReaderCsv;


class clientReaderCsv
{
    private $reader;

    public function __construct(Reader $reader){

        $this->reader = $reader;
    }
    public function readingcsv($file)
    {
        $readedFile = $this->reader->csvread($file);

        return json_encode($readedFile);   
    }
}