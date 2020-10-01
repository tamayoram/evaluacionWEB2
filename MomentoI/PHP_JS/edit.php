<?php

if (isset($_GET['document'])) {
    include_once('db_connection.php');

    $IdDocument = $_GET['document'];
    $sql = "SELECT * FROM appointment WHERE document={$IdDocument}";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {

        ($row = $result->fetch_assoc());
    }
}

?>


<?php include_once('layouts/header.php'); ?>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#staticBackdrop">
    Información importante
</button>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Instrucciones para editar los datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Por favor seleccione el recuadro que requiere editar.</p>
                <p>Una vez se encuentre seleccionado, ingrese la nueva información.</p>
                <p> Tenga en cuenta las restricciones: no deben existir campos vacíos, los campos documento y celular son numéricos, el campo celular debe tener 10 dígitos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<form class="mt-3" action="update.php?document=<?php echo $row['document'] ?>" method="post" onsubmit="return validate();">

    <div class="form-group">
        <label for="idDocument">Documento</label>
        <input type="text" value="<?php echo $row['document'] ?>" name="idDocument" class="form-control" id="idDocument" data-toggle="tooltip" data-placement="right" title="Actualice el documento">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control" id="name" data-toggle="tooltip" data-placement="right" title="Actualice el nombre">
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Apellido</label>
            <input type="text" value="<?php echo $row['lastName'] ?>" name="lastName" class="form-control" id="lastName" data-toggle="tooltip" data-placement="right" title="Actualice el apellido">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="birth">Fecha de nacimiento</label>
            <input type="date" value="<?php echo $row['birth'] ?>" name="birth" class="form-control" id="birth" data-toggle="tooltip" data-placement="right" title="Actualice la fecha de nacimiento">
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Celular</label>
            <input type="text" value="<?php echo $row['phone'] ?>" name="phone" class="form-control" id="phone" data-toggle="tooltip" data-placement="right" title="Actualice el número celular">

        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="city">Ciudad de residencia</label>
            <input type="text" value="<?php echo $row['city'] ?>" name="city" class="form-control" id="city" data-toggle="tooltip" data-placement="right" title="Actualice la ciudad de residencia">
        </div>
        <div class="form-group col-md-6">
            <label for="district">Barrio</label>
            <input type="text" value="<?php echo $row['district'] ?>" name="district" class="form-control" id="district" data-toggle="tooltip" data-placement="right" title="Actualice el barrio de residencia">

        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-dark my-2">Editar</button>
        </div>
    </div>

</form>



<?php include_once('layouts/footer.php'); ?>