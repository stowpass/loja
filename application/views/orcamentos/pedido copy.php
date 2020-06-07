  
    <form action="<?php echo site_url('orcamento/salvar'); ?>" method="post"  enctype="multipart/form-data" >
    <br> 
    <div class="box-body fluid border border-primary">
      
      <div class="row col-lg-12">
            <div class="form-group col-lg-12">
         <label for="exampleInputEmail1">Cliente:</label>
          <select class="form-control" name="id_cliente" id="id_cliente" required>
          
           <option    value="" disabled selected>Selecione Cliente</option>
           <?php foreach ($clientes as $cliente):?>
            <option   value="<?php echo $cliente['id']?>"><?php echo $cliente['nome'];?></option>
            
            <?php endforeach; ?>
          </select>
           
        </div>
    
    </div>


   
  
  </div>


  <div class="row col-lg-12">
      <div class="form-group col-lg-10">
        <label for="exampleInputEmail1">motivo:</label>
        <input type="text" class="form-control" 
                    id="endereco"
                    name="motivo" 
                    value=""
                    >
    </div>
  
    
  </div>

  
  </div>

      <table class="table table-bordered" id="tbl_posts">
        <thead>
          <tr>
            <th>Id</th>
            <th>Quantidade</th>
            <th>Descrição</th>
            <th>Valor Unitario</th>
            <th>Valor Total</th>
            <th>Acão <a class="btn btn-primary pull-right add-record" data-added="0"><i class="glyphicon glyphicon-plus"></i></a>
</th>
          </tr>
        </thead>
        <tbody class="tbl_posts_body" id="tbl_posts_body">
          <tr class="ton" id="rec-1" name="id_linha">
              <td><span class="sn">1</span></td>
              <td><input type="number" name="quantidade" id="quantidade" value=""></td>
              <td><input type="text" name="descricao" id=""></td>
              <td><input type="number" name="valor_unitario" id="valor_unitario"  onkeyup="calcular()" value=""></td>
              <td><input type="number" readonly name="valor_total" class="vt" id="valor_total[]" value=""></td>
              <td id="link">
              <a class="btn btn-xs delete-record" data-id="1"><i class="glyphicon glyphicon-trash"></i></a>
             
 
            </td>
          </tr>
        </tbody>
      </table>
    </div> 



 <div class="row col-lg-12">
      <div class="box-footer mb-2 p-3">
         <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      <div class="box-footer mb-2 p-3 col-lg-5">
        <a href="<?php echo site_url('cliente')?>">Voltar</a>
      </div>
  </div>
  </form>


</body>
</html>




<div style="display:none;">
    <table id="sample_table">
      <tr class="ton" id="" name="id_linha">
            <td><span class="sn"></span></td>
            <td><input type="number" name="quantidade" id="quantidade" value="" ></td>
            <td><input type="text" name="descricao" id=""></td>
            <td><input type="number" name="valor_unitario" id="valor_unitario"  onkeyup="calcular()" value=""></td>
            <td><input type="number" readonly name="valor_total" class="vt" id="valor_total[]" value=""></td>
            <td>
              <a class="btn btn-xs delete-record" data-id="0"><i class="glyphicon glyphicon-trash"></i></a>

            </td>
     </tr>
   </table>
 </div>



 
<script type="text/javascript">
  $(document).ready(function(){
    $('#header').load('../header-ads.html');
    $('#footer').load('../footer-ads.html');
     jQuery(document).delegate('a.add-record', 'click', function(e) {
     e.preventDefault();    
     var content = jQuery('#sample_table tr'),
     size = jQuery('#tbl_posts >tbody >tr').length + 1,
     element = null,    
     element = content.clone();
     element.attr('id', 'rec-'+size);
     element.find('.delete-record').attr('data-id', size);
     element.appendTo('#tbl_posts_body');
     element.find('.sn').html(size);
   });
    jQuery(document).delegate('a.delete-record', 'click', function(e) {
     e.preventDefault();    
     // var didConfirm = confirm("Deseja Apagar Item?");
     if (jQuery(this).attr('data-id')>1) {
      var id = jQuery(this).attr('data-id');
      var targetDiv = jQuery(this).attr('targetDiv');
      jQuery('#rec-' + id).remove();
      
    //regnerate index number on table
    $('#tbl_posts_body tr').each(function(index){
		$(this).find('span.sn').html(index+1);
    });
    return true;
     }
 // } else {
    //return false;
 // }
});
  });
