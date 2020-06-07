<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="box box-primary col-lg-12 ">
<div class="box-header 
                with-border col-lg-12 
                border 
                border-primary 
                p-2 mb-1 bg-info text-white">
  <h3 class="box-title ">Cadastro de Clientes</h3>
  
</div>
<!-- /.box-header -->

<!-- form start -->
<form role="form" action="<?php echo site_url('cliente/').$acao; ?>" method="post">
<?php foreach ($ver as $registro) :?>

  <div class="box-body fluid border border-primary center">
      
      <div class="row col-lg-12">
            <div class="form-group col-lg-2">
          <label for="exampleFormControlSelect1">*Tipo Cliente:</label>
          <select class="form-control" name="tipo_pessoa" id="tipo_pessoa" required>
           <option    value="">Selecione</option>
            <option   value="fisica"    <?=($registro['tipo_pessoa'] == 'fisica')?'selected':''?>>Fisica</option>
            <option   value="juridica"  <?=($registro['tipo_pessoa'] == 'juridica')?'selected':''?>>Juridica</option>
         
          </select>
        </div>
        <div class="form-group col-lg-10">
          <label for="exampleInputEmail1">*Nome:</label>
          <input type="text" class="form-control" 
                      id="nome"
                      name="nome"
                      value="<?=$registro['nome']; ?>"
                      required >
    </div>
    
    </div>
    <div class="row col-lg-12">
        <div class="form-group col-lg-10">
          <label for="exampleInputEmail1">Endereço:</label>
          <input type="text" class="form-control" 
                      id="endereco"
                      name="endereco" 
                      value="<?=$registro['endereco']; ?>"
                      >
      </div>
        <div class="form-group col-lg-2">
          <label for="exampleInputPassword1">Numero:</label>
          <input type="text" class="form-control" 
                      id="endereco_numero"
                      name="endereco_numero" 
                      value="<?=$registro['endereco_numero']; ?>"
                      >
        </div>
    </div>

    <div class="row col-lg-12">
        <div class="form-group col-lg-3">
          <label for="exampleInputEmail1">Complemento:</label>
          <input type="text" class="form-control" 
                      id="complemento"
                      name="complemento"
                      value="<?=$registro['complemento']; ?>" >
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">Bairro:</label>
          <input type="text" class="form-control" 
                      id="bairro"
                      name="bairro" 
                      value="<?=$registro['bairro']; ?>">
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">Cidade:</label>
          <input type="text" class="form-control" 
                      id="cidade"
                      name="cidade"
                      value="<?=$registro['cidade']; ?>" >
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">CEP:</label>
          <input type="text" class="form-control" 
                      id="cep"
                      name="cep"
                      value="<?=$registro['cep']; ?>" >
        </div>
    </div>
    <div class="row col-lg-12">
    <div class="form-group col-lg-4">
          <label for="exampleInputPassword1">Celular 01:</label>
          <input type="text" class="form-control" 
                      id="telefone_celular1"
                      name="telefone_celular1"
                      value="<?=$registro['telefone_celular1']; ?>"
                      required >
      </div>
      
        <div class="form-group col-lg-4">
          <label for="exampleInputEmail1">Telefone_fixo:</label>
          <input type="text" class="form-control" 
                      id="telefone_fixo"
                      name="telefone_fixo"
                      value="<?=$registro['telefone_fixo']; ?>"
                       >
      </div>
 
        <div class="form-group col-lg-4">
          <label for="exampleInputPassword1">Celular 02:</label>
          <input type="text" class="form-control" 
                      id="telefone_celular2"
                      name="telefone_celular2" 
                      value="<?=$registro['telefone_celular2']; ?>">
      </div>
      
    </div>


    <div class="row col-lg-12">
        <div class="form-group col-lg-3">
          <label for="exampleInputEmail1">CNPJ:</label>
          <input type="text" class="form-control" 
                      id="cnpj"
                      name="cnpj"
                      value="<?=$registro['cnpj']; ?>" >
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">RG:</label>
          <input type="text" class="form-control" 
                      id="rg"
                      name="rg" 
                      value="<?=$registro['rg']; ?>">
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">CPF:</label>
          <input type="text" class="form-control" 
                      id="cpf"
                      name="cpf" 
                      value="<?=$registro['cpf']; ?>">
      </div>
        <div class="form-group col-lg-3">
          <label for="exampleInputPassword1">Iscrição Estdual:</label>
          <input type="text" class="form-control" 
                      id="ie"
                      name="ie" 
                      value="<?=$registro['ie']; ?>">
        </div>
    </div>
    <div class="row col-lg-12">
        <div class="form-group col-lg-7">
          <label for="exampleInputEmail1">*E-Mail:</label>
          <input type="text" class="form-control" 
                      id="email"
                      name="email"
                      value="<?=$registro['email']; ?>"
                      required >

        </div>
        <div class="form-group col-lg-5">
          <label for="exampleInputEmail1">Serviço Contratado no inicio do contato:</label>
          <input type="text" class="form-control" 
                      id="servico_contratado"
                      name="servico_contratado" 
                      value="<?=$registro['servico_contratado']; ?>"
                      >
                      

          </div>
    </div>
    <div class="row col-lg-12">
        <div class="form-group col-lg-4">
          <label for="exampleInputEmail1">Contato na Empresa:</label>
          <input      
                      class="form-control" 
                      type="text" 
                      id="contato_empresa"
                      name="contato_empresa"
                      value="<?=$registro['contato_empresa']; ?>"
                      >
                    
       </div>
        <div class="form-group col-lg-8">
        <label class="control-label" for="textarea">Observações</label>
                            
            <textarea class="form-control" 
                id="observacoes"
                name="observacoes"><?=$registro['observacoes'];?></textarea>
            

          </div>
    </div>
  <!-- /.box-body -->
  <div class="row col-lg-12">
      <div class="box-footer mb-2 p-3">
         <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      <div class="box-footer mb-2 p-3 col-lg-5">
        <a href="<?php echo site_url('cliente')?>">Voltar</a>
      </div>
  </div>

<?php endforeach?>
</form>
</div>


