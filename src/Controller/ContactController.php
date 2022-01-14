<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods={"POST"})
     */
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $contactRaw = json_decode($request->getContent(), JSON_OBJECT_AS_ARRAY)["contact"];
        $contact = new Contact();
        $contact->setLastname($contactRaw['lastname']);
        $contact->setFirstname($contactRaw['firstname']);
        $contact->setEmail($contactRaw['email']);
        $contact->setPhone($contactRaw['phone']);
        $contact->setMessage($contactRaw['message']);
        $entityManager->persist($contact);
        $entityManager->flush();


        return new JsonResponse('');
    }
}
