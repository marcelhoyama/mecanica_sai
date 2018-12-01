<?php

class veiculoController extends controller {
    
    public function index (){
       $dados=array();
//        
//        if(isset($_POST['placa']) && !empty($_POST['placa'])) {
//           echo $placa= trim(addslashes($_POST['placa']));
//           $marca= trim(addslashes($_POST['marca']));
//           $ano= trim(addslashes($_POST['ano']));
//           $km= trim(addslashes($_POST['km']));
//           $tipo= trim(addslashes($_POST['tipo']));
//           $id_cliente= trim(addslashes($_POST['id_cliente']));
//           
//            $v=new veiculo();
//        $v->cadastrar($marca, $ano, $placa, $km, $tipo,$id_cliente);
//        }
//        
//    
        
        $this->loadView("veiculo",$dados);
    }
   }


