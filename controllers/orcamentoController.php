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
        if($ultimoNumero==null){
            $ultimoNumero=0;
        }
        $dados['ultimoNumero']=1+$ultimoNumero;
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
}

