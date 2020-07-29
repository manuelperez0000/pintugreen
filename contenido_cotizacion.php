<body id="cotiza">
<?php require_once("header.php"); ?>
<div class="container py-5">
        <div class="row py-5">
            <div class="col-sm-4 bg-light p-4 m-3 rounded" >
                <form action="cotiza.php" method="POST">
                <h3>Cotización</h3>
                <p>Indicanos tus datos y el servicio que necesitas y realizaremos una cotización</p>
                <span>Nombre</span>
                <input required type="text" value="" class="form-control" id="nombre" name="nombre">
                <span>Telefono</span>
                <input required type="text" value="" class="form-control" name="telefono">
                <span>Direccion</span>
                <input required type="text" value="" class="form-control" name="direccion">
                <span>Metros cuadrados</span>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text" id="btnGroupAddon">Mts/2</div>
                    </div>
                    <input type="number" value="" class="form-control" id="metros" name="metros">
                  </div>
                
                <span>Especificaciones</span>
                <textarea required class="form-control" name="esp" id="esp" cols="30" rows="3"></textarea>
                <input type="submit" value="Enviar Cotización" class="my-2 form-control btn btn-verde">
                </form>
            </div>
        </div>
    </div>