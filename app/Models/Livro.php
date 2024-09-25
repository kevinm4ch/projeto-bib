<?php

namespace App\Models;

use MF\Model\Model;

class Livro extends Model
{

    public function getLivro($valor = null, $coluna = 0)
    {
        switch ($coluna) {
            //Id
            case 0:    
                $q = "SELECT id_livro, titulo, autor, editora, ano_publicacao, exemplares_disponiveis FROM livro WHERE id_livro = $valor";     
                break;
            //titulo
            case 1:
                $q = "SELECT id_livro, titulo, autor, editora, ano_publicacao, exemplares_disponiveis FROM livro WHERE titulo = '$valor'";
                break;
                
            default:
                break;
        }
        
        return $this->con->query($q)->fetch();
    }
}
