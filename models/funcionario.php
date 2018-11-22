<?php
 class funcionario extends model{

     public function cadastrar(){
    
         $sql="";
         $sql=$this->db->prepare($sql);
         $sql->bindValue("",);
         
         $sql->execute();
         
         if($sql->rowCount()>0){
             
         }
}

 }