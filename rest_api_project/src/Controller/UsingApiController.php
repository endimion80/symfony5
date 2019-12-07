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
    public function readcsv(Request $request, $lang): JsonResponse
    {
        //$tr = new GoogleTranslate('en'); 
        //$tr->setSource(); // Detect language automatically
        //$tr->setTarget($lang); // Translate to Georgian

        //$translatedstring=GoogleTranslate::trans('Hello again', 'en', $lang);   


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

    /**
     * @Route("/question/", name="question_post", methods={"POST"})
     */
        public function readjson(Request $request): JsonResponse
    {
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