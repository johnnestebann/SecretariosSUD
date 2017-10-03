<section class="content">
<?php
$data["posts"]=UserData::getAll();
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Secretarios
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <a href="./?view=index"><i class="fa fa-dashboard"></i> Panel</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Secretarios
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                    <a href="./?view=newuser" class="btn btn-default">Agregar</a><br><br>
                        <div class="box box-primary">
                            <div class="box-body">
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Nombre de usuario</th>
                                                <th>Email</th>
                                                <th>Unidad</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td><?=$post->lastname.", ".$post->name;?></td>
                                                <td><?=$post->username;?></td>
                                                <td><?=$post->email;?></td>
                                                <td><?=Unidad::getById($post->unidad)->nombre;?></td>
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