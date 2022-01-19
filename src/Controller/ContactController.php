<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/api")
 */
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_post", methods={"POST"})
     */
    public function create(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        $contactRaw = json_decode($request->getContent(), JSON_OBJECT_AS_ARRAY)["contact"];
        $errors = $validator->validate($contactRaw, [
            new Collection([
                'lastname' => new Length(['min' => 2, 'max' => 25, 'minMessage' => 'This field should be at least 2 long', 'maxMessage' => 'The maximum length allowed is 25']),
                'firstname' => new Length(['min' => 2, 'max' => 25, 'minMessage' => 'This field should be at least 2 long', 'maxMessage' => 'The maximum length allowed is 25']),
                'email' => new Email(),
                'phone' => new NotBlank(),
                'message' => new Length(['min' => 2, 'max' => 255, 'minMessage' => 'This field should be at least 2 long', 'maxMessage' => 'The maximum length allowed is 255']),
            ])
        ]);

        $errorsAsArray = $this->getErrorsAsArray($errors);

        if(count($errors) == 0) {
            $contact = new Contact();
            $contact->setLastname($contactRaw['lastname']);
            $contact->setFirstname($contactRaw['firstname']);
            $contact->setEmail($contactRaw['email']);
            $contact->setPhone($contactRaw['phone']);
            $contact->setMessage($contactRaw['message']);
            $entityManager->persist($contact);
            $entityManager->flush();

        }

        return new JsonResponse(['errors' => $errorsAsArray], count($errors) ? 400 : 201 );
    }

    private function getErrorsAsArray(ConstraintViolationListInterface $constraintViolationList): array
    {
        $errors = [];

        foreach ($constraintViolationList as $currentViolation)
        {

            assert($currentViolation instanceof  ConstraintViolationInterface);
            $errors[$currentViolation->getPropertyPath()] = $currentViolation->getMessage();
        }
        return $errors;
    }

    /**
     * @Route("/contact", name="contact_get", methods={"GET"})
     */
    public function getContact(Request $request, ContactRepository $contactRepository): JsonResponse
    {
        $id = $request->query->get('ID');
        $contactForm = $contactRepository->find($id);

        return new JsonResponse(['contact' => $contactForm], $contactForm ? 200 : 404);
    }


}
