<?php
    defined('BASEPATH') OR exit('URL inválida.');
?>

<div class="box box-primary col-lg-12">
<div class="box-header 
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
  <h3 class="box-title ">Listagem de Clientes:</h3>
  
</div>
<a href="<?php echo site_url('cliente/novo'); ?>" class="btn btn-primary mb-2">Novo Cliente</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col" >Ações</th>

    </tr>
  </thead>
  
  <tbody>

  <?php foreach ($clientes as $cliente) : ?>
  
    <tr>
      
         <td><?php echo $cliente['nome'] ?></td>
         <td><?php echo $cliente['endereco'] ?></td>
         <td><?php echo $cliente['telefone_celular1'] ?></td>
         <td><?php echo $cliente['bairro'] ?></td>         
         <td><?php echo $cliente['cidade'] ?></td>
         <td>

        <a href="<?php echo base_url('cliente/editar/'.$cliente['id']); ?>" ><i class="fa fa-edit"></i>Editar </a> | 
            <a href="<?php echo site_url('cliente/excluir/'.$cliente['id']) ;?>"
              onclick='return confirm("Deseja realmente deletar esse cliente?");'><i class="fa fa-trash"></i>Excluir</a>
          
          </td>

    </tr>
  
   <?php endforeach; ?>
  </tbody>

</table>