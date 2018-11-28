<?php

class cliente extends model {

    public function cadastrar($nome, $cpf, $endereco, $telefone, $telefone2, $email) {
        try {
            $array=array();  
            $sql = "INSERT INTO clientes (nome , cpf , endereco , telefone , telefone2 , email , data , status) VALUE (:nome , :cpf , :endereco , :telefone , :telefone2 , :email,:data , :status)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":cpf", $cpf);
            $sql->bindValue(":endereco", $endereco);
            $sql->bindValue(":telefone", $telefone);
            $sql->bindValue(":telefone2", $telefone2);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":data", date("Y-m-d"));
            $sql->bindValue(":status", 'Ativo');


            $sql->execute();
$id_cliente= $this->db->lastInsertId();
            if ($sql->rowCount() > 0) {

           
$array=$this->listarUmCliente($id_cliente);
return  json_encode($array);
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listarCliente() {
        try {
            $array = array();
            $sql = 'SELECT * FROM clientes ORDER BY nome';
            $sql = $this->db->prepare($sql);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            } else {
                return FALSE;
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

     public function listarUmCliente($id_cliente) {
        try {
            $array = array();
            $sql = 'SELECT * FROM clientes WHERE id =:id_cliente';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_cliente',$id_cliente);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            } else {
                return FALSE;
            }
            return  json_encode($array);
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }
}
