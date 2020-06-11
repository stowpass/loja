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
          <!-- /.content -->

          <?php 
         /* 
         
         (
    [id] => 1
    [titulo] => Loja da Lingerir
    [empresa] => Elane Modas
    [cep] => 68652740
    [endereco] => rua angela campos
    [endereco_numero] => 380
    [bairro] => pavuna
    [complemento] => b
    [cidade] => pacatuba
    [estado] => ce
    [email] => elane@elane.com
    [telefone] => 85988367008
    [telefone_zap] => 85988367008
    [telefone_celular] => 85989372978
    [rg] => 980240365111111110
    [cpf] => 00655894309
    [cnpj] => 00256031000100
    [ie] => 454687341
    [p_destaque] => 16
    [observacoes] => Nada a falar mais ainda
)


        */?>

          <!-- /.box-header -->

          <!-- form start -->
<form role="form" action="<?php echo base_url('admin/config')  ?>" method="post">
            <?php// foreach ($ver as $registro) :?>

            <div class="box-body fluid border border-primary center">

              <div class="row col-lg-12">

                <div class="form-group col-lg-10">
                  <label for="exampleInputEmail1">*Titulo:</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" value="<?=$query->titulo ?>" required>
                </div>
                <div class="row col-lg-12">

                <div class="form-group col-lg-10">
                  <label for="exampleInputEmail1">*Empresa:</label>
                  <input type="text" class="form-control" id="empresa" name="empresa" value="<?=$query->empresa ?>" required>
                </div>

              </div>
              <div class="row col-lg-12">
                <div class="form-group col-lg-10">
                  <label for="exampleInputEmail1">Endereço:</label>
                  <input type="text" class="form-control" id="endereco" name="endereco" value="<?=$query->endereco ?>">
                </div>
                <div class="form-group col-lg-2">
                  <label for="exampleInputPassword1">Numero:</label>
                  <input type="text" class="form-control" id="endereco_numero" name="endereco_numero" value="<?=$query->endereco_numero ?>">
                </div>
              </div>

              <div class="row col-lg-12">
                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Complemento:</label>
                  <input type="text" class="form-control" id="complemento" name="complemento" value="<?=$query->complemento ?>">
                </div>
                <div class="form-group col-lg-3">
                  <label for="exampleInputPassword1">Bairro:</label>
                  <input type="text" class="form-control" id="bairro" name="bairro" value="<?=$query->bairro ?>">
                </div>
                <div class="form-group col-lg-3">
                  <label for="exampleInputPassword1">Cidade:</label>
                  <input type="text" class="form-control" id="cidade" name="cidade" value="<?=$query->cidade ?>">
                </div>
                <div class="form-group col-lg-3">
                  <label for="exampleInputPassword1">CEP:</label>
                  <input type="text" class="form-control" id="cep" name="cep" value="<?=$query->cep ?>">
                </div>
            


                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Telefone:</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$query->telefone ?>">
                </div>
                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Telefone Whatssap:</label>
                  <input type="text" class="form-control" id="telefone_zap" name="telefone_zap" value="<?=$query->telefone_zap ?>">
                </div>
                <div class="form-group col-lg-4">
                  <label for="exampleInputPassword1">Celular:</label>
                  <input type="text" class="form-control" id="telefone_celular" name="telefone_celular" value="<?=$query->telefone_celular ?>">
                </div>

              </div>


              <div class="row col-lg-12">
                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">CNPJ:</label>
                  <input type="text" class="form-control" id="cnpj" name="cnpj" value="<?=$query->cnpj ?>">
                </div>
                <div class="form-group col-lg-3">
                  <label for="exampleInputPassword1">RG:</label>
                  <input type="text" class="form-control" id="rg" name="rg" value="<?=$query->rg ?>">
                </div>
                <div class="form-group col-lg-3">
                  <label for="exampleInputPassword1">CPF:</label>
                  <input type="text" class="form-control" id="cpf" name="cpf" value="<?=$query->cpf ?>">
                </div>
                <div class="form-group col-lg-3">
                  <label for="exampleInputPassword1">Iscrição Estdual:</label>
                  <input type="text" class="form-control" id="ie" name="ie" value="<?=$query->ie?>">
                </div>
              </div>
              <div class="row col-lg-12">
                <div class="form-group col-lg-7">
                  <label for="exampleInputEmail1">*E-Mail:</label>
                  <input type="text" class="form-control" id="email" name="email" value="<?=$query->email ?>" required>

                </div>
                <div class="form-group col-lg-5">
                  <label for="exampleInputEmail1">Pagina Destaque:</label>
                  <input type="text" class="form-control" id="p_destaque" name="p_destaque" value="<?=$query->p_destaque ?>">


                </div>
              </div>
              <div class="row col-lg-12">
               
                <div class="form-group col-lg-12">
                  <label class="control-label" for="textarea">Observações</label>

                  <textarea class="form-control" id="observacoes" name="observacoes"><?=$query->observacoes ?></textarea>


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

              <?php// endforeach?>
          </form>
        </div>











        <!-- /.content -->
      </div>

  </div>

  </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->