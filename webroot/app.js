$(document).ready( function () {
    $('.table').DataTable({
      language : {
          "decimal":        "",
          "emptyTable":     "Sem registros disponíveis",
          "info":           "Mostrando _START_ até _END_ dos últimos _TOTAL_ registros",
          "infoEmpty":      "Sem registros",
          "infoFiltered":   "(filtro de _MAX_ registros)",
          "infoPostFix":    "",
          "thousands":      ",",
          "lengthMenu":     "Mostrar _MENU_ registros",
          "loadingRecords": "Carregando...",
          "processing":     "Processando...",
          "search":         "Pesquisar:",
          "zeroRecords":    "Sem registros encontrados",
          "paginate": {
              "first":      "Primeiro",
              "last":       "Última",
              "next":       "Próxima",
              "previous":   "Anterior"
          },
      }
    });
} );
