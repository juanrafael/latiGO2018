@extends('layouts/app')

@section('content')

    <div id="" class="container">
        <div class="menu-card">
            <a class="menu-card-link" href="{{ route('mostrarVistaUnidad') }}">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Unidad</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-briefcase"></span>
                  </div>
                </div>
            </a>

            <a class="menu-card-link" href="#">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Proyecto</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-clipboard"></span>
                  </div>
                </div>
            </a>

            <a class="menu-card-link" href="{{ route('mostrarVistaPersonal') }}">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Personal</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-user-circle-o"></span>
                  </div>
                </div>
            </a>

            <a class="menu-card-link" href="#">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Cronograma</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-calendar"></span>
                  </div>
                </div>
            </a>

            <a class="menu-card-link" href="#">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Usuario</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-user-plus"></span>
                  </div>
                </div>
            </a>

            <a class="menu-card-link" href="#">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Documentos</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-file-text-o"></span>
                  </div>
                </div>
            </a>

            <a class="menu-card-link" href="#">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Reportes</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-line-chart"></span>
                  </div>
                </div>
            </a>

            <a class="menu-card-link" href="#">
                <div class="card border-secondary mb-3">
                  <div class="card-header">Notificaciones</div>
                  <div class="card-body text-primary">
                    <span class="card-icon fa fa-envelope-o"></span>
                  </div>
                </div>
            </a>
        </div>
    </div>

@endsection