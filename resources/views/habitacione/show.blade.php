@extends('layouts.app')

@section('template_title')
    {{ $habitacione->name ?? "{{ __('Show') Habitacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Hbitacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('habitaciones.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero de habitacion:</strong>
                            {{ $habitacione->hab_numero }}
                        </div>
                        <div class="form-group">
                            <strong>Estado de habitacion:</strong>
                            {{ $habitacione->hab_estado }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Habitacion id:</strong>
                            {{ $habitacione->tipo_hab_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tarifa habitacion:</strong>
                            {{ $habitacione->hab_tarifa }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad de habitacion:</strong>
                            {{ $habitacione->hab_capacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Imagenes:</strong>
                            {{ $habitacione->imagenes }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
