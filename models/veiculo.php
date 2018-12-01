<?php

class veiculo extends model {

    public function cadastrar($marca, $ano, $placa, $km, $combustivel, $id_cliente) {
        try {
            $sql = "INSERT INTO veiculos (marca, ano, placa, km, combustivel, data, id_cliente) VALUES (:marca, :ano, :placa ,:km, :combustivel, :data , :id_cliente)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":marca", $marca);
            $sql->bindValue(":ano", $ano);
            $sql->bindValue(":placa", $placa);
            $sql->bindValue(":km", $km);
            $sql->bindValue(":combustivel", $combustivel);
            $sql->bindValue(":data", date("Y-m-d"));
            $sql->bindValue(":id_cliente", $id_cliente);


            $sql->execute();

            if ($sql->rowCount() > 0) {

                return TRUE;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

    public function listarVeiculo($id_cliente) {
        try {
            $array = array();
            $sql = 'SELECT * FROM veiculos WHERE id_cliente = :id_cliente ORDER BY id DESC';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id_cliente", $id_cliente);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(pdo::FETCH_ASSOC);
            } else {
                return FALSE;
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }
    

}
