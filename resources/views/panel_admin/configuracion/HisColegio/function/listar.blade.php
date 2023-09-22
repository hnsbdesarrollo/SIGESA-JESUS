
<script>

    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var tabla = $('#listaHisColegio').DataTable({
        "processing": true,
        "serverSide": true,
        "resposive": true,
        "autoWidth": false,
        "info": true,
        "bLengthChange": true,
        "ajax": "{{ url('his_colegio') }}",
        "type": 'GET',
        "order": [[ 0, 'asc' ]],
        "columns": [
        {data: 'cod_col',visible: true,searchable: false},
        {data: 'des_col'},
        {data: 'action', orderable: false},
        ],
        "pageLength": 20,
        "lengthMenu": [[20, 50, 100, 250, -1], [20, 50, 100, 250, "Todo"]],
        "language":{
          "emptyTable":     "No hay Tipos de Documentos de Identidad registradas.",
          "info":           "Mostrando _START_ a _END_ de _TOTAL_ Tipos de Documentos de Identidad",
          "infoEmpty":      "Mostrando 0 a 0 de 0 Tipos de Documentos de Identidad",
          "lengthMenu":     "Mostrar  _MENU_  Tipos de Documentos de Identidad",
          "loadingRecords": "Cargando...",
          "processing":     "Procesando...",
          "search":         "Buscar: ",
          "zeroRecords":    "Ningún dato coincide con la búsqueda.",
          "paginate": {
            "first":      "Primero",
            "last":       "Último",
            "next":       "Siguiente",
            "previous":   "Anterior"
          }
        }
      });

    });

    </script>