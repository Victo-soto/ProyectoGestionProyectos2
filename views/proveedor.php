<?php
include './header.php';
?>
<div class="content-wrapper">
    <!--HEADER DE CATEGORIA-->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">PROVEEDORES</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">Proveedores</li>
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
                            <h3 class="card-title">Lista de proveedores</h3>
                            <button class="btn  btn-success btn-sm float-right">Nueva Proveedor</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nom Compania</th>
                                        <th>Direccion</th>
                                        <th>Ciudad</th>
                                        <th>Region</th>
                                        <th>País</th>
                                        <th>Telefono</th>
                                        <th>Pag Web</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>     
                                    <tr>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.8</td>
                                        <td>Win 98+ / OSX.1+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.8</td>
                                        <td>Win 98+ / OSX.1+</td>
                                        <td>1.8</td>
                                        <td>
                                            <a class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                            <a class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>cat</td>
                                        <td>Seamonkey 1.1</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                        <td>Gecko</td>
                                        <td>Mozilla 1.8</td>
                                        <td>Win 98+ / OSX.1+</td>
                                        <td>1.8</td>
                                        <td>
                                            <a class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>                                 
                                </tbody>                                
                            </table>
                        </div>
                        <!-- /.card-body -->
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


