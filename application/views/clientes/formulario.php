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


                  <form role="form" action="<?php echo site_url('cliente/').$acao;
                                            ?>" method="post">
                      <?php //foreach ($ver as $registro) :
                        ?>

                      <div class="box-body fluid border border-primary center">

                          <div class="row col-lg-12">

                              <div class="form-group col-lg-9">
                                  <label for="exampleInputEmail1">*Nome:</label>
                                  <input type="text" class="form-control" id="nome" name="nome" value="<?php

                                                                                                        echo ($clientes != NULL ? $clientes->nome : set_value('nome'));


                                                                                                        ?>" required>
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">Data de Nascimento:</label>
                                  <input type="text" class="form-control input_data" id="data_nascimento" required name="data_nascimento" value="<?php
                                       echo $clientes != NULL ? formataDataBR(($clientes->data_nascimento)) : set_value('data_nascimento');  ?>">
                              </div>

                          </div>
                          <div class="row col-lg-12">
                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">CPF:</label>
                                  <input type="text" class="form-control input_cpf" required id="cpf" name="cpf" value="<?php
                                                                                                                        echo ($clientes != NULL ? $clientes->cpf : set_value('cpf'));
                                                                                                                        ?>">
                              </div>

                              <div class="form-group col-lg-8">
                                  <label for="exampleInputEmail1">Endereço:</label>
                                  <input type="text" class="form-control" id="endereco" name="endereco" value="<?php
                                                                                                                echo ($clientes != NULL ? $clientes->endereco : set_value('endereco'));
                                                                                                                ?>">
                              </div>
                              <div class="form-group col-lg-2">
                                  <label for="exampleInputPassword1">Numero:</label>
                                  <input type="text" class="form-control" id="endereco_numero" name="endereco_numero" value="<?php
                                                                                                                                echo ($clientes != NULL ? $clientes->endereco_numero : set_value('endereco_numero')); ?>">
                              </div>
                          </div>

                          <div class="row col-lg-12">
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputEmail1">Complemento:</label>
                                  <input type="text" class="form-control" id="complemento" name="complemento" value="<?php
                                                                                                                        echo ($clientes != NULL ? $clientes->complemento : set_value('complemento')); ?>">
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">Bairro:</label>
                                  <input type="text" class="form-control" id="bairro" name="bairro" value="<?php
                                                                                                            echo ($clientes != NULL ? $clientes->bairro : set_value('bairro'));
                                                                                                            ?>">
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">Cidade:</label>
                                  <input type="text" class="form-control" id="cidade" name="cidade" value="<?php
                                                                                                            echo ($clientes != NULL ? $clientes->cidade : set_value('cidade'));
                                                                                                            ?>">
                              </div>
                              <div class="form-group col-lg-3">
                                  <label for="exampleInputPassword1">CEP:</label>
                                  <input type="text" class="form-control input_cep" id="cep" name="cep" value="<?php
                                                                                                                echo ($clientes != NULL ? $clientes->cep : set_value('cep'));  ?>">
                              </div>
                          </div>
                          <div class="row col-lg-12">
                              <div class="form-group col-lg-1">
                                  <label for="exampleInputPassword1">Estado:</label>
                                  <input type="text" maxlength="2" class="form-control" id="estado" name="estado" value="<?php
                                                                                                                            echo ($clientes != NULL ? $clientes->estado : set_value('estado')); ?>" required>
                              </div>
                              <div class="form-group col-lg-4">
                                  <label for="exampleInputPassword1">Telefone:</label>
                                  <input type="text" class="form-control input_telefone" id="telefone" name="telefone" value="<?php
                                                                                                                                echo ($clientes != NULL ? $clientes->telefone : set_value('telefone'));
                                                                                                                                ?>" required>
                              </div>
                              <div class="form-group col-lg-4">
                                  <label for="exampleInputPassword1">Telefone Zap:</label>
                                  <input type="text" class="form-control input_telefone" id="telefone_zap" name="telefone_zap" value="<?php
                                                                                                                                        echo ($clientes != NULL ? $clientes->telefone_zap : set_value('telefone_zap'));

                                                                                                                                        ?>" required>
                              </div>


                          </div>


                          <div class="row col-lg-12">
                              <div class="row col-lg-12">
                                  <div class="form-group col-lg-7">
                                      <label for="exampleInputEmail1">*E-Mail:</label>
                                      <input type="text" class="form-control" id="email" name="email" value="<?php echo ($clientes != NULL ? $clientes->email : set_value('email')); ?>" required>

                                  </div>

                                  <div class="form-group col-lg-3">
                                      <label for="exampleInputPassword1">Senha:</label>
                                      <input type="password" class="form-control" maxlength="6" id="senha" name="senha" value="">
                                  </div>

                              </div>
                              <div class="row col-lg-12">

                                  <div class="form-group col-lg-8">
                                      <label class="control-label" for="textarea">Observações</label>

                                      <textarea class="form-control" id="observacoes" name="observacoes"><?php
                                                                                                            echo ($clientes != NULL ? $clientes->observacoes : set_value('observacoes'));
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

                              <?php if ($clientes) {?>
                <input type="hidden" name="id" value="<?= $clientes->id ?>">
                <?php  }?>
                  </form>


              </div>




          </div>

  </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->