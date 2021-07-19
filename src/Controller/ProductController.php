<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\CategorySearchType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="product_index", methods={"GET", "POST"})
     */
    public function index(ProductRepository $productRepository, Request $request): Response
    {
        $products = $productRepository->findBy(['active' => true]);
        $form = $this->createForm(CategorySearchType::class);
        $search = $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $products = $productRepository->findCategory(
                $search->get('category')->getData()
            );
        }
        return $this->render('product/index.html.twig', [
            'products' => $products,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/show/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }
}
