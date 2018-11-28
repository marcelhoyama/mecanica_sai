<?php

class veiculo extends model {

    public function cadastrar($marca, $ano, $placa, $km, $tipo, $servico, $defeito, $obs, $id_veiculo) {
        try {
            $sql = "INSERT INTO clientes (marca, ano, placa, km, tipo, defeito, servico, obs,data,id_veiculo) VALUE (:marca, :ano, :placa,:km, :tipo, :defeito, :servico,:obs,:data , :id_veiculo)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":marca", $marca);
            $sql->bindValue(":ano", $ano);
            $sql->bindValue(":placa", $placa);
            $sql->bindValue(":km", $km);
            $sql->bindValue(":tipo", $tipo);
            $sql->bindValue(":defeito", $defeito);
            $sql->bindValue(":servico", $servico);
            $sql->bindValue(":obs", $obs);
            $sql->bindValue(":data", date("Y-m-d"));
            $sql->bindValue(":id_veiculo", $id_veiculo);


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

    public function listarVeiculo() {
        try {
            $array = array();
            $sql = 'SELECT * FROM veiculos ORDER BY id DESC';
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

}
