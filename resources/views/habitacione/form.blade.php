<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('hab_numero') }}
            {{ Form::text('hab_numero', $habitacione->hab_numero, ['class' => 'form-control' . ($errors->has('hab_numero') ? ' is-invalid' : ''), 'placeholder' => 'Hab Numero']) }}
            {!! $errors->first('hab_numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hab_estado') }}
            {{ Form::text('hab_estado', $habitacione->hab_estado, ['class' => 'form-control' . ($errors->has('hab_estado') ? ' is-invalid' : ''), 'placeholder' => 'Hab Estado']) }}
            {!! $errors->first('hab_estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_hab_id') }}
            {{ Form::text('tipo_hab_id', $habitacione->tipo_hab_id, ['class' => 'form-control' . ($errors->has('tipo_hab_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Hab Id']) }}
            {!! $errors->first('tipo_hab_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hab_tarifa') }}
            {{ Form::text('hab_tarifa', $habitacione->hab_tarifa, ['class' => 'form-control' . ($errors->has('hab_tarifa') ? ' is-invalid' : ''), 'placeholder' => 'Hab Tarifa']) }}
            {!! $errors->first('hab_tarifa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hab_capacidad') }}
            {{ Form::text('hab_capacidad', $habitacione->hab_capacidad, ['class' => 'form-control' . ($errors->has('hab_capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Hab Capacidad']) }}
            {!! $errors->first('hab_capacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagenes') }}
            {{ Form::text('imagenes', $habitacione->imagenes, ['class' => 'form-control' . ($errors->has('imagenes') ? ' is-invalid' : ''), 'placeholder' => 'Imagenes']) }}
            {!! $errors->first('imagenes', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>