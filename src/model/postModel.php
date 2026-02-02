<?php

namespace Everton\model;

use Everton\core\Conexao;
use Exception;
use PDOException;

class postModel
{
    public function buscar($termo = null, $limite = null, $offset = null)
    {
        try {

            $termo = ($termo ? "WHERE {$termo}" : '');
            $limite = ($limite ? "LIMIT {$limite}" : '');
            $offset = ($offset ? "OFFSET {$offset}" : '');

            $query = "SELECT * FROM posts {$termo} {$limite} {$offset}";

            $stmt = Conexao::getInstancia()->query($query);

            $result = $stmt->fetchAll();

            return $result;

        } catch (PDOException $error) {
            throw $error;
        }
    }
}