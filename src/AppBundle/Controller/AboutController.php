<?php
/**
 * Created by PhpStorm.
 * User: cmaloungila
 * Date: 09/03/2017
 * Time: 11:13
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AboutController extends Controller
{
    public function detailsAction($name)
    {
        $user = null;
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findOneByName($name);
        return $this->render(
            'AppBundle:About:more.html.twig',
            array('user' => $user)
        );
    }
}