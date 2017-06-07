<?php


// src/OC/PlatformBundle/Controller/AdvertController.php


namespace PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{

	public function viewAction($id)

  {

    // $id vaut 5 si l'on a appelé l'URL /platform/advert/5


    // Ici, on récupèrera depuis la base de données

    // l'annonce correspondant à l'id $id.

    // Puis on passera l'annonce à la vue pour

    // qu'elle puisse l'afficher


  return new Response("Affichage de l'annonce d'id : ".$id);

  }
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