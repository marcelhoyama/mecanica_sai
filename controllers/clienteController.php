<?php

class clienteController extends controller {

    public function index() {
        $dados = array('erro' => '', 'ok' => '');

        
       






        $this->loadView("cliente", $dados);
    }

}
