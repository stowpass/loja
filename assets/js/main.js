$(document).ready(function () {

  $('.btn-apagar-registro').on('click', function () {

    if (confirm("Deseja Realmente deletar esse registro")) {
      return true;
    }else{
      return false;
      
    }
  });


  $('.input_cep').mask('00.000-000');
  $('.input_data').mask('00/00/0000');
  $('.input_cpf').mask('000.000.000-00');

  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
    spOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

  $('.input_telefone').mask(SPMaskBehavior, spOptions);






  $('.table_listar_data-table').DataTable();
});