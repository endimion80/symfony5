<?php
// adding with command composer require league/csv:^8.0

namespace App\Util;
use App\Entity\QuestionList;
use App\Entity\Question;
use App\Entity\Choice;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Reader;
//needs adding the libraries  wich permits charging the csv files
// parameters wich will use are the file name 

class ReaderCsv{
	/**
     * Configure
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
	 protected function configure()
    {
        $this
            ->setName('csv:import')
            ->setDescription('Imports the CSV data file')
        ;	
    }


//TODO needs implemneting all the retriving data
//


	public function csvcread($value){

		        $reader = Reader::createFromPath($value);
		        $results = $reader->fetchAssoc();


		        foreach ($results as $row) {

               // create new athlete
               $athlete = (new QuestionList())
               	 ->setFirstName($row['first_name'])
               	 ->setLastName($row['last_name'])
               	 ->setDateOfBirth(new \DateTime($row['date_of_birth']))
               	 ->setWeight($row['weight'])
              ;

                $this->em->persist($athlete);

	            // create new Competitor
    	        $competitor = (new Competitor())
        	     ->setCategory($row['category'])
         		 ->setCompetition($row['competition'])
              ;

            	$this->em->persist($competitor);

            	$athlete->setCompetitor($competitor);
        		}

        		$this->em->flush();

        		$io->success('Command exited cleanly!');
    			
			 
        	   }









				return str_rot13($value);
	}
}