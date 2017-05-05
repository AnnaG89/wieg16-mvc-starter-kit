<?php

namespace App;

use PDO;


class Database{
    /*
     * @var PDO
    */
    private $pdo;
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /*
    * @param integer $id
    * @return Model
    */
    public function getById($table, $id){
        $stm = $this->pdo->prepare('SELECT * FROM '.$table.'WHERE id = :id');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row: [];
    }

    public function getAll($table){
        $stm = $this->pdo->prepare('SELECT * FROM '.$table);
        $success = $stm->execute();
        $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $rows: [];
    }

    public function create($table, $data) {
        $columns = array_keys($data);

        $columnSql = implode(',', $columns);
        //'name, birthyear, city';
        $bindingSql = ':'.implode(',:', $columns);
        //':Anna, :1989, :Trollhättan';

       // $values = array_values($data);
        //$valuesSql = implode(',', $values);

        $sql = "INSERT INTO $table ($columnSql) VALUES ($bindingSql)";
        $stm = $this->pdo->prepare($sql);

        foreach ($data as $key => $value) {
            $stm->bindValue(':'.$key, $value);
        }
        $status = $stm->execute();
        //mellan ? och : är if och mellan : och ; är false.
        return ($status) ? $this->pdo->lastInsertId() : false;
    }
    /*$data = [
                    'name'=> "Anders Bohman",
                    'birthyear'=> 1978,
                    'city'=> "Göteborg"
                    ];
               */

    public function update($table, $id, $data) {
        $columns = array_keys($data);
        $sql = "UPDATE $table SET () WHERE id = :id";

    }
    public function delete($table, $id)
    {
        $stm = $this->pdo->prepare('DELETE * FROM ' . $table . 'WHERE id = :id');
        $stm->bindParam(':id', $id);
        $success = $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }
}