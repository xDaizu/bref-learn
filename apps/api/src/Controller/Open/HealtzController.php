<?php declare(strict_types=1);

namespace App\Controller\Open;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HealtzController extends AbstractController
{
    /**
     * @Route("/", name="healtz", methods={"GET"})
     * @Route("/healtz", name="healtz", methods={"GET"})
     */
    public function index()
    {
        return new JsonResponse(['status' => 'ok']);
    }
}
