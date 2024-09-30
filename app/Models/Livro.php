<?php

namespace App\Models;

use MF\Model\Model;

class Livro extends Model{

    public function getLivro($valor = null, $coluna){
        switch ($coluna){

            case 'código':    
                $q = "SELECT id_livro, titulo, autor, editora, ano_publicacao, exemplares_disponiveis FROM livro WHERE id_livro = :valor";     
                break;

            case 'título':
                $q = "SELECT id_livro, titulo, autor, editora, ano_publicacao, exemplares_disponiveis FROM livro WHERE titulo = :valor";
                break;
                
            default:
                break;
        }
        
        $stmt = $this->con->prepare($q);
        $stmt->bindValue(':valor', $valor);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
