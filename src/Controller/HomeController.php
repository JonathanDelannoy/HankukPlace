<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route ("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render("accueil/home.html.twig");
    }

    /**
     * @Route ("/payment", name="payment")
     */
    public function payment(): Response
    {
        return $this->render("payment/payment.html.twig");
    }

    /**
     * @Route ("/recette", name="recette")
     */
    public function recettes(): Response
    {
        return $this->render("recette/recette.html.twig");
    }

    /**
     * @Route ("/visite", name="visite")
     */
    public function visites(): Response
    {
        return $this->render("visite/visite.html.twig");
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function generateToken()
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }
}
