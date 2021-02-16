<?php

class homeController extends controller {

    public function index(){

        $dados = array (
            'quantidade' => 5,
            'nome' => 'Reginaldo',
            'idade' => '88'

        );
        
        $this->loadTemplate('home', $dados);
        
    }


    
 }
 