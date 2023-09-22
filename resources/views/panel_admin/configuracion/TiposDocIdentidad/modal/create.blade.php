<div class="modal fade" id="modalTiposDocIdentidad" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Tipos de Documento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body" style="padding: 1rem !important;">
            <form id="FormularioTiposDocIdentidad" name="FormularioTiposDocIdentidad" enctype="multipart/form-data" method="POST" >
            <input type="hidden" id="IdDocIdentidad" name="IdDocIdentidad">
            @csrf
          <div class="row">
              <div class="col-xl-6">
                  <div class="form-group">
                      <label style="font-size: 14px;">Descripción:</label>
                       <input type="text" class="form-control form-control-sm" id="DescripcionTiposDocIdentidad" name="DescripcionTiposDocIdentidad"
                        placeholder="Descripcion"  autocomplete="off">
                  </div>
              </div>
              <div class="col-xl-3">
                  <div class="form-group">
                      <label style="font-size: 14px;">Abreviatura:</label>
                      <input type="text" class="form-control form-control-sm" id="DescripcionAbrevTiposDocIdentidad" name="DescripcionAbrevTiposDocIdentidad"
                       placeholder="Abreviatura"  autocomplete="off">
                  </div>
              </div>
              <div class="col-xl-3">
                  <div class="form-group">
                      <label style="font-size: 14px;">Longitud:</label>
                      <input type="number" class="form-control form-control-sm" id="LongitudTiposDocIdentidad" name="LongitudTiposDocIdentidad" min="0"
                       placeholder="Longitud"  autocomplete="off">
                  </div>
              </div>
          </div>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">CERRAR</button>
          <button type="button" class="btn btn-primary" id="registrarTiposDocIdentidad" value="create" >REGISTRAR</button>
        </div>
      </div>
    </div>
</div>

