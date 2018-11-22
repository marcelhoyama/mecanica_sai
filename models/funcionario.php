<?php
 class funcionario extends model{

     public function cadastrar($nome,$cpf,$endereco,$telefone,$telefone2,$email){
    
         $sql="INSERT INTO funcionarios VALUE :nome , :cpf , :endereco , :telefone , :telefone2 , :email";
         $sql=$this->db->prepare($sql);
         $sql->bindValue(":nome",$nome);
         $sql->bindValue(":cpf",$cpf);
         $sql->bindValue(":endereco",$endereco);
         $sql->bindValue(":telefone",$telefone);
         $sql->bindValue(":telefone2",$telefone2);
         $sql->bindValue(":email",$email);
         $sql->bindValue(":data",date("Y-m-d"));
         $sql->bindValue(":satus",'Ativo');
         
         
         $sql->execute();
         
         if($sql->rowCount()>0){
              return TRUE;
         }else{
             return false;
         }
}

 }