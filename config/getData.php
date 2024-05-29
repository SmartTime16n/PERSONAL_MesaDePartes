<?php
require_once("conexion.php");

class DataFetcher extends Conectar
{
    public function fetchData()
    {
        $this->conexion();
        $this->set_names();

        $sql = "SELECT energy_delta_wh, month FROM renewable_power_generation ORDER BY month ASC";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
}

$dataFetcher = new DataFetcher();
$dataFetcher->fetchData();
?>
