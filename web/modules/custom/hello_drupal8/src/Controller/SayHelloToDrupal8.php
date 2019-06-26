<?php

namespace Drupal\hello_drupal8\Controller;

use Drupal\Core\Controller\ControllerBase;

class SayHelloToDrupal8 extends ControllerBase {
    
  public function hi(){
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Bienvenue sur le site Labogenre!'),
        ];
    }
    
  public function lenom($mon_nom){
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello @name , Bienvenue sur le site LABOGENRE!',
        ['@name'=>$mon_nom,
        ]
        ),
    ); 
  }

  public function content(){
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('TESTERTTTTETTEET'),
        );
    }    
}
