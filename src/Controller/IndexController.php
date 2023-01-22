<?php

namespace App\Controller;

use App\Service\AService;
use App\Service\BService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
class IndexController
{
    #[Route(path: '/')]
    public function __invoke(Request $request, AService $AService, BService $BService): JsonResponse
    {
        return new JsonResponse([
            'a' => $AService->someMethod(),
            'b' => $BService->someMethod(),
        ]);
    }
}
