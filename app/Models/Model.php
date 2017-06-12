<?php
/**
 * Created by PhpStorm.
 * User: marcusdalgren
 * Date: 2017-04-25
 * Time: 20:57
 */

namespace App\Models;


use App\Database;
use PDO;

abstract class Model
{
    protected $id;
    /*
     * @var Database $db
     */
    private $db;
    protected $table = ' ';

    public function __construct(Database $db, $modelData = [])
    {
        $this->db = $db;
    }

    /*
     * @param integer $id
     * @return Model
     */
    public function getById($id)
    {
        return $this->db->getById($this->table, $id);
    }

    /**
     * @return array
     */
    public function getAll()
    {
        return $this->db->getAll($this->table);
    }

    /**
     * @param $data
     * @return bool|string
     */
    public function create($data)
    {
        return $this->db->create($this->table, $data);
    }


    public function update($id, $data)
    {
        return $this->db->update($this->table, $id, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, $id);
    }

    protected function getRelated($table, $linkColumn, $id)
    {
        $pdo = $this->db->getPdo();
        $stmt = $pdo->prepare("SELECT * FROM $table WHERE $linkColumn = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}