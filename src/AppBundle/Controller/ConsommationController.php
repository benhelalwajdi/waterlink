<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Consommation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Consommation controller.
 *
 */
class ConsommationController extends Controller
{
    /**
     * Lists all consommation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $consommations = $em->getRepository('AppBundle:Consommation')->findAll();

        return $this->render('consommation/index.html.twig', array(
            'consommations' => $consommations,
        ));
    }

    /**
     * Creates a new consommation entity.
     *
     */
    public function newAction(Request $request)
    {
        $consommation = new Consommation();
        $form = $this->createForm('AppBundle\Form\ConsommationType', $consommation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($consommation);
            $em->flush();

            return $this->redirectToRoute('consommation_show', array('idConsommation' => $consommation->getIdconsommation()));
        }

        return $this->render('consommation/new.html.twig', array(
            'consommation' => $consommation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a consommation entity.
     *
     */
    public function showAction(Consommation $consommation)
    {
        $deleteForm = $this->createDeleteForm($consommation);

        return $this->render('consommation/show.html.twig', array(
            'consommation' => $consommation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing consommation entity.
     *
     */
    public function editAction(Request $request, Consommation $consommation)
    {
        $deleteForm = $this->createDeleteForm($consommation);
        $editForm = $this->createForm('AppBundle\Form\ConsommationType', $consommation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('consommation_edit', array('idConsommation' => $consommation->getIdconsommation()));
        }

        return $this->render('consommation/edit.html.twig', array(
            'consommation' => $consommation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a consommation entity.
     *
     */
    public function deleteAction(Request $request, Consommation $consommation)
    {
        $form = $this->createDeleteForm($consommation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($consommation);
            $em->flush();
        }

        return $this->redirectToRoute('consommation_index');
    }

    /**
     * Creates a form to delete a consommation entity.
     *
     * @param Consommation $consommation The consommation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Consommation $consommation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('consommation_delete', array('idConsommation' => $consommation->getIdconsommation())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
