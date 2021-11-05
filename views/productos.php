<?php
include "../bd/autoload.php";
include './header.php';
if (isset($_POST['nuevo'])) {
    $GrabarCategoria = new ControllerCategoria();
    $GrabarCategoria->GuardarCategoria($_POST);
}
if (isset($_POST['actualizar'])) {
    $GrabarCategoria = new ControllerCategoria();
    $GrabarCategoria->GuardarCategoria($_POST);
}
if(isset($_GET['idC'])){
    $Eliminar= new ControllerCategoria();
    $Eliminar->eliminarCategoria($_GET['idC']);
}
?>
<div class="content-wrapper">
    <!--HEADER DE CATEGORIA-->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PRODUCTOS</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">pRODUCTOS</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- FIN DE HEADER DE CATEGORIA -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">               
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Nueva Producto</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form  method="POST">                           
                            <?php
                            if (isset($_GET['id'])) {
                                $buscadorid = new ControllerCategoria();
                                $categoria = $buscadorid->BuscarCategoria($_GET['id']);
                                foreach ($categoria as $cato) {
                                    ?>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre Categoria</label>
                                            <div class="col-sm-10">
                                                <input type="hidden" name="idcategoria" class="form-control" id="inputEmail3" value="<?php echo $cato['idcategoria']; ?>" placeholder="id">
                                                <input type="text" name="nombre" class="form-control" id="inputEmail3" value="<?php echo $cato['nombrecategoria']; ?>" placeholder="Nombre Categoria">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Descripción</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="descripcion" class="form-control" id="inputEmail3" value="<?php echo $cato['descripcion']; ?>" placeholder="Nombre Categoria">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Estado</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="estado">
                                                    <option value="<?php echo $cato['estado']; ?>">Activo</option>
                                                    <option value="0">Inactivo</option>                                               
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" name="actualizar" class="btn btn-info">Actualizar</button>                                       
                                    </div>
                                    <!-- /.card-footer -->
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom Producto</label>
                                        <div class="col-sm-4">          
                                            <input type="text" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>
                                        
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Descripción</label>
                                        <div class="col-sm-4">          
                                            <input type="text" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>
                                    </div>                                                                    
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Proveedor</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="estado">
                                                <option>SELECCIONAR</option>
                                                <option value="1">ACTIVO</option>
                                                <option value="0">INACTIVO</option>                                               
                                            </select>
                                        </div>
                                        
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Categoria</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="estado">
                                                <option>SELECCIONAR</option>
                                                <option value="1">ACTIVO</option>
                                                <option value="0">INACTIVO</option>                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Uni Medida</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="estado">
                                                <option>SELECCIONAR</option>
                                                <option value="1">ACTIVO</option>
                                                <option value="0">INACTIVO</option>                                               
                                            </select>
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Precio Compra</label>
                                        <div class="col-sm-4">          
                                            <input type="number" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>
                                        
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Precio Venta</label>
                                        <div class="col-sm-4">          
                                            <input type="number" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Estado</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="estado">
                                                <option>SELECCIONAR</option>
                                                <option value="1">ACTIVO</option>
                                                <option value="0">INACTIVO</option>                                               
                                            </select>
                                        </div>                                      
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="nuevo" class="btn btn-success">Guardar</button>
                                    <button type="reset" class="btn btn-default float-right">Cancel</button>                                      
                                </div>
                            <?php } ?>
                        </form>    
                    </div>                                         
                </div>
            </div>
            <!--INICIO DE ESTADO DE PEDIDOS-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de categoria</h3>                            
                    <button type="button" class="btn  btn-success btn-sm float-right" data-toggle="modal" data-target="#modal-default">Nueva Categoria</button>
                </div>
                <?php
                $categoria = new ControllerCategoria();
                $newCategoria = $categoria->mostrarCategoria();
                ?>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Descripcion</th>
                                <th>Provedor</th>
                                <th>Categoria</th>
                                <th>Uni Medida</th>
                                <th>Cantidad</th>
                                <th>Compra</th>
                                <th>Venta</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>  
                            <?php
                            foreach ($newCategoria as $cat) {
                                ?>
                                <tr>
                                    <td><?php echo $cat['idcategoria']; ?></td>
                                    <td><?php echo $cat['nombrecategoria']; ?></td>
                                    <td><?php echo $cat['descripcion']; ?></td>
                                    <td><?php echo $cat['estado']; ?></td>
                                    <td><?php echo $cat['idcategoria']; ?></td>
                                    <td><?php echo $cat['nombrecategoria']; ?></td>
                                    <td><?php echo $cat['descripcion']; ?></td>
                                    <td><?php echo $cat['estado']; ?></td>
                                    <td><?php echo $cat['descripcion']; ?></td>
                                    <td><?php echo $cat['estado']; ?></td>
                                    <td> 
                                        <a href="categoria.php?id=<?php echo $cat['idcategoria'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                        <a href="categoria.php?idC=<?php echo $cat['idcategoria'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr> 
                            <?php } ?>
                        </tbody>                                
                    </table>
                </div>
                <!-- /.card-body -->
            </div>                   
        </div>
    </section> 
</div>
<?php
include './footer.php';
?> 
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            'language': {
                "lengthMenu": "Mostrar _MENU_ registros por página.",
                "zeroRecords": "Lo sentimos. No se encontraron registros.",
                "sInfo": "Mostrando: _START_ de _END_ - Total registros: _TOTAL_ ",
                "infoEmpty": "No hay registros aún.",
                "infoFiltered": "(filtrados de un total de _MAX_ registros)",
                "search": "Búsqueda",
                "LoadingRecords": "Cargando ...",
                "Processing": "Procesando...",
                "SearchPlaceholder": "Comience a teclear...",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente",
                }}
        });
    });
</script>


