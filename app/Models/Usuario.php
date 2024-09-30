<?php

namespace App\Models;

use MF\Model\Model;

class Usuario extends Model
{

    public function autenticar($matricula, $senha)
    {

        $q = "SELECT id_usuario, nome, email, matricula, senha, tipo_usuario FROM usuario WHERE matricula = :matricula AND senha = :senha";

        $stmt = $this->con->prepare($q);
        $stmt->bindValue(':matricula', $matricula);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function getUsuario(){
        $q = "SELECT nome FROM usuario ";

        $stmt = $this->con->prepare($q);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
