<section class="section">
    <div class="card">
        <div class="card-header">
            <h4>TRAMITE</h4>
        </div>
        <div class="card-body">
            <div class="contenido mb-4">
                <div class="row">
                    <div class="col-md-9 col-12 mb-2 mb-md-0">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control global_filter" id="global_filter">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <button class="btn btn-primary" style="width: 100%;" onclick="cargar_contenido('contenido_principal','registro_tramite.php')">Nuevo</button>
                    </div>
                </div>
                    <table id="tabla_tramite" class="display responsive table" style="width:100%">
                        <thead>
                        <tr>
                          <th>Nro Seguimiento</th>
                          <th >Nro Doc</th>
                          <th>Tipo Doc</th>
                          <th>Remitente</th>
                          <th>Mas Datos</th>
                          <th>Seguimiento</th>
                          <th>Aréa Origen</th>
                          <th>Aréa Localizado</th>
                          <th>Estado Documento</th>
                      </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>
<script src="../js/console_tramite.js"></script>
<div class="modal fade" id="modal_mas"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="lbl_titulo_datos">DATOS DEL TRAMITE</h5>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
  
      </div>
    </div>
  </div>
<script>
    listar_tramite()
</script>