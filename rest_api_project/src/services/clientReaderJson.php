<?php
namespace App\Services;

Use App\Util\ReaderCsv;


class clientReaderJson
{
    private $reader;

    public function __construct(Reader $reader){

        $this->reader = $reader;
    }
   public function readingjson($file)
    {
        $readeadFile = $this->reader->jsonread($file);

        return json_encode($readedFile);     
    }
}








