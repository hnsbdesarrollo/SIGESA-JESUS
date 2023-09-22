
<script>

    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var tabla = $('#listaTiposDestacados').DataTable({
        "processing": true,
        "serverSide": true,
        "resposive": true,
        "autoWidth": false,
        "info": true,
        "bLengthChange": true,
        "ajax": "{{ url('tipos_destacados') }}",
        "type": 'GET',
        "order": [[ 1, 'asc' ]],
        "columns": [
        {data: 'idDestacado',visible: false,searchable: false},
        {data: 'Destacado'},
        {data: 'action', orderable: false},
        ],
        "pageLength": 20,
        "lengthMenu": [[20, 50, 100, 250, -1], [20, 50, 100, 250, "Todo"]],
        "language":{
          "emptyTable":     "No hay Tipos Destacados registradas.",
          "info":           "Mostrando _START_ a _END_ de _TOTAL_ Tipos Destacados",
          "infoEmpty":      "Mostrando 0 a 0 de 0 Tipos Destacados",
          "lengthMenu":     "Mostrar  _MENU_  Tipos Destacados",
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
