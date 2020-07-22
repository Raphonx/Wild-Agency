<?php

namespace App\Controller;

use App\Form\SearchType;
use App\Repository\PropertyRepository;
use App\Services\SearchData;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(PropertyRepository $propertyRepository, Request $request): Response
    {
        $data = new SearchData();
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $properties = $propertyRepository->findSearch($data);

        return $this->render('home/index.html.twig', [
            'properties' => $propertyRepository->findLatest(),
            'form' => $form->createView(),
            'search' => $properties
        ]);
    }
}

