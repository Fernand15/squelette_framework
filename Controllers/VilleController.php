<?php

namespace Controllers;

use Villes;

class VilleController extends Controller
{
    public function listes($params){
        $query = $this->em->createQuery('SELECT v FROM Villes v');
        $users = $query->getResult();
        dump($villes);
        echo $this->twig->render('users/villes.twig', ['villes' =>   $villes]);
    }

    public function read($id){
        dump($id);
        $villes=$this->em->find('Villes', $id);
        dump($ville->getUsers());
    }
}
?>