@extends('layouts.app')

@section('template_title')
    Habitacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Habitaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('habitaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Habitacion') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Hab Numero</th>
										<th>Hab Estado</th>
										<th>Tipo Hab Id</th>
										<th>Hab Tarifa</th>
										<th>Hab Capacidad</th>
										<th>Imagenes</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($habitaciones as $habitacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $habitacione->hab_numero }}</td>
											<td>{{ $habitacione->hab_estado }}</td>
											<td>{{ $habitacione->tipo_hab_id }}</td>
											<td>{{ $habitacione->hab_tarifa }}</td>
											<td>{{ $habitacione->hab_capacidad }}</td>
											<td>{{ $habitacione->imagenes }}</td>

                                            <td>
                                                <form action="{{ route('habitaciones.destroy',$habitacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('habitaciones.show',$habitacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('habitaciones.edit',$habitacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $habitaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
