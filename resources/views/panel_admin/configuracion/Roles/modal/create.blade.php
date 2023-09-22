<div class="modal fade" id="modalRoles" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Roles</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body" style="padding: 1rem !important;">
            <form id="FormularioRoles" name="FormularioRoles" enctype="multipart/form-data" method="POST" >
            <input type="text" id="IdRol" name="IdRol">
            @csrf
          <div class="row">
              <div class="col-xl-6">
                  <div class="form-group">
                      <label style="font-size: 14px;">Descripción:</label>
                       <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre"
                        placeholder="Descripcion"  autocomplete="off">
                  </div>
              </div>
              
          </div>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">CERRAR</button>
          <button type="button" class="btn btn-primary" id="registrarRoles" value="create" >REGISTRAR</button>
        </div>
      </div>
    </div>
</div>

