<?php include_once('layouts/header.php'); ?>



<form class="mt-3" action="save.php" method="post" onsubmit="return validate();">

    <div class="form-group">
        <label for="idDocument">Documento</label>
        <input type="text" name="idDocument" class="form-control" id="idDocument">
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group col-md-6">
            <label for="lastName">Apellido</label>
            <input type="text" name="lastName" class="form-control" id="lastName">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="birth">Fecha de nacimiento</label>
            <input type="date" name="birth" class="form-control" id="birth">
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Celular</label>
            <input type="text" name="phone" class="form-control" id="phone">

        </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="city">Ciudad de residencia</label>
            <input type="text" name="city" class="form-control" id="city">
        </div>
        <div class="form-group col-md-6">
            <label for="district">Barrio</label>
            <input type="text" name="district" class="form-control" id="district">

        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-dark my-2">Agendar</button>
        </div>
    </div>

</form>


<?php include_once('layouts/footer.php'); ?>