</script>

<script>
	$(document).ready(function () {
	//chamada da função para calcular valor total
	$(".table").on("change keyup keydown paste propertychange bind mouseover", function(){
	    calcular();
	});

    var i = 5;
    //adiciona nova linha
    $("#add").on("click", function () {
        i++;
        
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td><input type="text" class="form-control" id="cod" name="cod[]"></td>';
        cols += '<td><input type="text" class="form-control" id="desc" name="desc[]"></td>';
        cols += '<td><input type="text" class="form-control" id="qnd' + i + '" name="qnd[]"></td>';
        cols += '<td><input type="text" class="form-control" id="vlund' + i + '" name="vlund[]"></td>';
        cols += '<td><input style="display: none;" type="text" class="form-control soma" id="vltotal' + i + '" name="vltotal[]" onblur="calcular()">';
        cols += '<input type="text" class="form-control somaS" id="vltotalS' + i + '"></td>';
        cols += '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger deleteLinha">X</button></td>';
        newRow.append(cols);
        
        $("#products-table").append(newRow);
        
	    	$(".soma").each(function() {
	        	$(this).blur(function(){
	            	calcular();
	        	});
	    	});
	    
    });
    
    //chamada da função para calcular o total de cada linha
    $("#products-table").on("blur keyup", 'input[id^="vlund"], input[id^="qnd"]', function (event) {
        calculateRow($(this).closest("tr"));
    });
    
    //remove linha
    $("#products-table").on("click", "button.deleteLinha", function (event) {
        $(this).closest("tr").remove();
    });
});
 
	//função para calcular o total de cada linha   
        function calculateRow(row) {
	    var vlund = row.find('input[id^="vlund"]').val();
	    //retira separadores de milhar ponto
	    vlund = vlund.split(".").join("");
	    //substitui separador decimal virgula por ponto
	    vlund=vlund.replace(",", ".");
	    vlund = +vlund;
	    var qnd = +row.find('input[id^="qnd"]').val();
	    //total para uso nos calculos
	    //2 casas decimais 
	    var total = (vlund * qnd).toFixed(2);   
	    row.find('input[id^="vltotal"]').val(total); 
	    //totalS para uso na apresentação substitui separador decimal ponto por virgula
	    totalS=total.replace(".", ",");
	    //a regex abaixo coloca um ponto a esquerda de cada grupo de 3 digitos desde que não seja no inicio do numero
	    row.find('input[id^="vltotalS"]').val((totalS).replace(/\B(?=(\d{3})+(?!\d))/g, "."));  
	
	}

	//função para calcular o total da nota 
	function calcular() {
    	var soma = 0;
    	$(".soma").each(function(indice, item){
        	var valor = parseFloat($(item).val());
        	//console.log(valor);
        	if ( !isNaN( valor ) ) {
            	soma += valor;
        	}
    	});
    
    	//pega o valor das outras despesas e caso haja substitue a virgula por ponto
    	var outras = (document.getElementById("outras").value).replace(",", ".");
    
    	outras=Number(outras);
        soma=(soma+outras).toFixed(2);
    	//substitui separador decimal ponto por virgula
    	soma=soma.replace(".", ",");
    	//a regex abaixo coloca um ponto a esquerda de cada grupo de 3 digitos desde que não seja no inicio do numero
    	$("#totalnfe").val((soma).replace(/\B(?=(\d{3})+(?!\d))/g, "."))
	}
</script>
