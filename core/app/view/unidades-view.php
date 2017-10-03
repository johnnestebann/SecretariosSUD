<section class="content">
<?php
$data["posts"]=Unidad::getAll();
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Unidades
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <a href="./?view=index"><i class="fa fa-dashboard"></i> Panel</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-building"></i> Unidades
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                    <a href="./?view=newunidad" class="btn btn-default">Agregar</a><br><br>
                        <div class="box box-primary">
                            <div class="box-body">
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td><?=$post->nombre;?></td>
                                                <td style="width:70px;">
                                                <a href="./?view=edituser&id=<?=$post->id;?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="./?action=deluser&id=<?=$post->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                </section>