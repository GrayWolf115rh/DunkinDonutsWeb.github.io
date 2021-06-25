<?php include("conexiondb.php")?>

<?php include("../includes/header.php") ?>
    
<div class="container p-4">
    <div class="row">

<div class="col-md-4">

    <?php if(isset($_SESSION['message'])) {?>

        <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
        <?php session_unset(); } ?>

    <div class="card card-body">
        <form action="guardar.php" method="POST">
        <div class="form-group">
            <input type="text" name="producto" class="form-control" placeholder="Escribe el producto" autofocus>
    </div>
    <div class="form-group">
    <textarea name="Cantidad" rows="2" class="form-control" placeholder="Inserta la cantidad"></textarea>
    </div>
    <div class="form-group">
    <textarea name="Direccion" rows="2" class="form-control" placeholder="Inserte la direccion"></textarea>
    </div>
    <div class="form-group">
    <textarea name="Telefono" rows="2" class="form-control" placeholder="Inserte el telefono"></textarea>
    </div>
    <input onclick="comprar()" type="submit" class="btn btn-success btn-block" name="save_task" value="Comprar">
  <div class="btn">
   
    </div>
   
</form>

</div>

</div>

       
    </div>
</div>
</div>
</div>



<?php include("../includes/footer.php") ?>