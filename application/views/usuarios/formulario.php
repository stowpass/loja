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



          <form class="form-horizontal" action="<?php echo base_url('admin/usuarios/core') ?>" method="post">

                <?php 
                if (validation_errors()) {
                  echo '<div class="alert alert-danger" role="alert">'. validation_errors() . '</div>';
                }
                ?>

                <div class="form-group">
                  <label for="Nome" class="col-sm-2 control-label">Nome</label>
                  <div class="col-sm-10">
                    <input  type="text" 
                            class="form-control" 
                            name="nome" 
                            id="Nome" 
                            value="<?php 
                              echo ($dados != NULL ? $dados->username : set_value('nome'));
                            ?>"
                            placeholder="Nome">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Mail" class="col-sm-2 control-label">E-mail</label>
                  <div class="col-sm-10">
                    <input  type="email" 
                            class="form-control" 
                            name="email" 
                            id="Mail"
                            value="<?php
                             echo ($dados != NULL ? $dados->email : set_value('email'));
                            ?>" 
                            placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="senha" class="col-sm-2 control-label">Senha</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="minimo 6 caracteres">
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="status">Status</label>
                  <div class="col-md-2">
                    <select id="status" name="status" class="form-control">
                     <?php  if ($dados) { ?>
                     
                      <option value="1" <?= $dados->active == 1 ? 'selected' : ''?> >Ativo</option>
                      <option value="0"<?= $dados->active == 0 ? 'selected' : ''?>>Inativo</option>
                      <?php  } else { ?>
                        <option value="1">Ativo</option>
                      <option value="0">>Inativo</option>
                      <?php  }?>
                      
                    </select>
                  </div>
                </div>
                <?php if ($dados) {?>
                <input type="hidden" name="id_usuario" value="<?= $dados->id ?>">
                <?php  }?>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for=""></label>
                  <div class="col-md-4">
                    <input class="btn btn-primary" type="submit" value="Salvar">
                  </div>
                </div>



          </form>




        </div>

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->