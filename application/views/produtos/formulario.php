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


                  <form role="form" action="<?php echo site_url('produto/') . $acao;
                                            ?>" method="post">
                      <?php //foreach ($ver as $registro) :
                        ?>

                      <div class="box-body fluid border border-primary center">

                          <div class="row col-lg-12">

                              <div class="form-group col-lg-9">
                                  <label for="exampleInputEmail1">*Nome do Produto:</label>
                                  <input type="text" class="form-control" id="nome" name="nome" value="<?php
                                                                                                        echo ($produtos != NULL ? $produtos->nome : set_value('nome'));
                                                                                                        ?>" required>
                              </div>


                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">Codigo do Produto:</label>
                                  <input type="text" class="form-control " id="cod_produto" required name="cod_produto" value="<?php echo $produtos != NULL ? $produtos->cod_produto : set_value('cod_produto');  ?>">
                              </div>

                          </div>
                          <div class="row col-lg-12">
                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Valor:</label>
                                  <input type="text" class="form-control input_moeda" required id="valor" name="valor" value="<?php echo ($produtos != NULL ? $produtos->valor : set_value('valor')); ?>">
                              </div>

                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Peso:</label>
                                  <input type="text" class="form-control " required id="valor" name="valor" value="<?php echo ($produtos != NULL ? $produtos->peso : set_value('peso')); ?>">
                              </div>

                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Altura:</label>
                                  <input type="text" class="form-control " required id="valor" name="valor" value="<?php echo ($produtos != NULL ? $produtos->altura : set_value('altura')); ?>">
                              </div>


                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Largura:</label>
                                  <input type="text" class="form-control " required id="valor" name="valor" value="<?php echo ($produtos != NULL ? $produtos->largura : set_value('largura')); ?>">
                              </div>

                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Comprimento:</label>
                                  <input type="text" class="form-control " required id="valor" name="valor" value="<?php echo ($produtos != NULL ? $produtos->comprimento : set_value('comprimento')); ?>">
                              </div>

                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Quantidade Estoque:</label>
                                  <input type="text" class="form-control " required id="estoque" name="estoque" value="<?php echo ($produtos != NULL ? $produtos->estoque : set_value('comprimento')); ?>">
                              </div>


                          </div>





                          <div class="row col-lg-12">

                              <div class="form-group col-lg-8">
                                  <label class="control-label" for="textarea">Informações do Produto</label>

                                  <textarea class="form-control" id="informacao" name="informacao"><?php
                                                                                                    echo ($produtos != NULL ? $produtos->informacao : set_value('informacao'));
                                                                                                    ?></textarea>

                              </div>
                          </div>


                          <div class="row col-lg-12">
                              <div class="form-group">
                                  <label class="col-md-12 control-label" for="status">Destaque</label>
                                  <div class="col-md-12">
                                      <select id="destaque" name="destaque" class="form-control">
                                          <?php if ($produtos) { ?>

                                              <option value="1" <?= $produtos->destaque == 1 ? 'selected' : '' ?>>SIM</option>
                                              <option value="0" <?= $produtos->destaque == 0 ? 'selected' : '' ?>>NÃO</option>
                                          <?php  } else { ?>
                                              <option value="1">Sim</option>
                                              <option value="0">Não</option>
                                          <?php  } ?>

                                      </select>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-md-12 control-label" for="status">Controlar Estoque</label>
                                  <div class="col-md-12">
                                      <select id="controlar_estoque" name="controlar_estoque" class="form-control">
                                          <?php if ($produtos) { ?>

                                              <option value="1" <?= $produtos->controlar_estoque == 1 ? 'selected' : '' ?>>SIM</option>
                                              <option value="0" <?= $produtos->controlar_estoque == 0 ? 'selected' : '' ?>>NÃO</option>
                                          <?php  } else { ?>
                                              <option value="1">Sim</option>
                                              <option value="0">Não</option>
                                          <?php  } ?>

                                      </select>
                                  </div>
                              </div>
                          



                          
                              <div class="form-group">
                                  <label class="col-md-12 control-label" for="status">Marca</label>
                                  <div class="col-md-12">
                                      <select id="id_marca" name="id_marca" class="form-control">
                                      <option value=""></option>
                                      <?php  foreach ($marcas as $marca) { ?>
                                          <?php if ($dados) { ?>


                                          <?php  } else { ?>
                                            <option value="<?= $marca->id; ?>"><?=$marca->nome; ?></option>

                                          <?php  } ?>

                                    <?php  } // fim do foreach ?>

                                      </select>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-md-12 control-label" for="status">Categoria</label>
                                  <div class="col-md-12">
                                      <select id="id_categoria" name="id_categoria" class="form-control">
                                      <option value=""></option>
                                      <?php foreach ($categorias as $categoria) { ?>
                                          <?php if ($dados) { ?>

                                          <?php  } else { ?>
                                            <option value="<?= $categoria->id; ?>"><?=$categoria->nome; ?></option>


                                          <?php  } ?>
                                        <?php  } ?>
                                          

                                      </select>
                                  </div>
                              </div>
                          </div>


                          <div class="row col-lg-12">
                              <div class="form-group">
                                  <label class="col-md-12 control-label" for="status">Status</label>
                                  <div class="col-md-12">
                                      <select id="status" name="status" class="form-control">
                                          <?php if ($produtos) { ?>

                                              <option value="1" <?= $produtos->status == 1 ? 'selected' : '' ?>>Ativo</option>
                                              <option value="0" <?= $produtos->status == 0 ? 'selected' : '' ?>>Inativo</option>
                                          <?php  } else { ?>
                                              <option value="1">Ativo</option>
                                              <option value="0">Inativo</option>
                                          <?php  } ?>

                                      </select>
                                  </div>
                              </div>
                          </div>



                          <!-- /.box-body -->
                          <div class="row col-lg-12">
                              <div class="box-footer mb-2 p-3">
                                  <button type="submit" class="btn btn-primary">Salvar</button>
                              </div>
                              <div class="box-footer mb-2 p-3 col-lg-5">
                                  <a href="<?php echo site_url('produto') ?>">Voltar</a>
                              </div>
                          </div>

                          <?php if ($produtos) { ?>
                              <input type="hidden" name="id" value="<?= $produtos->id ?>">
                          <?php  } ?>
                  </form>


              </div>




          </div>

  </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->