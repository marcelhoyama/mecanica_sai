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
          $numero= addslashes($_POST['numero']);
            
          $status= trim(addslashes($_POST['status']));
          $dataentrada= trim(addslashes($_POST['dataentrada']));
           $datasaida= trim(addslashes($_POST['datasaida']));
           $id_cliente= trim(addslashes($_POST['id_cliente']));
            
            
            //veiculo
            
            $marca= trim(addslashes($_POST['marca']));
            $ano= trim(addslashes($_POST['ano']));
            $placa= trim(addslashes($_POST['placa']));
            $km= trim(addslashes($_POST['km']));
            $tipocombustivel= trim(addslashes($_POST['tipo']));
           $problema= trim(addslashes($_POST['defeito']));
         $obs= trim(addslashes($_POST['obs']));
           $servico= trim(addslashes($_POST['servico']));
            
            
        }
        
        $this->loadTemplate("orcamento",$dados);
        
}

public function pegar_veiculo(){
    
    $dados=array('veiculo'=>'');
    if(isset($_POST['cliente'])){
         
      echo  $id_cliente= trim(addslashes($_POST['cliente']));
        $v=new veiculo();
        $dados['veiculo']=$v->listarUmVeiculo($id_cliente);
     
        header('Content-Type: application/json');
    echo json_encode($dados);
    exit();
          
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

 public function cadastrarveiculo() {
        $dados = array( 'veiculo'=>'');
   
        
        if(isset($_POST['placa']) && !empty($_POST['placa'])) {
           $placa= trim(addslashes($_POST['placa']));
           $marca= trim(addslashes($_POST['marca']));
           $ano= trim(addslashes($_POST['ano']));
           $km= trim(addslashes($_POST['km']));
           $tipo= trim(addslashes($_POST['tipo']));
           $id_cliente= trim(addslashes($_POST['id_cliente']));
           
            $v=new veiculo();
        $id_veiculo=$v->cadastrar($marca, $ano, $placa, $km, $tipo,$id_cliente);
         
        $dados['veiculo']=$v->listarUmVeiculo($id_veiculo);
        }else{ 
            echo 'nao ta vindo valores';

        
    }
      header('Content-Type: application/json');
    echo json_encode($dados);
    exit();

}

 public function veiculo (){
       $dados=array();
// os dados sendo pego direto no cadastrar veiculo        
   
        
        $this->loadView("veiculo",$dados);
    }
    
    
    public function cadastrarcliente() {
        $dados = array('cliente' => '');
$c =new cliente();
        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = trim(addslashes($_POST['nome']));
            $email = trim(addslashes($_POST['email']));
            $telefone = addslashes($_POST['telefone']);
            $telefone2 = addslashes($_POST['telefone2']);
            $cpf = addslashes($_POST['cpf']);
            $endereco= trim(addslashes($_POST['endereco']));
            
           $id_cliente=$c->cadastrar($nome, $cpf, $endereco, $telefone, $telefone2, $email);
       
            $dados['cliente']=$c->listarUmCliente($id_cliente);
         
        }
  header('Content-Type: application/json');
        echo json_encode($dados);
    exit();
    }
    
        public function cliente (){
       $dados=array();
// os dados sendo pego direto no cadastrar veiculo        
   
        
        $this->loadView("cliente",$dados);
    }
    
    
    
     public function cadastrarequipamento() {
        $dados = array( 'equipamento'=>'');
   
        
        if(isset($_POST['placa']) && !empty($_POST['placa'])) {
         
           $marca= trim(addslashes($_POST['marca']));
         
           $descricao= trim(addslashes($_POST['descricao']));
           $tipo= trim(addslashes($_POST['tipo']));
           $id_cliente= trim(addslashes($_POST['cliente_veiculo']));
           
            $e=new equipamento();
        $id_equipamento=$e->cadastrar($tipo, $descricao, $marca, $id_cliente);
         
        $dados['equipamento']=$e->listarUmEquipamento($id_equipamento);
        }else{ 
            echo 'nao ta vindo valores';

        
    }
      header('Content-Type: application/json');
    echo json_encode($dados);
    exit();

}
    
    public function equipamento (){
        $dados=array();
        
     
        
        
        $this->loadView("equipamento",$dados);
    }
}

