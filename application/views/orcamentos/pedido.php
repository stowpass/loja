  <hr>
  <form action="<?php echo site_url('orcamento/salvar'); ?>" method="post" enctype="multipart/form-data">
    <br>

    <div class="box-body fluid border border-primary">

      <div class="row col-lg-12">
        <div class="form-group col-lg-12">
          <label for="exampleInputEmail1">Cliente:</label>
          <select class="form-control" name="id_cliente" id="id_cliente" required>

            <option value="" disabled selected>Selecione Cliente</option>
            <?php foreach ($clientes as $cliente) : ?>
              <option value="<?php echo $cliente['id'] ?>"><?php echo $cliente['nome']; ?></option>

            <?php endforeach; ?>
          </select>

        </div>

      </div>


      <div class="row col-lg-12">
        <div class="form-group col-lg-10">
          <label for="exampleInputEmail1">motivo:</label>
          <input type="text" class="form-control" id="endereco" name="motivo" value="">
        </div>


      </div>




    </div>
    <br>

    <hr>
    <div>



      <table class="table" id="products-table">
        <thead>
          <tr>

            <th>Quantidade</th>
            <th>Descrição</th>
            <th>Valor Unitario</th>
            <th>Valor Total</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" class="form-control" id="quantidade" name="quantidade[]"></td>
            <td><input type="text" class="form-control desc" id="descricao" name="descricao[]"></td>
            <td><input type="text" class="form-control" id="valor_unitario" name="valor_unitario[]" onblur="calcular()"></td>
            <!-- todos os inputs com style="display: none; são para uso nos calculos-->
            <td>
              <input  style="display: none;" type="text" class="form-control soma" id="valor_total" name="valor_total[]" onblur="calcular()" readonly>
              <input type="text" class="form-control somaS" id="valor_totalS">
            </td>
          </tr>


        </tbody>
        <tfoot>
          <tr>
            <td><button type="button" name="add" id="add" class="btn btn-success">Adicionar</button></td>
            <td></td>
            <td></td>

            <td hidden><label for="totalnfe">Outras Despesas</label>
              <input type="text" class="form-control" id="outras" name="outras">
            </td>
            <td>
              <label for="totalnfe">Valor Parcial</label>
              <input type="text" class="total" id="totalnfe" name="total_parcial" readonly></td>
          </tr>
        </tfoot>
      </table>

    </div>
    <br>

    </html>














    <script>
      $(document).ready(function() {
        //chamada da função para calcular valor total
        $(".table").on("change keyup keydown paste propertychange bind mouseover", function() {
          calcular();
        });

        var i = 5;
        //adiciona nova linha
        $("#add").on("click", function() {
          i++;

          var newRow = $("<tr>");
          var cols = "";
          cols += '<td><input type="text" class="form-control" id="quantidade' + i + '" name="quantidade[]"></td>';
          cols += '<td><input type="text" class="form-control" id="descricao" name="descricao[]"></td>';
          cols += '<td><input type="text" class="form-control" id="valor_unitario' + i + '" name="valor_unitario[]"></td>';
          cols += '<td><input disabled style="display: none;" type="text" class="form-control soma" id="valor_total' + i + '" name="valor_total[]" onblur="calcular()" readonly>';
          cols += '<input type="text" class="form-control somaS" id="valor_totalS' + i + '"></td>';
          cols += '<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger deleteLinha">X</button> </td>';
          newRow.append(cols);

          $("#products-table").append(newRow);

          $(".soma").each(function() {
            $(this).blur(function() {
              calcular();
            });
          });

        });

        //chamada da função para calcular o total de cada linha
        $("#products-table").on("blur keyup", 'input[id^="valor_unitario"], input[id^="quantidade"]', function(event) {
          calculateRow($(this).closest("tr"));
        });

        //remove linha
        $("#products-table").on("click", "button.deleteLinha", function(event) {
          $(this).closest("tr").remove();
        });
      });

      //função para calcular o total de cada linha   
      function calculateRow(row) {
        var vlund = row.find('input[id^="valor_unitario"]').val();
        //retira separadores de milhar ponto
        vlund = vlund.split(".").join("");
        //substitui separador decimal virgula por ponto
        vlund = vlund.replace(",", ".");
        vlund = +vlund;
        var qnd = +row.find('input[id^="quantidade"]').val();
        //total para uso nos calculos
        //2 casas decimais 
        var total = (vlund * qnd).toFixed(2);
        row.find('input[id^="valor_total"]').val(total);
        //totalS para uso na apresentação substitui separador decimal ponto por virgula
        totalS = total.replace(".", ",");
        //a regex abaixo coloca um ponto a esquerda de cada grupo de 3 digitos desde que não seja no inicio do numero
        row.find('input[id^="valor_totalS"]').val((totalS).replace(/\B(?=(\d{3})+(?!\d))/g, "."));

      }

      //função para calcular o total da nota 
      function calcular() {
        var soma = 0;
        $(".soma").each(function(indice, item) {
          var valor = parseFloat($(item).val());
          //console.log(valor);
          if (!isNaN(valor)) {
            soma += valor;
          }
        });

        //pega o valor das outras despesas e caso haja substitue a virgula por ponto
        var outras = (document.getElementById("outras").value).replace(",", ".");

        outras = Number(outras);
        soma = (soma + outras).toFixed(2);
        //substitui separador decimal ponto por virgula
        soma = soma.replace(".", ",");
        //a regex abaixo coloca um ponto a esquerda de cada grupo de 3 digitos desde que não seja no inicio do numero
        $("#totalnfe").val((soma).replace(/\B(?=(\d{3})+(?!\d))/g, "."))
      }
    </script>
    </div>



    <div class="row col-lg-12">
      <div class="box-footer mb-2 p-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
      <div class="box-footer mb-2 p-3 col-lg-5">
        <a href="<?php echo site_url('cliente') ?>">Voltar</a>
      </div>
    </div>
  </form>


  </body>

  </html>