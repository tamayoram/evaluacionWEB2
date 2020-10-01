<?php include_once('layouts/header.php'); ?>

<?php

function listRecords($connection)
{

    $sql = "SELECT * from appointment";
    $result = $connection->query($sql);
    return $result;
}

try {
    require_once 'db_connection.php';

    $result = listRecords($connection);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            echo $card =

                "<div class='card-group'>
              <div class='card'>
             
                    <div class='card-body border border-dark m-5'>
                    
                        <h5 class='card-title'>Documento: {$row['document']}</h5>
                        <p class='card-text'>Nombre: {$row['name']}</p>
                        <p class='card-text'>Apellido: {$row['lastName']}</p>
                        <p class='card-text'>Fecha de nacimiento: {$row['birth']}</p>
                        <p class='card-text'>Ciudad de residencia: {$row['city']}</p>
                        <p class='card-text'>Barrio: {$row['district']}</p>
                        <p class='card-text'>Celular: {$row['phone']}</p>
                    
                         <a href='javascript:DeleteRecord({$row['document']})' class='btn btn-danger float-right'>Eliminar</a>
                        <a href='edit.php?document={$row['document']}' class='btn btn-dark float-right'>Editar</a> 
                    
                    </div>
                </div>
            </div>";
        }
    }
} catch (Exception $ex) {

    echo $ex;
}

?>


    <?php include_once('layouts/footer.php'); ?>