<?php
class salut extends Controller
{

  function index()
  {
    $d = array();
    $d['tuto'] = array(
      'titre' => 'Salut',
      'description' => 'Exemple de description',
    );
    $this->render('index');
  }
}
