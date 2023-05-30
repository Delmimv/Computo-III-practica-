@extends('layouts.app')

@section('template_title')
    {{ $project->name ?? "{{ __('Show') Project" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Project</span>

                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projects.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $project->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $project->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Vencimiento:</strong>
                            {{ $project->Fecha_Vencimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $project->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
