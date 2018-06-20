<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        //return $this->render('default/index.html.twig', [
            return $this->render('base.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/user/test", name="TestRoleUser")
     */
     public function testRoleUserAction(Request $request)
     {
       return $this->render('exemple/hello.html.twig');
     }
     /**
      * @Route("/admin/test", name="TestRoleAdmin")
      */
      public function testRoleAdminAction(Request $request)
      {
        return $this->render('exemple/hello_admin.html.twig');
      }
}
