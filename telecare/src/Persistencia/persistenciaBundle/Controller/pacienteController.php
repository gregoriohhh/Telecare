<?php

namespace Persistencia\persistenciaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Persistencia\persistenciaBundle\Entity\paciente;
use Persistencia\persistenciaBundle\Form\pacienteType;

/**
 * paciente controller.
 *
 * @Route("/paciente")
 */
class pacienteController extends Controller
{

    /**
     * Lists all paciente entities.
     *
     * @Route("/", name="paciente")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PersistenciapersistenciaBundle:paciente')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new paciente entity.
     *
     * @Route("/", name="paciente_create")
     * @Method("POST")
     * @Template("PersistenciapersistenciaBundle:paciente:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new paciente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paciente_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a paciente entity.
    *
    * @param paciente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(paciente $entity)
    {
        $form = $this->createForm(new pacienteType(), $entity, array(
            'action' => $this->generateUrl('paciente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new paciente entity.
     *
     * @Route("/new", name="paciente_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new paciente();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a paciente entity.
     *
     * @Route("/{id}", name="paciente_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersistenciapersistenciaBundle:paciente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find paciente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing paciente entity.
     *
     * @Route("/{id}/edit", name="paciente_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersistenciapersistenciaBundle:paciente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find paciente entity.');
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
    * Creates a form to edit a paciente entity.
    *
    * @param paciente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(paciente $entity)
    {
        $form = $this->createForm(new pacienteType(), $entity, array(
            'action' => $this->generateUrl('paciente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing paciente entity.
     *
     * @Route("/{id}", name="paciente_update")
     * @Method("PUT")
     * @Template("PersistenciapersistenciaBundle:paciente:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PersistenciapersistenciaBundle:paciente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find paciente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('paciente_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a paciente entity.
     *
     * @Route("/{id}", name="paciente_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PersistenciapersistenciaBundle:paciente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find paciente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('paciente'));
    }

    /**
     * Creates a form to delete a paciente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paciente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
