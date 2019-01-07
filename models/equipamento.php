<?php

class equipamento extends model {

    public function cadastrar($tipo, $descricao, $marca, $id_cliente) {
        try {
            $sql = "INSERT INTO equipamentos(marca, descricao, tipo,id_cliente, data) VALUE (:marca, :descricao, :tipo,:id_cliente,:data )";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":marca", $marca);
            $sql->bindValue(":descricao", $descricao);
            $sql->bindValue(":tipo", $tipo);
            $sql->bindValue(":id_cliente", $id_cliente);
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
  public function listarUmEquipamento($id_equipamento) {
        try {
            $array = array();
            $sql = 'SELECT * FROM equipamentos WHERE id = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":id", $id_equipamento);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            } else {
                return FALSE;
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }
}
