<?php

namespace App\Model;

class UserManager extends AbstractManager
{
    public function insert(array $post): int
    {
        $statement = $this->pdo->prepare("INSERT INTO 
        user(pseudo, password, progression) VALUES (:pseudo, :password, 1)");
        $statement->bindValue(':pseudo', $post['pseudo'], \PDO::PARAM_STR);
        $statement->bindValue(':password', $post['password'], \PDO::PARAM_STR);
        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }

    public function updateProgression($id): bool
    {
        $statement = $this->pdo->prepare("UPDATE user SET progression = progression + 1 WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        return $statement->execute();
    }
}
