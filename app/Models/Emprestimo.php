<?php 
    namespace App\Models;

    use MF\Model\Model;

    class Emprestimo extends Model{

        
        public function incluirEmprestimo(){
            try{

                $sql = "INSERT INTO emprestimo(id_livro, id_usuario, data_emprestimo, `status`) VALUES (:livro, :usuario, :dataEmprestimo, default)";
    
                print_r($_SESSION);
                $stmt = $this->con->prepare($sql);
                $stmt->bindValue(':livro', $_SESSION['novo_emprestimo']['livro']['id_livro']);
                $stmt->bindValue(':usuario', $_SESSION['novo_emprestimo']['usuario']);
                $stmt->bindValue(':dataEmprestimo', date('Y-m-d'));
                
                $stmt->execute();

                return 1;
            }catch(\PDOException $e){
                return 0;
            }
        }

    }

?>