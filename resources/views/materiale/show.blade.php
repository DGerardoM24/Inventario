@extends('layouts.app')

@section('template_title')
    {{ $materiale->name ?? "{{ __('Show') Materiale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materiale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Material:</strong>
                            {{ $materiale->nombre_material }}
                        </div>
                        <div class="form-group">
                            <strong>Desc Material:</strong>
                            {{ $materiale->desc_material }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $materiale->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $materiale->marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
