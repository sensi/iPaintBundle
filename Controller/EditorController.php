<?php

namespace M3\Bundle\iPaintBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EditorController extends Controller
{
    
    public function drawAction()
    {
        return $this->render('M3iPaintBundle:Editor:ipaint.html.twig');
    }
}
