<?php

namespace App\Controller;

use App\Entity\Argonautes;
use App\Form\Argonautes1Type;
use App\Repository\ArgonautesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ArgonautesType;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request, ArgonautesRepository $argonautesRepository): Response
    {
        $argonaute = new Argonautes();
        $form = $this->createForm(Argonautes1Type::class, $argonaute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($argonaute);
            $entityManager->flush();

            return $this->redirectToRoute('main',  [

            ]);
        }

        return $this->render('main/index.html.twig', [
            'argonautes' => $argonautesRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }
}
