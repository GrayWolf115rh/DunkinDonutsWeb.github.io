<?php
    include("conexiondb.php");
    
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM productos WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $producto = $row['producto'];
            $Cantidad  = $row['Cantidad'];
            $Direccion = $row['Direccion'];
            $Telefono  = $row['Telefono'];
        }

    }

    if(isset($_POST['Actualizar'])){
            $id = $_GET['id'];
            $producto = $_POST['producto'];
            $Cantidad = $_POST['Cantidad'];
            $Direccion = $_POST['Direccion'];
            $Telefono = $_POST['Telefono'];

            $query = "UPDATE productos SET producto = '$producto', Cantidad = '$Cantidad', Direccion = '$Direccion', Telefono = '$Telefono' WHERE id =$id";
            mysqli_query($conexion, $query);
           
        
           $_SESSION['message_type'] = 'success';
            header("location: Empleados.php");
        }

?>

<?php include("../includes/header.php") ?>

<div class="container p-4">
    <div class="row">
      <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id= <?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                            <input message_type="text" name="producto" value="<?php echo $producto; ?>" class="form-control" placeholder="Actualizar producto">
                    </div>
                    
                    <div class="form-group">
                            <textarea name="Cantidad" rows="2"class="form-control" placeholder="Actualizar cantidad"><?php echo $Cantidad; ?></textarea>
                    </div>

                    <div class="form-group">
                            <textarea name="Direccion" rows="2"class="form-control" placeholder="Actualizar dirección"><?php echo $Direccion; ?></textarea>
                    </div>

                    <div class="form-group">
                            <textarea name="Telefono" rows="2"class="form-control" placeholder="Actualizar telefono"><?php echo $Telefono; ?></textarea>
                    </div>


                        <button class="btn btn-success" name="Actualizar">
                            Actualizar
                        </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../includes/footer.php") ?>