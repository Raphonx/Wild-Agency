<?php

namespace App\Controller;

use App\Entity\Message;
use App\Entity\Property;
use App\Entity\PropertyFilter;
use App\Form\MessageType;
use App\Form\SearchDataType;
use App\Form\PropertyType;
use App\Form\ImageType;
use App\Repository\MessageRepository;
use App\Repository\PropertyFilterRepository;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;





/**
 * @Route("/admin")
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index", methods={"GET"})
     */
    public function index(PropertyRepository $propertyRepository): Response
    {

        return $this->render('admin/index.html.twig', [
            'properties' => $propertyRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $property = new Property();
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($property);
            $entityManager->flush();

            return $this->redirectToRoute('admin_index');
        }

        return $this->render('admin/new.html.twig', [
            'property' => $property,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/contact", name="admin_contact", methods={"GET","POST"})
     */
    public function contact(Request $request): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('admin_index');
        }

        return $this->render('admin/contact.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/message", name="admin_message", methods={"GET"})
     */
    public function message(MessageRepository $message): Response
    {
        return $this->render('admin/message.html.twig', [
            'messages' => $message->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Property $property): Response
    {
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_index');
        }

        return $this->render('admin/edit.html.twig', [
            'property' => $property,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Property $property): Response
    {
        if ($this->isCsrfTokenValid('delete'.$property->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($property);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_index');
    }
}
