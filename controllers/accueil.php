<?php
class accueil extends Controller
{

  function index()
  {
    $d = array();
    $d['accueil'] = array(
      'titre' => 'Salut',
      'description' => 'Exemple de description',
    );
    $this->set($d);
    $this->render('index');
  }
}
