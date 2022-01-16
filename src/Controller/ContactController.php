<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Optional;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/api")
 */
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods={"POST"})
     */
    public function create(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        $contactRaw = json_decode($request->getContent(), JSON_OBJECT_AS_ARRAY)["contact"];
        $errors = $validator->validate($contactRaw, [
            new Collection([
                'lastname' => new Length(['min' => 2, 'max' => 4, 'minMessage' => 'trop petit', 'maxMessage' => 'trop grand']),
                'firstname' => new Optional(),
                'email' => new Optional(),
                'phone' => new Optional(),
                'message' => new Optional(),
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

        return new JsonResponse(['errors' => $errorsAsArray]);
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
}
