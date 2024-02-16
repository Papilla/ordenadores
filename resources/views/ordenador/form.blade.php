<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('marcas_id') }}
            {{ Form::select('marcas_id', $marcas, $ordenador->marcas_id, ['class' => 'form-control' . ($errors->has('marcas_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('marcas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipos_id') }}
            {{ Form::select('tipos_id', $tipos, $ordenador->tipos_id, ['class' => 'form-control' . ($errors->has('tipos_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tipos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $ordenador->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
