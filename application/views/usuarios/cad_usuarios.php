<?php //
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary col-lg-12">
<div class="box-header 
                with-border col-lg-12
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
  <h3 class="box-title ">Cadastro de Usuarios</h3>
  
</div>
<!-- /.box-header -->

<!-- form start -->
<form role="form" action="<?php echo site_url('usuarios/salvar'); ?>" method="post">
<?php // foreach ($ver as $registro) :?>

  <div class="box-body fluid border border-primary">
 
    <div class="row col-lg-12">
        <div class="form-group col-lg-10">
          <label for="exampleInputEmail1">Nome:</label>
          <input type="text" class="form-control" 
                      id="nome"
                      name="nome" 
                      required
                      value="<?php //$registro['endereco']; ?>"
                      >
                      </div>
    </div>

    <div class="row col-lg-12">
        <div class="form-group col-lg-10">
          <label for="exampleInputEmail1">E-mail:</label>
          <input type="text" class="form-control" 
                      id="email"
                      name="email"
                       required
                      value="<?php //$registro['complemento']; ?>" >
      </div>
    </div>
    
    <div class="row col-lg-12">
        <div class="form-group col-lg-6">
          <label for="exampleInputEmail1">Senha:</label>
          <input type="password" class="form-control" 
                      id="senha"
                      name="senha"
                      required
                      value="<?php //$registro['complemento']; ?>" >
      </div>
    </div>
</div>
  <div class="row col-lg-12">
      <div class="box-footer mb-2 p-3">
         <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      <div class="box-footer mb-2 p-3 col-lg-5">
        <a href="<?php echo site_url('cliente')?>">Voltar</a>
      </div>
  </div>

<?php // endforeach?>
</form>
</div>


