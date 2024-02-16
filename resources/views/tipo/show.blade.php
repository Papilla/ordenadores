@extends('layouts.app')

@section('template_title')
    {{ $tipo->name ?? __('Mostrar') }}
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
                            <a class="btn btn-primary" href="{{ route('tipos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $tipo->tipo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
