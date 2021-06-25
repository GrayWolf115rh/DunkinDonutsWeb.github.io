<?php include("conexiondb.php")?>

<?php include("../includes/header.php") ?>
    


        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Productos</th>
                            <th>Cantidad</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $query = "SELECT * FROM productos";
                        $result_task = mysqli_query($conexion, $query);

                        while($row = mysqli_fetch_array($result_task)) {  ?>
                            <tr>
                                    <td><?php echo $row['producto'] ?></td>
                                    <td><?php echo $row['Cantidad'] ?></td>
                                    <td><?php echo $row['Direccion'] ?></td>
                                    <td><?php echo $row['Telefono'] ?></td>
                                    <td>
                                        <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                            Editar
                                        </a>
                                        <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                            Eliminar
                                        </a>
                                    </td>
                            </tr>

                        <?php }  ?>
                     </tbody>    
                </table>
</div>
    </div>
</div>
</div>
</div>



<?php include("../includes/footer.php") ?>