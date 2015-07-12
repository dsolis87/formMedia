<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 27/05/2015
 * Time: 10:41 PM
 */

namespace DS\FormMediaBundle\Controller;


use DS\FormMediaBundle\Form\Example\ExampleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ExampleController extends Controller {
    public function exampleAction(Request $request) {
        $form = $this->createForm(new ExampleType());

        $form->handleRequest($request);

        return $this->render('@DSFormMedia/Example/basic.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}