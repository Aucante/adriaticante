<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/api")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user", methods={"POST"})
     */
    public function create(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        $userRaw = json_decode($request->getContent(), JSON_OBJECT_AS_ARRAY)["user"];
        $errors = $validator->validate($userRaw, [
           new Collection([
               'email' => new Email(),
               'password' => new Length(['min' => 6, 'max' => 10])
           ])
        ]);
        if(!count($errors)) {
            $user = new User();
            $user->setEmail($userRaw['email']);
            $user->setPassword($userRaw['password']);
            $entityManager->persist($user);
            $entityManager->flush();
        }

        return new JsonResponse('');

    }

    /**
     * @Route("/user", name="user_get", methods={"GET"})
     */
    public function getUserId(Request $request, UserRepository $userRepository): JsonResponse
    {
        $id = $request->query->get('ID');
        $userForm = $userRepository->find($id);

        return new JsonResponse(['user' => $userForm], $userForm ? 200 : 404);

    }
}
