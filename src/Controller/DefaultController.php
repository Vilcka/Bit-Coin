<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 11/07/18
 * Time: 23:09
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class DefaultController
 * @Route("/")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction()
    {
        return $this->render("Home/index.html.twig");
    }
}