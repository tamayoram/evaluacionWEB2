<?php
if (isset($_GET['document'])) {

    $idDocument = $_GET['document'];
    $registryName = $_POST['name'];
    $registryLastName = $_POST['lastName'];
    $registryBirth = $_POST['birth'];
    $registryPhone = $_POST['phone'];
    $registryCity = $_POST['city'];
    $registryDistrict = $_POST['district'];

    try {

        include_once ("db_connection.php");
        $sql = "UPDATE appointment SET name='{$registryName}',lastName='{$registryLastName}',birth='{$registryBirth}',city='{$registryCity}',district='{$registryDistrict}',phone={$registryPhone} WHERE document={$idDocument}";
        $result = $connection->query($sql);

        header("location:index.php");
    } catch (exception $Error) {
        echo "Connection failed";
    }
}
