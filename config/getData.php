<?php
require_once("conexion.php");

class DataFetcher extends Conectar
{
    public function fetchData()
    {
        $this->conexion();
        $this->set_names();

        $sql = "SELECT month, SUM(energy_delta_wh) AS total_energy FROM renewable_power_generation GROUP BY month ORDER BY month ASC";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
}

$dataFetcher = new DataFetcher();
$dataFetcher->fetchData();
?>
