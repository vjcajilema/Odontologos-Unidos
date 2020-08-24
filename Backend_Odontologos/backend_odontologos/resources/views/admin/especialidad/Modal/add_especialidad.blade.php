<div class="modal fade" id="add_especialidad" tabindex="-1" role="dialog" aria-labelledby="add_especialidad" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">
                    <i class="fas fa-plus"></i> Agregar Especialidad
                </h4>
            </div>
            {{ Form::open(['route' => ['especialidad.store'], 'method' => 'POST', 'files' => true]) }}
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                        {{ Form::label('name', 'Nombre *') }}
                        {{ Form::text('name', null, ['required', 'class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                        <label class="form-control-label" for="description">{{ __('Descripción') }}</label>
						            <textarea type="text" id="description" name="description" placeholder="Descripción" class="form-control"  required></textarea>                        </div>

                    </div>


                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>