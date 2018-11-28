<?php

class equipamento extends model {

    public function cadastrar($tipo, $ano, $marca, $fabricante, $defeito, $obs, $servico) {
        try {
            $sql = "INSERT INTO equipamentos(marca, ano, tipo, defeito,obs, servico,fabricante, data) VALUE (:marca, :ano, :tipo, :defeito,:obs, :servico,:fabricante,:data )";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":marca", $marca);
            $sql->bindValue(":ano", $ano);
            $sql->bindValue(":tipo", $tipo);
            $sql->bindValue(":defeito", $defeito);
            $sql->bindValue(":obs", $obs);
            $sql->bindValue(":servico", $servico);
            $sql->bindValue(":fabricante", $fabricante);
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

    public function listarEquipamento() {
        try {
            $array = array();
            $sql = 'SELECT * FROM equipamentos ORDER BY id DESC';
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
