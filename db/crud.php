<?php

class Crud
{
    private $db;
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function insert($table, $data)
    {
        try {

            $columns = implode(',', array_keys($data));
            $values = ":" . implode(',:', array_keys($data));
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";
            $stmt = $this->db->prepare($sql);
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function readFromTable($table)
    {

        $sql = "SELECT * FROM $table";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function readSpecificValue($table, $id)
    {

        $sql = "SELECT * FROM $table WHERE {$table}_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAttendees()
    {

        $sql = "SELECT * FROM attendee inner join specialty on attendee.specialty_id = specialty.specialty_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneAttendee($id)
    {

        $sql = "SELECT * FROM attendee inner join specialty on attendee.specialty_id = specialty.specialty_id WHERE attendee_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    public function deleteRow($table, $id)
    {
        $sql = "DELETE FROM $table WHERE {$table}_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }


}
