<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user", methods={"POST"})
     */
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $userRaw = json_decode($request->getContent(), JSON_OBJECT_AS_ARRAY)["user"];
        $user = new User();
        $user->setEmail($userRaw['email']);
        $user->setPassword($userRaw['password']);
        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse('');

    }
}
