<?php
include_once 'DbConfig.php';
$DbConfig=new Dbconfig();
$connect=$DbConfig->connection;
class user
{
    public function xyz($query)
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
}