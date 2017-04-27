<?php
include_once 'DbConfig.php';
include_once 'user.php';
class Crud
{
    public function __construct()
    {
        $DbConfig=new Dbconfig();
        $this->connect=$DbConfig->connection;
        $user=new user();

    }

    public function getData($query)
    {
        $result = $this->connect->query($query);

        if ($result == false) {
            return false;
        }

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function execute($query)
    {

        $result = $this->connect->query($query);

        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }
    }

    public function delete($id, $table)
    {

        $query = "DELETE FROM $table WHERE id = $id";

        $result = $this->connect->query($query);

        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    public function escape_string($value)
    {
        return $this->connect->real_escape_string($value);
    }
    public function show_user()
    {

    }
}
?>
