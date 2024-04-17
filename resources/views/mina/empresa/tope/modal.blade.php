<div class="modal fade" id="modalCreateTope" tabindex="-1" role="dialog" aria-labelledby="modalCreateTopeLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCreateTopeLabel">Crear Tope Operador</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!! Form::open(['route' => 'tope.store']) !!}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="operador_id">Operador</label>
                  <select name="operador_id" id="operador_id" class="form-control form-control-sm selectpicker" data-live-search="true">
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="trimestre">Trimestre</label>
                  <select name="trimestre" id="trimestre" class="form-control form-control-sm selectpicker" data-live-search="true">
                    <option value="Q1">Q1</option>
                    <option value="Q2">Q2</option>
                    <option value="Q3">Q3</option>
                    <option value="Q4">Q4</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="desde">Tope</label>
                  <input type="number" class="form-control form-control-sm" name="tope" placeholder="Ingrese tope">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="desde">Desde</label>
                  <input type="date" class="form-control" name="desde" placeholder="Ingrese la fecha desde" value="now">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="hasta">Hasta</label>
                  <input type="date" class="form-control" name="hasta" placeholder="Ingrese la fecha hasta" value="now">
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>