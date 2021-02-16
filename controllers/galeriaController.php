<?php



class galeriaController extends controller {

    public function index() {

        $dados = array(
            'qt'=>128
        );
        $this->loadView('galeria', $dados);
       
      
}

}