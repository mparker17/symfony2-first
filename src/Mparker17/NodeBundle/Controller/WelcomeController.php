<?php

namespace Mparker17\NodeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller {
  public function indexAction() {
    $response = $this->render('Mparker17NodeBundle:Node:hello.html.twig');

    return $response;
  }
}
