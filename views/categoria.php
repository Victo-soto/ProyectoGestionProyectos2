<?php
include "../bd/autoload.php";
include './header.php';
?>
<div class="content-wrapper">
    <!--HEADER DE CATEGORIA-->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">CATEGORIAS</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">Categorias</li>
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
                                        <th>ID CATEGORIA</th>
                                        <th>Nombre Categoria</th>
                                        <th>Descripcion</th>
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
                                            <td>
                                                <button type="button" class="btn  btn-success" data-toggle="modal" data-target="#modal-default"><i class="fas fa-pen-square"></i></button>
                                                <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr> 
                                    <?php } ?>
                                </tbody>                                
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Nueva Categoria</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form>
                                    <div class="modal-body">

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombre Categoria</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre Categoria">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Descripción</label>
                                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>                                               
                                            </div>                                                                                      
                                        </div> 
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </div>
            </div>
        </div>
    </section>   
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
