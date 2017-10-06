<section class="content">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nuevo secretario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?view=index"><i class="fa fa-dashboard"></i> Panel</a>
                            </li>
                            <li>
                                  <a href="./?view=users"><i class="fa fa-users"></i> Secretarios</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Nuevo secretario
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                        <form role="form" method="post" action="./?action=adduser" enctype="multipart/form-data">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label>Nombres</label>
                                <input type="text" name="name" class="form-control" placeholder="Nombre">
                            </div>
                            
                            <div class="form-group">
                                <label>Nombre de usuario</label>
                                <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Unidad</label>
                                <?php
                                    $unidades = Unidad::getAll();
                                ?>
                                <?php if(count($unidades) > 0):?>
                                    <select name="unidad" class="form-control" required>
                                        <option value="">-- SELECCIONE UNIDAD --</option>
                                    <?php foreach($unidades as $unidad):?>
                                        <option value="<?=$unidad->id;?>"><?=$unidad->nombre;?></option>
                                <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Agregar</button>

                    </div>
                    <div class="col-lg-5">
                    	<div class="form-group">
                                <label>Apellidos</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Apellidos">
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            
                            <div class="form-group">
                                <label>Tipo</label>
                                <?php
                                    $cats = KindData::getAll();
                                ?>
                                <?php if(count($cats)>0):?>
                                    <select name="kind_id" class="form-control" required>
                                        <option value="">-- SELECCIONE TIPO --</option>
                                    <?php foreach($cats as $cat):?>
                                        <option value="<?=$cat->id;?>"><?=$cat->name;?></option>
                                <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div>
                    </div>
                    </form>
                    <div class="col-lg-3">


                    </div>
                </div>
                <!-- /.row -->
<br><br><br><br><br>
</section>