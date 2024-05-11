<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProduitController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig');
    }

    #[Route('/produit-add', name: 'produit-add')]
    public function produitAdd(): Response
    {
        return $this->render('produit/produit-add.html.twig');
    }

    #[Route('/produit-list', name: 'produit-list')]
    public function produitList(): Response
    {
        return $this->render('produit/produit-list.html.twig');
    }
}
