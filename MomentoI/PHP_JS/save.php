<?php

if (isset($_POST['idDocument'])) {

    $idDocument = $_POST['idDocument'];
    $registryName = $_POST['name'];
    $registryLastName = $_POST['lastName'];
    $registryBirth = $_POST['birth'];
    $registryPhone = $_POST['phone'];
    $registryCity = $_POST['city'];
    $registryDistrict = $_POST['district'];

    try {

        include_once ("db_connection.php");
        $sql = "INSERT INTO appointment (document,name,lastName,birth,city,district,phone) VALUES ({$idDocument}, '{$registryName}','{$registryLastName}','{$registryBirth}','{$registryCity}','{$registryDistrict}',{$registryPhone})";
        $result = $connection->query($sql);

        header("location:index.php");
    } catch (exception $Error) {
        echo "Connection failed";
    }
}
