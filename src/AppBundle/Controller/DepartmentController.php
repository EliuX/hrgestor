<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Department;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Department controller.
 *
 * @Route("departamentos")
 */
class DepartmentController extends Controller
{
    /**
     * Lists all department entities.
     *
     * @Route("/", name="departamentos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $departments = $em->getRepository('AppBundle:Department')->findAll();

        return $this->render('department/index.html.twig', array(
            'departments' => $departments,
        ));
    }

    /**
     * Finds and displays a department entity.
     *
     * @Route("/{id}", name="departamentos_show")
     * @Method("GET")
     */
    public function showAction(Department $department)
    {

        return $this->render('department/show.html.twig', array(
            'department' => $department,
        ));
    }
}
