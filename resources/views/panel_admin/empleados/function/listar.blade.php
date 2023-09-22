
<script>

    $(document).ready(function () {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      var tabla = $('#listaEmpelados').DataTable({
        "processing": true,
        "serverSide": true,
        "resposive": true,
        "autoWidth": false,
        "info": true,
        "bLengthChange": true,
        "ajax": "{{ url('empleados') }}",
        "type": 'GET',
        "order": [[ 1, 'asc' ]],
        "columns": [
        {data: 'IdEmpleado',visible: false,searchable: false},
        {data: 'ApellidoPaterno',visible: false,searchable: false},
        {
            render: function(data, type, row) {
                return '<b>N° DNI: '+row.DNI+'</b><br>'+row.dEmpleado;
            }
        },
        {
            render: function(data, type, row) {
                return row.TipoEmpleado+'<br><b>Condición: '+row.CondicionTrabajo+'</b>';
            }
        },
        {
            render: function(data, type, row) {
                if (row.Departamento) {
                    return row.Departamento+'<br><b>Servicio: '+row.Servicio+'</b>';
                }else{
                    return "";
                }
            }
        },
        {
        data: 'esActivo',
        name: 'esActivo',
        render: function(data, type, row) {
            if(row.esActivo==1){
                return '<span class="badge light badge-success"> <i class="fa fa-circle text-success me-1"></i> ACTIVO </span>';
            }else{
                return '<span class="badge light badge-danger"> <i class="fa fa-circle text-danger me-1"></i> INACTIVO </span>';
            }
        }
        },
        {data: 'action', orderable: false},
        ],
        "pageLength": 20,
        "lengthMenu": [[20, 50, 100, 250, -1], [20, 50, 100, 250, "Todo"]],
        "language":{
          "emptyTable":     "No hay Empleados registradas.",
          "info":           "Mostrando _START_ a _END_ de _TOTAL_ Empleados",
          "infoEmpty":      "Mostrando 0 a 0 de 0 Empleados",
          "lengthMenu":     "Mostrar  _MENU_  Empleados",
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
