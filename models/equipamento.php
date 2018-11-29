<?php

class equipamento extends model {

    public function cadastrar($tipo, $ano, $marca, $fabricante, $defeito, $obs, $servico, $id_cliente) {
        try {
            $sql = "INSERT INTO equipamentos(marca, ano, tipo, defeito,obs, servico,fabricante,id_cliente, data) VALUE (:marca, :ano, :tipo, :defeito,:obs, :servico,:fabricante,:id_cliente,:data )";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":marca", $marca);
            $sql->bindValue(":ano", $ano);
            $sql->bindValue(":tipo", $tipo);
            $sql->bindValue(":defeito", $defeito);
            $sql->bindValue(":obs", $obs);
            $sql->bindValue(":servico", $servico);
            $sql->bindValue(":fabricante", $fabricante);
            $sql->bindValue(":id_cliente",$id_cliente);
            $sql->bindValue(":data", date("Y-m-d"));



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

    public function listarEquipamento($id_cliente) {
        try {
            $array = array();
            $sql = 'SELECT * FROM equipamentos WHERE id_cliente = :id_cliente ORDER BY id DESC';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id_cliente",$id_cliente);
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
