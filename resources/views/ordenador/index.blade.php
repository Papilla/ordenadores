@extends('layouts.app')

@section('template_title')
    Ordenador
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-primary text-white bg-dark">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ordenadores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ordenadores.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                            <table class="table table-secondary">
                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>

										<th>Marca</th>
										<th>Tipo</th>
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordenadores as $ordenador)
                                    <tr class="table-active">
                                            <td>{{ ++$i }}</td>

											<td>{{ $ordenador->marca->nombre }}</td>
											<td>{{ $ordenador->tipo->tipo }}</td>
											<td>{{ $ordenador->nombre }}</td>

                                            <td>
                                                <form action="{{ route('ordenadores.destroy',$ordenador->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-info " href="{{ route('ordenadores.show',$ordenador->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('ordenadores.edit',$ordenador->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $ordenadores->links() !!}
            </div>
        </div>
    </div>
@endsection
