  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Categoria da Pagina</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Onde na Pagina</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title"><?php echo $titulo ?></h3>

                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fas fa-times"></i></button>
                  </div>
              </div>
              <div class="card-body">
                  <!-- form start -->


                  <?php
                    errosValidacao();
                    ?>


                  <form role="form" action="<?php echo site_url('categoria/') . $acao;
                                            ?>" method="post">
                      <?php //foreach ($ver as $registro) :
                        ?>

                      <div class="box-body fluid border border-primary center">

                          <div class="row col-lg-12">

                              <div class="form-group col-lg-9">
                                  <label for="exampleInputEmail1">*Nome:</label>
                                  <input type="text" class="form-control" id="nome" name="nome" value="<?php echo ($categorias != NULL ? $categorias->nome : set_value('nome')); ?>" required>
                              </div>


                          </div>



                          <div class="form-group">
                              <label class="col-md-4 control-label" for="status">Caregoria PAI</label>
                              <div class="col-md-4">
                                  <select id="id_categoria_pai" name="id_categoria_pai" class="form-control">
                                      <?php if ($categoriaspais) { ?>
                                       <option value="" selected ></option>
                                       <?php foreach ($categoriaspais as $cat) { ?>
                                              
                                              <option value="<?= $cat->id; ?>"><?= $cat->nome; ?></option>


                                       <?php } ?>


                                         
                                      <?php  } ?>

                                  </select>
                              </div>
                          </div>



                          <div class="form-group">
                              <label class="col-md-4 control-label" for="status">Status</label>
                              <div class="col-md-2">
                                  <select id="status" name="status" class="form-control">
                                      <?php if ($categorias) { ?>

                                          <option value="1" <?= $categorias->status == 1 ? 'selected' : '' ?>>Ativo</option>
                                          <option value="0" <?= $categorias->status == 0 ? 'selected' : '' ?>>Inativo</option>
                                      <?php  } else { ?>
                                          <option value="1">Ativo</option>
                                          <option value="0">Inativo</option>
                                      <?php  } ?>

                                  </select>
                              </div>







                          </div>


                          <!-- /.box-body -->
                          <div class="row col-lg-12">
                              <div class="box-footer mb-2 p-3">
                                  <button type="submit" class="btn btn-primary">Salvar</button>
                              </div>
                              <div class="box-footer mb-2 p-3 col-lg-5">
                                  <a href="<?php echo site_url('categoria') ?>">Voltar</a>
                              </div>
                          </div>

                          <?php if ($categorias) { ?>
                              <input type="hidden" name="id" value="<?= $categorias->id ?>">
                          <?php  } ?>
                  </form>


              </div>




          </div>

  </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->