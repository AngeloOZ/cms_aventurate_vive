<?php

require_once "database.php";

class Model extends Database
{
    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * unique
     * Esta funcion permite realizar una consulta para preguntar
     * si existe ya un valor registrado
     *
     * @param  string $table : nombre de la tabla (usuario, producto)
     * @param  string $field : nombre del campo por el que se buscará (id, email,...)
     * @param  string $data : condicion a comparar (1 , ejemplo@email.com, ...)
     * @return mixed : array con la informacion o null si no hay nada
     */

    public static function unique($table, $field, $data): mixed
    {
        $stmt = Database::getConnection()->prepare("SELECT * FROM $table WHERE $field = :$field");

        $stmt->bindParam(":$field", $data);

        if ($stmt->execute()) {
            return ($stmt->rowCount() > 0) ? $stmt->fetchAll(PDO::FETCH_ASSOC) : null;
        } else {
            return $stmt->errorInfo();
        }
    }

    /**
     * query
     * Funcion que permite realizar consultas a la BDD
     *
     * @param  mixed $sql : Sentencia SQL
     * @param  mixed $params : parametros de la sentencia a enviar mediante bindParam
     * @return mixed
     */
    public static function query($sql, $params = [])
    {
        $sql = trim($sql);
        $link = Database::getConnection();
        $link->beginTransaction();


        $query = $link->prepare($sql);

        if (!$query->execute($params)) {
            $link->rollBack();
            $error = $query->errorInfo();
            throw new Exception($error);
        }

        // SELECT | INSERT | UPDATE | DELETE
        if (stripos($sql, 'SELECT') !== false) {

            return $query->rowCount() > 0 ? $query->fetchAll(PDO::FETCH_ASSOC) : false;

        } elseif (stripos($sql, 'INSERT') !== false) {

            $id = $link->lastInsertId();
            $link->commit();
            return [true, $id];

        } elseif (stripos($sql, 'UPDATE') !== false) {

            $link->commit();
            return true;

        } elseif (stripos($sql, 'DELETE') !== false) {

            if ($query->rowCount() > 0) {
                $link->commit();
                return true;
            }

            $link->rollBack();
            return false;
        } else {
            $link->commit();
            return true;
        }
        $link = null;
    }
}