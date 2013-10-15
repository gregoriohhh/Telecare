<?php

namespace Persistencia\persistenciaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Persistencia\persistenciaBundle\Entity\especialista;
use Persistencia\persistenciaBundle\Form\especialistaType;

/**
 * especialista controller.
 *
 * @Route("/especialista")
 */
class especialistaController extends Controller
{

    /**
     * Lists all especialista entities.
     *
     * @Route("/", name="especialista")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PersistenciapersistenciaBundle:especialista')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new especialista entity.
     *
     * @Route("/", name="especialista_create")
     * @Method("POST")
     * @Template("PersistenciapersistenciaBundle:especialista:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new especialista();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('especialista_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a especialista entity.
    *
    * @param especialista $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(especialista $entity)
    {
        $form = $this->createForm(new especialistaType(), $entity, array(
            'action' => $this->generateUrl('especialista_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new especialista entity.
     *
     * @Route("/new", name="especialista_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new especialista();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a especialista entity.
     *
     * @Route("/{id}", name="especialista_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersistenciapersistenciaBundle:especialista')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find especialista entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing especialista entity.
     *
     * @Route("/{id}/edit", name="especialista_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersistenciapersistenciaBundle:especialista')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find especialista entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a especialista entity.
    *
    * @param especialista $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(especialista $entity)
    {
        $form = $this->createForm(new especialistaType(), $entity, array(
            'action' => $this->generateUrl('especialista_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing especialista entity.
     *
     * @Route("/{id}", name="especialista_update")
     * @Method("PUT")
     * @Template("PersistenciapersistenciaBundle:especialista:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersistenciapersistenciaBundle:especialista')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find especialista entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('especialista_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a especialista entity.
     *
     * @Route("/{id}", name="especialista_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PersistenciapersistenciaBundle:especialista')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find especialista entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('especialista'));
    }

    /**
     * Creates a form to delete a especialista entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('especialista_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
