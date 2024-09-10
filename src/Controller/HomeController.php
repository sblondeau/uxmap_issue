<?php

namespace App\Controller;

use Symfony\UX\Map\Map;
use Symfony\UX\Map\Point;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $map = (new Map())
            ->center(new Point(46.903354, 1.888334))
            ->zoom(5);

        return $this->render('home/index.html.twig', [
            'map' => $map,
        ]);
    }
}
