<?php

class orcamentoController extends controller {
    
   

    public function index (){
        $dados=array('erro'=>'','ok'=>'');
        
        $c=new cliente();
        $o=new orcamento();
        $f=new funcionario();
        $dados['listarfuncionario']=$f->listarFuncionario();
       $dados['listarcliente']=$c->listarCliente();
       
       //gerar numero ordem serviço ,pega resultado da query e aqui soma +1
       $ultimoNumero=$o->listarOrdemServico();
        if($ultimoNumero['id']==null){
            $ultimoNumero=0;
        }
        $dados['ultimoNumero']=1+$ultimoNumero['id'];
          
        if(isset($_POST['numero']) && !empty($_POST['numero'])){
         echo 'numero'.  $numero= addslashes($_POST['numero']).'<br>';
            
         echo 'status'.  $status= trim(addslashes($_POST['status'])).'<br>';
          echo 'entrada'. $dataentrada= trim(addslashes($_POST['dataentrada'])).'<br>';
           echo 'saida'.$datasaida= trim(addslashes($_POST['datasaida'])).'<br>';
           echo 'id cliente:'.$id_cliente= trim(addslashes($_POST['id_cliente'])).'<br>';
            
            
            //veiculo
            
            $marca= trim(addslashes($_POST['marca']));
            $ano= trim(addslashes($_POST['ano']));
            $placa= trim(addslashes($_POST['placa']));
            $km= trim(addslashes($_POST['km']));
            $tipocombustivel= trim(addslashes($_POST['tipo']));
       echo 'problema'.    $problema= trim(addslashes($_POST['defeito'])).'<br>';
         echo 'obs'.   $obs= trim(addslashes($_POST['obs'])).'<br>';
           echo'servico'. $servico= trim(addslashes($_POST['servico'])).'<br>';
            
            
        }
        
        $this->loadTemplate("orcamento",$dados);
        
}

public function pegar_veiculo(){
    
    $dados=array();
    if(isset($_POST['cliente'])){
         
        $id_cliente= trim(addslashes($_POST['cliente']));
        $v=new veiculo();
        $dados=$v->listarVeiculo($id_cliente);
     
        header('Content-Type: application/json');
    echo json_encode($dados);
    
          
    }else{
        echo 'nao entrou no if<br>';
    }
    
}

public function pegar_equipamento(){
    
    $dados=array();
    if(isset($_POST['cliente'])){
         
       $id_cliente= trim(addslashes($_POST['cliente']));
        $e=new equipamento();
        $dados=$e->listarEquipamento($id_cliente);
     
        header('Content-Type: application/json');
    echo json_encode($dados);
    exit;
          
    }else{
        echo 'nao entrou no if<br>';
    }
    
}

public function listarequipamento (){
        $dados=array();
        
        $e=new equipamento();
      
       if(isset($_POST['id_cliente']) && !empty($_POST['id_cliente'])){
     $id_cliente= trim(addslashes($_POST['id_cliente']));
          $dados['listarequipamento']=$e->listarEquipamento($id_cliente);
          header('Content-Type: application/json');
          echo json_encode($dados);
          exit;
       }else{
           echo 'Nao fo listar os equipamentos de'.$id_cliente;
       }
        
        
       
    
}
}

