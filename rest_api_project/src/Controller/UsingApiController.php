<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//implementing when package Google Translate PHP
// could be loadedwith instruction 'composer require stichoza/google-translate-php'
// use Stichoza\GoogleTranslate\GoogleTranslate;


Use App\Services\clientReaderCsv;
 
Use App\services\clientReaderJsons;


class UsingApiController extends AbstractController
{
    /*private $customerRepository;

    /**
     * @Route("/question/{lang}", name="question_get", methods={"GET"})
     */
    public function readcsv(Request $request, $lang, clientReaderCsv $clienteReadercsv): JsonResponse
    {
        //$tr = new GoogleTranslate('en'); 
        //$tr->setSource(); // Detect language automatically
        //$tr->setTarget($lang); // Translate to Georgian
        $file = Reader::createFromPath('%kernel.root_dir%/../src/App/Data/questions.csv');
        $data =$clienteReadercsv->readingcsv($file);
        $data = json_decode($request->getContent(), true);

        //the translated string is the one wich must be finallyy tranmited
        //$translatedstring=GoogleTranslate::trans($data, 'en', $lang);   

        if (empty($data) || empty($translatedstring)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        return new JsonResponse(['response' => $translatedstring], Response::HTTP_CREATED);
    }

    /**
     * @Route("/question/", name="question_post", methods={"POST"})
     */
        public function readjson(Request $request): JsonResponse
    {

        //modifiying code for retriving data from readed json file

        $data = json_decode($request->getContent(), true);

        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $phoneNumber = $data['phoneNumber'];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($phoneNumber)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->customerRepository->saveCustomer($firstName, $lastName, $email, $phoneNumber);

        return new JsonResponse(['status' => 'Customer created!'], Response::HTTP_CREATED);
    }
}