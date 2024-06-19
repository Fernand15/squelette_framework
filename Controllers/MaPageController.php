<?php

namespace Controllers;

class MaPageController extends Controller
{
    public function index($params)
    {
        //savoir si un utilisateur existe deja
    	$connectUser="Florian";
    	$message=$params;
    	
        echo $this->twig->render('mapage.html', ['connectUser' =>   $connectUser]);
    }

}