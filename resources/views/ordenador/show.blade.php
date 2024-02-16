@extends('layouts.app')

@section('template_title')
    {{ $ordenador->name ?? __('Show') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenadores.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $ordenador->marca->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $ordenador->tipo->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ordenador->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
