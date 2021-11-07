<?php
include "../bd/autoload.php";
include './header.php';
if (isset($_POST['nuevo'])) {
    $GrabarProducto = new ControllerProductos();
    $GrabarProducto->GuardarProducto($_POST);
}
if (isset($_POST['actualizar'])) {
    $GrabarProducto = new ControllerProductos();
    $GrabarProducto->GuardarProducto($_POST);
}
if (isset($_GET['idC'])) {
    $Eliminar = new ControllerProductos();
    $Eliminar->eliminarProducto($_GET['idC']);
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
                                $buscadorid = new ControllerProductos();
                                $producto = $buscadorid->BuscarProducto($_GET['id']);
                                foreach ($producto as $p) {
                                    ?>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nom Producto</label>
                                            <div class="col-sm-4"> 
                                                <input type="hidden" class="form-control" value="<?php echo $p['idproducto']; ?>" name="idproducto" id="inputEmail3" placeholder="Nombre Categoria">
                                                <input type="text" class="form-control" value="<?php echo $p['nombre']; ?>" name="nombre" id="inputEmail3" placeholder="Nombre Categoria">
                                            </div>

                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Descripción</label>
                                            <div class="col-sm-4">          
                                                <input type="text" class="form-control" value="<?php echo $p['descripcion']; ?>" name="descripcion" id="inputEmail3" placeholder="Nombre Categoria">
                                            </div>
                                        </div>                                                                    
                                        <div class="form-group row">
                                            <?php
                                            $selectProveedor = new ControllerProveedores();
                                            $newSelectPro = $selectProveedor->mostrarProveedor();
                                            ?>
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Proveedor</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="idproveedor">
                                                    <option value="<?php echo $p['idproveedor']; ?>"><?php echo $p['nomcompania']; ?></option>
                                                    <?php
                                                    foreach ($newSelectPro as $pro) {
                                                        ?> 
                                                        <option value="<?php echo $pro['idproveedor']; ?>"><?php echo $pro['nomcompania']; ?></option>
                                                        <?php
                                                    }
                                                    ?>                                             
                                                </select>
                                            </div>
                                            <?php
                                            $selectCategoria = new ControllerCategoria();
                                            $newSelect = $selectCategoria->mostrarCategoria();
                                            ?>
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Categoria</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="idcategoria">
                                                    <option value="<?php echo $p['idcategoria']; ?>"><?php echo $p['nombrecategoria']; ?></option>
                                                    <?php
                                                    foreach ($newSelect as $cat) {
                                                        ?>                                                                                               
                                                        <option value="<?php echo $cat['idcategoria']; ?>"><?php echo $cat['nombrecategoria']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Uni Medida</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="unidadmedida">
                                                    <option value="<?php echo $p['unidadmedida']; ?>"><?php echo $p['unidadmedida']; ?></option>
                                                    <option value="Caja">Caja</option>
                                                    <option value="Docenas">Docenas</option>
                                                    <option value="Unidad">Unidad</option>
                                                    <option value="Par">Par</option>                                               
                                                </select>
                                            </div>
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad</label>
                                            <div class="col-sm-4">
                                                <input type="number" value="<?php echo $p['cantidad']; ?>" class="form-control" name="cantidad" id="inputEmail3" placeholder="Nombre Categoria">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Precio Compra</label>
                                            <div class="col-sm-4">          
                                                <input type="number" value="<?php echo $p['preciocompra']; ?>" class="form-control" name="preciocompra" id="inputEmail3" placeholder="Nombre Categoria">
                                            </div>

                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Precio Venta</label>
                                            <div class="col-sm-4">          
                                                <input type="number" value="<?php echo $p['precioventa']; ?>" class="form-control" name="precioventa" id="inputEmail3" placeholder="Nombre Categoria">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Estado</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="estado">                                                 
                                                    <option value="<?php echo $p['estado']; ?>">ACTIVO</option>
                                                    <option value="0">INACTIVO</option>                                               
                                                </select>
                                            </div>                                      
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" name="actualizar" class="btn btn-success">Actualizar</button>
                                        <button type="reset" class="btn btn-default float-right">Cancel</button>                                      
                                    </div>
                                    <!-- /.card-footer -->
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre Producto</label>
                                        <div class="col-sm-4">          
                                            <input type="text" class="form-control" name="nombre" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Descripción</label>
                                        <div class="col-sm-4">          
                                            <input type="text" class="form-control" name="descripcion" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>
                                    </div>                                                                    
                                    <div class="form-group row">
                                        <?php
                                        $selectProveedor = new ControllerProveedores();
                                        $newSelectPro = $selectProveedor->mostrarProveedor();
                                        ?>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Proveedor</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="idproveedor">
                                                <option>SELECCIONAR</option>
                                                <?php
                                                foreach ($newSelectPro as $pro) {
                                                    ?> 
                                                    <option value="<?php echo $pro['idproveedor']; ?>"><?php echo $pro['nomcompania']; ?></option>
                                                    <?php
                                                }
                                                ?>                                             
                                            </select>
                                        </div>
                                        <?php
                                        $selectCategoria = new ControllerCategoria();
                                        $newSelect = $selectCategoria->mostrarCategoria();
                                        ?>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Categoria</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="idcategoria">
                                                <option>SELECCIONAR</option>
                                                <?php
                                                foreach ($newSelect as $cat) {
                                                    ?>                                                                                               
                                                    <option value="<?php echo $cat['idcategoria']; ?>"><?php echo $cat['nombrecategoria']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Uni Medida</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="unidadmedida">
                                                <option>SELECCIONAR</option>
                                                <option value="Caja">Caja</option>
                                                <option value="Docenas">Docenas</option>
                                                <option value="Unidad">Unidad</option>
                                                <option value="Par">Par</option>                                               
                                            </select>
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Cantidad</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="cantidad" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Precio Compra</label>
                                        <div class="col-sm-4">          
                                            <input type="number" class="form-control" name="preciocompra" id="inputEmail3" placeholder="Nombre Categoria">
                                        </div>

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Precio Venta</label>
                                        <div class="col-sm-4">          
                                            <input type="number" class="form-control" name="precioventa" id="inputEmail3" placeholder="Nombre Categoria">
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
                    <h3 class="card-title">Lista de Productos</h3>                                               
                </div>
                <?php
                $producto = new ControllerProductos();
                $newProducto = $producto->mostrarProducto();
                ?>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Descripcion</th>
                                <th>Proveedor</th>
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
                            foreach ($newProducto as $pro) {
                                ?>
                                <tr>
                                    <td><?php echo $pro['idproducto']; ?></td>
                                    <td><?php echo $pro['nombre']; ?></td>
                                    <td><?php echo $pro['descripcion']; ?></td>
                                    <td><?php echo $pro['nomcompania']; ?></td>
                                    <td><?php echo $pro['nombrecategoria']; ?></td>
                                    <td><?php echo $pro['unidadmedida']; ?></td>
                                    <td><?php echo $pro['cantidad']; ?></td>
                                    <td><?php echo $pro['preciocompra']; ?></td>
                                    <td><?php echo $pro['precioventa']; ?></td>
                                    <td><?php echo $pro['estado']; ?></td>
                                    <td> 
                                        <a href="productos.php?id=<?php echo $pro['idproducto'] ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
                                        <a href="categoria.php?idC=<?php echo $pro['idproducto'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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


