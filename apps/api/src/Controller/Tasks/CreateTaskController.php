<?php declare(strict_types=1);

namespace App\Controller\Tasks;

use App\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CreateTaskController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/task/create/{name}", name="create_task", methods={"GET"})
     */
    public function __invoke(string $name): JsonResponse
    {
        $task = new Task($name);
        $this->entityManager->persist($task);
        $this->entityManager->flush($task);


        return new JsonResponse($task);
    }
}
