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
          
<div class="row row text-right">
  <div class="col-md-12">
    <a href="<?php echo base_url('cliente/novo')?>" title="Novo cliente" class="btn btn-success"><i class="fas fa-plus-square"></i> Novo</a>
  </div>
  <?php 
    errosValidacao();
    getMsg('msgCadastro');

?> 


</div>
        <table class="table table-striped">
          <thead>
            <tr>
              <td>Nome</td>
              <td>Endereço</td>
              <td>Telefone</td>
              <td>E-mail</td>
              <td class="text-center">Status</td>
              <td class="text-center">Ações</td>  
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach($clientes as $cliente){

                echo '<tr>';
                  echo '<td>'. $cliente['nome']. '</td>';
                  echo '<td>'. $cliente['endereco']." - ".$cliente['endereco_numero'].' - '. $cliente['bairro']. '</td>';
                  echo '<td>'. $cliente['telefone']. '</td>';
                  echo '<td>'. $cliente['email']. '</td>';
                  echo '<td class="text-center">'. ($cliente['status'] == 1 ? 
                  '<span class="btn btn-success">Ativo</span>' : 
                  '<span class="btn btn-warning">Inativo</span>
                  ') . '</td>';
                  echo '<td class="text-center">';
                  
                  echo '<a href=" '. base_url('cliente/editar/'. $cliente['id'] ) .' " title="Editar" class="btn btn-primary"><i class="fas fa-edit"></i></a>';
                  echo ' <a href="'. base_url('cliente/excluir/'. $cliente['id'] ) .'" title="Exluir" class="btn btn-danger btn-apagar-registro"><i class="far fa-trash-alt"></i></a>';


                  echo '</td>';

                echo '</tr>';
              }
             
            ?>
          </tbody>

        </table>
















        </div>

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->