<?php

class orcamento extends model {

    public function cadastrar($numero, $status, $dataentrada, $datasaida, $id) {
        try {
            $sql = "INSERT INTO orcamento (numero, status, entrada,saida, id_cliente) VALUE (:numero, :status, :entrada,:saida, :id_cliente)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":numero", $numero);
            $sql->bindValue(":status", $status);
            $sql->bindValue(":entrada", $dataentrada);
            $sql->bindValue(":id_cliente", $id);
            $sql->bindValue(":saida", $datasaida);
            $sql->bindValue(":data", date("Y-m-d"));
            $sql->bindValue(":status", 'Ativo');


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

    public function listarOrdemServico() {
        try {
            $array = array();
            $sql = 'SELECT id FROM orcamentos ORDER BY id DESC LIMIT 1';
            $sql = $this->db->prepare($sql);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            } else {
                return false;
            }
            return $array;
        } catch (Exception $ex) {
            echo "Falhou:" . $ex->getMessage();
        }
    }

}
