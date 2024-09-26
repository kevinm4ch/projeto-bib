<?php

namespace App\Models;

use MF\Model\Model;

class Livro extends Model{

    public function getLivro($valor = null, $coluna){
        switch ($coluna){

            //Busca por código (id)
            case 0:    
                $q = "SELECT id_livro, titulo, autor, editora, ano_publicacao, exemplares_disponiveis FROM livro WHERE id_livro = :valor";     
                break;

            //Busca por título
            case 1:
                $q = "SELECT id_livro, titulo, autor, editora, ano_publicacao, exemplares_disponiveis FROM livro WHERE titulo = :valor";
                break;
                
            default:
                break;
        }
        
        $stmt = $this->con->prepare($q);
        $stmt->bindValue(':valor', $valor);
        $stmt->execute();

        return $stmt->fetch();
    }
}
