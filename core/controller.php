<?php

class Controller
{

  function render($filename)
  {
    require(ROOT . 'views/' . get_class($this) . '/' . $filename . '.php');
  }
}
