<section class="content">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nueva unidad
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-dashboard"></i> Panel</a>
                            </li>
                            <li>
                                  <a href="./?view=users"><i class="fa fa-users"></i> Unidades</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Nueva unidad
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="./?action=addunidad" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <!-- <div class="form-group">
                                <label>Secretario</label>
                                <?php
                                    $cats = UserData::getAll();
                                ?>
                                <?php if(count($cats)>0):?>
                                    <select name="kind_id" class="form-control" required>
                                        <option value="">-- SELECCIONE SECRETARIO --</option>
                                    <?php foreach($cats as $cat):?>
                                        <option value="<?=$cat->id;?>"><?=$cat->nombre;?></option>
                                <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Agregar</button>

                        </form>

                    </div>
                    <div class="col-lg-3">


                    </div>
                </div>
                <!-- /.row -->
<br><br><br><br><br>
</section>