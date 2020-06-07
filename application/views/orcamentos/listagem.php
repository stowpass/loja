<?php
    defined('BASEPATH') OR exit('URL inválida.');
?>

 
<div class="box box-primary col-lg-12">
<div class="box-header 
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
  <h3 class="box-title ">Listagem de Orçamentos:</h3>
  
</div>
<a href="<?php echo site_url('orcamento/novo'); ?>" class="btn btn-primary mb-2">Novo Orçamento</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">orcamento</th>
      <th scope="col">Cliente</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col" >Ações</th>

    </tr>
  </thead>
  
  <tbody>

  <?php foreach ($orcamentos as $orcamento) : ?>
  
    <tr>
      
         <td><?php echo $orcamento['id'] ?></td>
         <td><?php echo $orcamento['nome_cliente'] ?></td>
         <td><?php echo $orcamento['descricao'] ?></td>
         <td><?php echo $orcamento['valor'] ?></td>         
         <td>
        <a href="<?php echo site_url('geral/editarorcamento/'.$orcamento['id']) ?>" ><i class="fa fa-edit"></i> </a> | 
            <a href="<?php echo site_url('gestao/subtrair/'.$orcamento['id']) ?>"><i class="fa fa-trash"></i></a>
          
          </td>

    </tr>
  
   <?php endforeach; ?>
  </tbody>

</table>