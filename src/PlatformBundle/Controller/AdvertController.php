<?php


// src/OC/PlatformBundle/Controller/AdvertController.php


namespace PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{

    public function indexAction()

    {
    $content = $this
		->get('templating')
		->render('PlatformBundle:Advert:index.html.twig',array(
			'nom'=>'arthur')
		);	
    return new Response($content);
    }

	
	public function byeAction()
	{
		$content = $this->get('templating')->render('PlatformBundle:Advert:bye.html.twig');
		return new Response($content);
	}
}