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
                  <form role="form" action="<?php //echo site_url('cliente/').$acao; 
                                            ?>" method="post">
                      <?php //foreach ($ver as $registro) :
                        ?>

                      <div class="box-body fluid border border-primary center">

                          <div class="row col-lg-12">

                              <div class="form-group col-lg-9">
                                  <label for="exampleInputEmail1">*Nome:</label>
                                  <input type="text" class="form-control" id="nome" name="nome" value="<?php // $registro['nome']; 
                                                                                                        ?>" required>
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">Data de Nascimento:</label>
                                  <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php // $registro['bairro']; 
                                                                                                                                ?>">
                              </div>

                          </div>
                          <div class="row col-lg-12">
                          <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">CPF:</label>
                                  <input type="text" class="form-control" id="cpf" name="cpf" value="<?php // $registro['cpf']; 
                                                                                                        ?>">
                              </div>

                              <div class="form-group col-lg-8">
                                  <label for="exampleInputEmail1">Endereço:</label>
                                  <input type="text" class="form-control" id="endereco" name="endereco" value="<?php // $registro['endereco']; 
                                                                                                                ?>">
                              </div>
                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Numero:</label>
                                  <input type="text" class="form-control" id="endereco_numero" name="endereco_numero" value="<?php // $registro['endereco_numero']; 
                                                                                                                                ?>">
                              </div>
                          </div>

                          <div class="row col-lg-12">
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputEmail1">Complemento:</label>
                                  <input type="text" class="form-control" id="complemento" name="complemento" value="<?php // $registro['complemento']; 
                                                                                                                        ?>">
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">Bairro:</label>
                                  <input type="text" class="form-control" id="bairro" name="bairro" value="<?php // $registro['bairro']; 
                                                                                                            ?>">
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">Cidade:</label>
                                  <input type="text" class="form-control" id="cidade" name="cidade" value="<?php // $registro['cidade']; 
                                                                                                            ?>">
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">CEP:</label>
                                  <input type="text" class="form-control" id="cep" name="cep" value="<?php // $registro['cep']; 
                                                                                                        ?>">
                              </div>
                          </div>
                          <div class="row col-lg-12">
                          <div class="form-group col-lg-1">
                                  <label for="exampleInputPassword1">Estado:</label>
                                  <input type="text" class="form-control" id="estado" name="estado" value="<?php // $registro['telefone']; 
                                                                                                                ?>" required>
                              </div>
                              <div class="form-group col-lg-4">
                                  <label for="exampleInputPassword1">Telefone:</label>
                                  <input type="text" class="form-control" id="telefone" name="telefone" value="<?php // $registro['telefone']; 
                                                                                                                ?>" required>
                              </div>
                             

                          </div>


                          <div class="row col-lg-12">
                              <div class="row col-lg-12">
                                  <div class="form-group col-lg-7">
                                      <label for="exampleInputEmail1">*E-Mail:</label>
                                      <input type="text" class="form-control" id="email" name="email" value="<?php // $registro['email']; 
                                                                                                                ?>" required>

                                  </div>

                                  <div class="form-group col-lg-3">
                                      <label for="exampleInputPassword1">Senha:</label>
                                      <input type="text" class="form-control" id="senha" name="senha" value="<?php // $registro['cpf']; 
                                                                                                                ?>">
                                  </div>

                              </div>
                              <div class="row col-lg-12">

                                  <div class="form-group col-lg-8">
                                      <label class="control-label" for="textarea">Observações</label>

                                      <textarea class="form-control" id="observacoes" name="observacoes"><?php // $registro['observacoes'];
                                                                                                            ?></textarea>

                                  </div>
                              </div>
                              <!-- /.box-body -->
                              <div class="row col-lg-12">
                                  <div class="box-footer mb-2 p-3">
                                      <button type="submit" class="btn btn-primary">Salvar</button>
                                  </div>
                                  <div class="box-footer mb-2 p-3 col-lg-5">
                                      <a href="<?php echo site_url('cliente') ?>">Voltar</a>
                                  </div>
                              </div>

                              <?php //endforeach
                                ?>
                  </form>


              </div>




          </div>

  </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->