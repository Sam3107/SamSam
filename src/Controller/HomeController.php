<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController {
/**
 * 
 * @Route("/bonjour/{prenom}/age/{age}", name="hello")
 * @Route("/Salut", name="hello_base")
 * @Route("/bonjour/{prenom}", name="hello_prenom")
 * monttre la page qui dit Bonjour
 * 
 *  @return void
 */


  public function hello($prenom ="anonyme", $age = 0){

    return  $this->render(
      'hello.html.twig', 
      ['prenom' => $prenom,
       'age' => $age
      
      ]
    );

  }

/**
 * @Route("/", name="homepage")
 */

 public function home(){
       $prenoms = ["Sam" => 31, "Samer" =>35, "Wael" => 12 ];
     
   return $this->render(
     'home.html.twig',
     ['title' => "Au revoir tous le monde" , 'age' => 12,
     'tableau' => $prenoms
     ]
   );
 }
}
?>