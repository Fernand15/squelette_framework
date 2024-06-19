<?php

namespace Controllers;

use Users;

class UserController extends Controller
{
    public function index($params)
    {
        //savoir si un utilisateur existe deja
    	$connectUser="Florian";
    	$message=$params;
    	
        echo $this->twig->render('mapage.html', ['connectUser' =>   $connectUser]);
    }

    public function listes($params){
        $query = $this->em->createQuery('SELECT u FROM Users u');
        $users = $query->getResult();
        dump($users);
        echo $this->twig->render('users/users.twig', ['users' =>   $users]);
    }

    public function create($params){
        $qb = $this->em->createQueryBuilder();
        $qb->select('v')
            ->from('Villes', 'v');

            $villes = $qb->getQuery()->getResult();
            echo $this->twig->render('users/create.twig', ['villes'=>$villes]);
    }

    public function insert($params){
        $ville = $this->em->find('Villes', $_POST['ville_id']);
        dump($_POST);
        $user=new Users();
        $user->setNom($_POST['nom']);
        $user->setPrenom($_POST['prenom']);
        $user->setVille;
        dump($user);
        $this->em->persist($user);
        $this->em->flush();
    }


}
?>