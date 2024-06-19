<?php

namespace Controllers;

use Users;

class SecurityController extends Controller
{
    //affichage du formulaire de création d'un utilisateur et d'un mot de passe
    public function create (){
        echo $this->twig->render('security/create.twig', ['users' =>   $users]);
    }
    //enregistrement dans la base de donnée
    public function register (){
        $user=new Users();
        $user->setNom($_POST['nom']);
        $user->setPrenom($_POST['prenom']);
        $user->setIdentifiant($_POST['identifiant']);
        $user->setPassword($_POST['password']);
    }
    //formulaire de login
    public function login (){
        echo $this->twig->render('security/login.twig', ['users' =>   $users]);
    }
    //vérification du mot de passe
    public function check (){

    }
}