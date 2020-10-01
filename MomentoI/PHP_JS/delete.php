
<?php

if (isset($_GET['document'])) {
    include_once('db_connection.php');

    $idDocument = $_GET['document'];
    $sql = "DELETE FROM appointment WHERE document={$idDocument}";
    $result = $connection->query($sql);
    header("location: index.php");
}

?>