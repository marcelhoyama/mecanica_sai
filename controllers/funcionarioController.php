<?php

class funcionarioController extends controller {
    
    public function index (){
        $dados=array('ok'=>'','erro'=>'');
        
        $f=new funcionario();
        
        if(isset($_POST['nome']) && isset($_POST['telefone2'])){
            
            $nome= trim(addslashes($_POST['nome']));
            $cpf=trim(addslashes($_POST['cpf']));
            $endereco= trim(addslashes($_POST['endereco']));
            $telefone= trim(addslashes($_POST['telefone']));
            $telefone2= trim(addslashes($_POST['telefone2']));
            $email= trim(addslashes($_POST['email']));
            
            if($f->cadastrar($nome, $cpf, $endereco, $telefone, $telefone2, $email) ==true ){
                $dados['ok']="Cadastrado com Sucesso!";
        }else{
            $dados['erro']="Não foi possivel fazr o cadastro!  Verifique os campos se estão preenchidos corretamente.";
        }
        
        }
        
        $this->loadTemplate("funcionario",$dados);
    }
}

